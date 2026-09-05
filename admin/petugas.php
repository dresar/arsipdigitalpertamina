<?php include 'header.php'; ?>

<!-- Custom CSS untuk Tampilan Petugas -->
<style>
    /* Card Styling */
    .petugas-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        margin-bottom: 20px;
        overflow: hidden;
    }
    
    /* Header Card */
    .card-header {
        background: linear-gradient(to right, #1cc88a, #13855c);
        color: white;
        padding: 15px 20px;
        font-weight: 600;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .card-header .card-title {
        margin: 0;
        font-size: 18px;
    }
    
    /* Card Body */
    .card-body {
        padding: 20px;
    }
    
    /* Button Style */
    .btn-custom {
        border-radius: 30px;
        padding: 8px 18px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .btn-primary.btn-custom {
        background: #1cc88a;
        border-color: #1cc88a;
    }
    
    .btn-primary.btn-custom:hover {
        background: #17a673;
        border-color: #17a673;
    }
    
    /* Stat Card */
    .stat-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 25px 20px;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
        margin-bottom: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        transition: all 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.3rem 2rem 0 rgba(58, 59, 69, 0.15);
    }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        color: white;
        font-size: 24px;
    }
    
    .icon-petugas {
        background: linear-gradient(to right, #1cc88a, #13855c);
    }
    
    .stat-value {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #333;
    }
    
    .stat-label {
        font-size: 14px;
        color: #858796;
    }
    
    /* Table Styling */
    .table-custom {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .table-custom thead th {
        background-color: #f8f9fc;
        border-bottom: 2px solid #e3e6f0;
        color: #6e707e;
        font-weight: 600;
        padding: 12px 15px;
        text-align: left;
    }
    
    .table-custom tbody tr {
        transition: all 0.3s;
    }
    
    .table-custom tbody tr:hover {
        background-color: #f8f9fc;
    }
    
    .table-custom tbody td {
        padding: 12px 15px;
        border-bottom: 1px solid #e3e6f0;
        vertical-align: middle;
    }
    
    .table-custom tbody tr:last-child td {
        border-bottom: none;
    }
    
    /* Petugas Photo */
    .img-user {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    /* Action Buttons */
    .btn-action {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin: 0 3px;
        transition: all 0.3s;
        border: none;
    }
    
    .btn-action:hover {
        transform: scale(1.1);
    }
    
    .btn-edit {
        background-color: #1cc88a;
        color: white;
    }
    
    .btn-edit:hover {
        background-color: #17a673;
    }
    
    .btn-delete {
        background-color: #e74a3b;
        color: white;
    }
    
    .btn-delete:hover {
        background-color: #d52a1a;
    }
    
    /* Responsive Fixes */
    @media (max-width: 768px) {
        .btn-action {
            width: 30px;
            height: 30px;
            font-size: 12px;
        }
        
        .img-user {
            width: 35px;
            height: 35px;
        }
    }
    
    @media (max-width: 576px) {
        .card-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .card-header .btn {
            margin-top: 10px;
        }
    }
    
    /* Enhancements for DataTable */
    div.dataTables_wrapper div.dataTables_filter input {
        margin-left: 0.5em;
        border-radius: 20px;
        border: 1px solid #e3e6f0;
        padding: 5px 15px;
    }
    
    div.dataTables_wrapper div.dataTables_length select {
        border-radius: 20px;
        border: 1px solid #e3e6f0;
        padding: 5px 10px;
    }
    
    .pagination > li > a,
    .pagination > li > span {
        border-radius: 5px;
        margin: 0 3px;
        color: #1cc88a;
        border-color: #e3e6f0;
    }
    
    .pagination > .active > a,
    .pagination > .active > span {
        background-color: #1cc88a;
        border-color: #1cc88a;
    }
    
    .pagination > .active > a:hover,
    .pagination > .active > span:hover {
        background-color: #17a673;
        border-color: #17a673;
    }
    
    /* Empty space filler */
    .space-filler {
        height: 15px;
    }
</style>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Petugas</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Petugas</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="stat-card">
                <div class="stat-icon icon-petugas">
                    <i class="fa fa-user-circle-o"></i>
                </div>
                <?php 
                include '../koneksi.php';
                $petugas = mysqli_query($koneksi,"SELECT * FROM petugas");
                $jumlah_petugas = mysqli_num_rows($petugas);
                ?>
                <div class="stat-value"><?php echo $jumlah_petugas; ?></div>
                <div class="stat-label">Total Petugas</div>
            </div>
        </div>
    </div>

    <div class="petugas-card">
        <div class="card-header">
            <h3 class="card-title">Data Petugas</h3>
            <div>
                <a href="petugas_tambah.php" class="btn btn-primary btn-custom">
                    <i class="fa fa-plus"></i> Tambah Petugas
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="space-filler"></div>
            <table id="table" class="table table-custom table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="5%">Foto</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $petugas = mysqli_query($koneksi,"SELECT * FROM petugas ORDER BY petugas_id DESC");
                    while($p = mysqli_fetch_array($petugas)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                                <?php 
                                if($p['petugas_foto'] == ""){
                                    ?>
                                    <img class="img-user" src="../gambar/sistem/user.png">
                                    <?php
                                }else{
                                    ?>
                                    <img class="img-user" src="../gambar/petugas/<?php echo $p['petugas_foto']; ?>">
                                    <?php
                                }
                                ?>
                            </td>
                            <td><?php echo $p['petugas_nama'] ?></td>
                            <td><?php echo $p['petugas_username'] ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="petugas_edit.php?id=<?php echo $p['petugas_id']; ?>" class="btn btn-action btn-edit" title="Edit">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a href="petugas_hapus.php?id=<?php echo $p['petugas_id']; ?>" class="btn btn-action btn-delete" title="Hapus" onclick="return confirm('Yakin ingin menghapus petugas ini?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambahan Script untuk DataTable yang ditingkatkan -->
<script>
$(document).ready(function() {
    $('#table').DataTable({
        responsive: true,
        "language": {
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Tidak ada data yang ditemukan",
            "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada data yang tersedia",
            "infoFiltered": "(difilter dari _MAX_ total data)",
            "search": "Cari:",
            "paginate": {
                "first": "Pertama",
                "last": "Terakhir",
                "next": "Selanjutnya",
                "previous": "Sebelumnya"
            }
        }
    });
});
</script>

<?php include 'footer.php'; ?>