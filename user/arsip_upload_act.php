<?php
// Koneksi ke database
include 'koneksi.php';

// Cek jika form disubmit
if(isset($_POST['submit'])){
    
    // Ambil data dari form
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];
    $petugas = $_POST['petugas'];
    
    // Waktu upload (saat ini)
    $waktu = date('Y-m-d H:i:s');
    
    // Upload file
    $rand = rand();
    $allowed_ext = array('pdf', 'doc', 'docx', 'xls', 'xlsx', 'jpg', 'jpeg', 'png');
    $file_name = $_FILES['file']['name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $nama_file_baru = $rand.'_'.$file_name;
    
    // Validasi file
    if(in_array($file_ext, $allowed_ext) === true){
        // Jika ukuran file kurang dari 10MB
        if($file_size < 10000000){
            // Upload file
            move_uploaded_file($file_tmp, 'arsip/'.$nama_file_baru);
            
            // Simpan data ke database
            $query = "INSERT INTO arsip (arsip_waktu_upload, arsip_petugas, arsip_kode, arsip_nama, arsip_jenis, arsip_kategori, arsip_keterangan, arsip_file) 
                      VALUES ('$waktu', '$petugas', '$kode', '$nama', '$file_ext', '$kategori', '$keterangan', '$nama_file_baru')";
            
            $result = mysqli_query($koneksi, $query);
            
            if($result){
                // Jika berhasil, catat di upload_log
                $arsip_id = mysqli_insert_id($koneksi);
                $ip_address = $_SERVER['REMOTE_ADDR'];
                
                $log_query = "INSERT INTO upload_log (upload_waktu, upload_petugas, upload_arsip, upload_status, upload_keterangan, upload_ip_address) 
                              VALUES ('$waktu', '$petugas', '$arsip_id', 'success', 'Upload berhasil', '$ip_address')";
                mysqli_query($koneksi, $log_query);
                
                header("location:arsip.php?alert=sukses");
            } else {
                // Jika gagal menyimpan ke database
                $ip_address = $_SERVER['REMOTE_ADDR'];
                $log_query = "INSERT INTO upload_log (upload_waktu, upload_petugas, upload_arsip, upload_status, upload_keterangan, upload_ip_address) 
                              VALUES ('$waktu', '$petugas', '0', 'failed', 'Gagal menyimpan ke database', '$ip_address')";
                mysqli_query($koneksi, $log_query);
                
                header("location:arsip.php?alert=gagal");
            }
        } else {
            // Jika ukuran file terlalu besar
            header("location:arsip.php?alert=ukuran");
        }
    } else {
        // Jika tipe file tidak diizinkan
        header("location:arsip.php?alert=ekstensi");
    }
} else {
    // Jika akses langsung ke file ini tanpa submit form
    header("location:arsip.php");
}
?>
