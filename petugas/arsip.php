<?php include 'header.php'; ?>

<style>
    /* General styling */
    body {
        background-color: #f5f7fa;
    }
    
    .breadcome-area {
        background: #f8f9fa;
        padding: 15px 0;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        margin-bottom: 25px;
    }
    
    .breadcome-list {
        padding: 15px;
        border-radius: 8px;
        background: white;
    }
    
    .breadcome-heading h4 {
        font-weight: 600;
        color: #2c3e50;
    }
    
    /* Panel styling */
    .panel {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        border: none;
        margin-bottom: 30px;
        overflow: hidden;
    }
    
    .panel-heading {
        background: #3498db;
        color: white;
        padding: 15px 20px;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .panel-title {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }
    
    .panel-body {
        padding: 25px;
    }
    
    /* Upload button */
    .btn-upload {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 16px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        box-shadow: 0 3px 5px rgba(52, 152, 219, 0.2);
    }
    
    .btn-upload:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(52, 152, 219, 0.3);
    }
    
    .btn-upload i {
        margin-right: 8px;
        font-size: 16px;
    }
    
    /* Alerts */
    .alert {
        border-radius: 6px;
        padding: 15px 20px;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }
    
    .alert-danger {
        background-color: #feebed;
        color: #e74c3c;
        border-left: 4px solid #e74c3c;
    }
    
    .alert-success {
        background-color: #edfbf6;
        color: #2ecc71;
        border-left: 4px solid #2ecc71;
    }
    
    .alert i {
        margin-right: 8px;
    }
    
    /* Table styling */
    .table-datatable {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
    }
    
    .table-datatable thead th {
        background-color: #f8f9fa;
        color: #34495e;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 12px;
        padding: 12px 15px;
        border-bottom: 2px solid #e9ecef;
    }
    
    .table-datatable tbody tr {
        transition: all 0.3s ease;
    }
    
    .table-datatable tbody tr:hover {
        background-color: #f7fbff;
    }
    
    .table-datatable td {
        padding: 12px 15px;
        vertical-align: middle;
        border-bottom: 1px solid #f1f1f1;
    }
    
    /* Archive info styling */
    .archive-info {
        margin-bottom: 0;
    }
    
    .archive-info-item {
        margin-bottom: 3px;
    }
    
    .archive-info-label {
        font-weight: 600;
        display: inline-block;
        width: 60px;
        color: #34495e;
    }
    
    /* File type badge */
    .file-type {
        display: inline-block;
        padding: 3px 8px;
        border-radius: 3px;
        font-size: 11px;
        font-weight: 500;
        color: white;
        background-color: #3498db;
    }
    
    .file-pdf {
        background-color: #e74c3c;
    }
    
    .file-doc, .file-docx {
        background-color: #3498db;
    }
    
    .file-xls, .file-xlsx {
        background-color: #2ecc71;
    }
    
    .file-jpg, .file-jpeg, .file-png, .file-gif {
        background-color: #9b59b6;
    }
    
    /* Action buttons */
    .btn-group {
        display: inline-flex;
    }
    
    .btn-action {
        padding: 8px 12px;
        margin: 0 2px;
        border-radius: 4px;
        color: #7f8c8d;
        background-color: #f8f9fa;
        border: 1px solid #f1f1f1;
        transition: all 0.2s ease;
    }
    
    .btn-action:hover {
        background-color: #ecf0f1;
    }
    
    .btn-download {
        color: #3498db;
    }
    
    .btn-download:hover {
        color: #2980b9;
        background-color: #e8f4fb;
    }
    
    .btn-preview {
        color: #f39c12;
    }
    
    .btn-preview:hover {
        color: #d35400;
        background-color: #fef5e7;
    }
    
    .btn-edit {
        color: #2ecc71;
    }
    
    .btn-edit:hover {
        color: #27ae60;
        background-color: #eafaf1;
    }
    
    .btn-delete {
        color: #e74c3c;
    }
    
    .btn-delete:hover {
        color: #c0392b;
        background-color: #fdeaeb;
    }
    
    /* Modal styling */
    .modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #f1f1f1;
        padding: 15px 20px;
    }
    
    .modal-title {
        font-weight: 600;
        color: #2c3e50;
    }
    
    .modal-body {
        padding: 20px;
        font-size: 15px;
        color: #7f8c8d;
    }
    
    .modal-footer {
        border-top: 1px solid #f1f1f1;
        padding: 15px 20px;
    }
    
    .modal-btn-cancel {
        background-color: #ecf0f1;
        color: #7f8c8d;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-weight: 500;
    }
    
    .modal-btn-confirm {
        background-color: #e74c3c;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-weight: 500;
    }
    
    /* Upload guide */
    .upload-guide {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 25px;
        border-left: 4px solid #3498db;
        display: none;
    }
    
    .upload-guide h4 {
        color: #2c3e50;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    
    .upload-guide h4 i {
        margin-right: 8px;
        color: #3498db;
    }
    
    .upload-guide-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .upload-guide-item {
        display: flex;
        margin-bottom: 12px;
    }
    
    .upload-guide-item:last-child {
        margin-bottom: 0;
    }
    
    .upload-guide-icon {
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        background-color: #3498db;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
        font-size: 12px;
        font-weight: 600;
    }
    
    .upload-guide-text {
        flex-grow: 1;
        font-size: 14px;
        color: #7f8c8d;
    }
    
    .upload-guide-text strong {
        color: #34495e;
    }
    
    .upload-guide-footer {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #e9ecef;
    }
    
    .upload-guide-footer p {
        font-size: 13px;
        color: #7f8c8d;
        margin-bottom: 0;
    }
    
    .upload-guide-footer strong {
        color: #e74c3c;
    }
    
    .toggle-guide {
        background: none;
        border: none;
        color: #3498db;
        padding: 0;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        margin-left: 10px;
        outline: none;
        display: inline-flex;
        align-items: center;
    }
    
    .toggle-guide i {
        margin-left: 5px;
    }
    
    .toggle-guide:hover {
        text-decoration: underline;
    }
    
    /* Empty state */
    .empty-state {
        text-align: center;
        padding: 40px 20px;
    }
    
    .empty-state i {
        font-size: 48px;
        color: #e0e6ed;
        margin-bottom: 15px;
    }
    
    .empty-state h4 {
        font-size: 18px;
        color: #7f8c8d;
        margin-bottom: 10px;
    }
    
    .empty-state p {
        color: #95a5a6;
        max-width: 500px;
        margin: 0 auto;
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
                                <h4 style="margin-bottom: 0px"><i class="fa fa-archive"></i> Data Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Arsip</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-folder-open"></i> Data Arsip Saya</h3>
            <div>
                <a href="#" class="toggle-guide" onclick="toggleGuide()">
                    Panduan Upload <i class="fa fa-question-circle"></i>
                </a>
            </div>
        </div>
        
        <div class="panel-body">
            <!-- Upload Guide -->
            <div class="upload-guide" id="uploadGuide">
                <h4><i class="fa fa-lightbulb-o"></i> Panduan Upload Arsip</h4>
                
                <ul class="upload-guide-list">
                    <li class="upload-guide-item">
                        <div class="upload-guide-icon">1</div>
                        <div class="upload-guide-text">
                            <strong>Jenis file yang didukung:</strong> PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, PNG, dan GIF.
                        </div>
                    </li>
                    <li class="upload-guide-item">
                        <div class="upload-guide-icon">2</div>
                        <div class="upload-guide-text">
                            <strong>Ukuran maksimal file:</strong> 10MB per file.
                        </div>
                    </li>
                    <li class="upload-guide-item">
                        <div class="upload-guide-icon">3</div>
                        <div class="upload-guide-text">
                            <strong>Penamaan file:</strong> Gunakan nama yang jelas dan deskriptif, hindari karakter khusus.
                        </div>
                    </li>
                    <li class="upload-guide-item">
                        <div class="upload-guide-icon">4</div>
                        <div class="upload-guide-text">
                            <strong>Pilih kategori:</strong> Pastikan untuk memilih kategori yang sesuai agar arsip mudah ditemukan.
                        </div>
                    </li>
                    <li class="upload-guide-item">
                        <div class="upload-guide-icon">5</div>
                        <div class="upload-guide-text">
                            <strong>Isi keterangan:</strong> Berikan keterangan yang jelas tentang isi file untuk memudahkan pencarian.
                        </div>
                    </li>
                </ul>
                
                <div class="upload-guide-footer">
                    <p><strong>Catatan penting:</strong> File dengan ekstensi .php, .js, .exe dan file berbahaya lainnya tidak diperbolehkan untuk alasan keamanan. Pastikan data yang diupload tidak mengandung informasi sensitif.</p>
                </div>
            </div>
            
            <?php 
            if(isset($_GET['alert'])){
                if($_GET['alert'] == "gagal"){
                    ?>
                    <div class="alert alert-danger">
                        <i class="fa fa-times-circle"></i> <strong>Upload Gagal!</strong> File arsip gagal diupload. Karena demi keamanan, file .php tidak diperbolehkan.
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-success">
                        <i class="fa fa-check-circle"></i> <strong>Upload Berhasil!</strong> Arsip Anda telah berhasil tersimpan ke dalam sistem.
                    </div>
                    <?php
                }
            }
            ?>
            
            <div class="text-right mb-4">
                <a href="arsip_tambah.php" class="btn btn-upload">
                    <i class="fa fa-cloud-upload"></i> Upload Arsip Baru
                </a>
            </div>
            
            <?php 
            include '../koneksi.php';
            $saya = $_SESSION['id'];
            $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id and arsip_kategori=kategori_id and arsip_petugas='$saya' ORDER BY arsip_id DESC");
            $count = mysqli_num_rows($arsip);
            
            if($count > 0) {
            ?>
            
            <div class="table-responsive">
                <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Waktu Upload</th>
                            <th>Arsip</th>
                            <th>Kategori</th>
                            <th>Petugas</th>
                            <th>Keterangan</th>
                            <th class="text-center" width="20%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        while($p = mysqli_fetch_array($arsip)){
                            // Determine file type class
                            $file_class = "file-other";
                            $jenis = strtolower($p['arsip_jenis']);
                            
                            if($jenis == "pdf") {
                                $file_class = "file-pdf";
                            } else if($jenis == "doc" || $jenis == "docx") {
                                $file_class = "file-doc";
                            } else if($jenis == "xls" || $jenis == "xlsx") {
                                $file_class = "file-xls";
                            } else if(in_array($jenis, ["jpg", "jpeg", "png", "gif"])) {
                                $file_class = "file-jpg";
                            }
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><i class="fa fa-clock-o"></i> <?php echo date('H:i:s  d-m-Y',strtotime($p['arsip_waktu_upload'])) ?></td>
                            <td>
                                <div class="archive-info">
                                    <div class="archive-info-item">
                                        <span class="archive-info-label">KODE</span>: <?php echo $p['arsip_kode'] ?>
                                    </div>
                                    <div class="archive-info-item">
                                        <span class="archive-info-label">Nama</span>: <?php echo $p['arsip_nama'] ?>
                                    </div>
                                    <div class="archive-info-item">
                                        <span class="archive-info-label">Jenis</span>: 
                                        <span class="file-type <?php echo $file_class; ?>"><?php echo strtoupper($p['arsip_jenis']) ?></span>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $p['kategori_nama'] ?></td>
                            <td><?php echo $p['petugas_nama'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a target="_blank" class="btn btn-action btn-download" href="../arsip/<?php echo $p['arsip_file']; ?>" title="Download">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a target="_blank" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-action btn-preview" title="Preview">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="arsip_edit.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-action btn-edit" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-action btn-delete" data-toggle="modal" data-target="#deleteModal_<?php echo $p['arsip_id']; ?>" title="Hapus">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                
                                <!-- Delete Confirmation Modal -->
                                <div class="modal fade" id="deleteModal_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="fa fa-exclamation-triangle" style="color: #e74c3c;"></i> Konfirmasi Hapus
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus arsip <strong><?php echo $p['arsip_nama']; ?></strong>?</p>
                                                <p><strong>Perhatian:</strong> File dan semua data yang berhubungan akan dihapus secara permanen dan tidak dapat dikembalikan.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn modal-btn-cancel" data-dismiss="modal">Batalkan</button>
                                                <a href="arsip_hapus.php?id=<?php echo $p['arsip_id']; ?>" class="btn modal-btn-confirm">
                                                    <i class="fa fa-check"></i> Ya, Hapus
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <?php } else { ?>
            
            <!-- Empty State -->
            <div class="empty-state">
                <i class="fa fa-folder-open-o"></i>
                <h4>Belum Ada Arsip</h4>
                <p>Anda belum memiliki arsip yang tersimpan. Klik tombol "Upload Arsip Baru" untuk menambahkan arsip pertama Anda.</p>
                
                <div style="margin-top: 20px;">
                    <a href="arsip_tambah.php" class="btn btn-upload">
                        <i class="fa fa-cloud-upload"></i> Upload Arsip Baru
                    </a>
                </div>
            </div>
            
            <?php } ?>
        </div>
    </div>
</div>

<script>
function toggleGuide() {
    var guide = document.getElementById('uploadGuide');
    if (guide.style.display === 'none' || guide.style.display === '') {
        guide.style.display = 'block';
    } else {
        guide.style.display = 'none';
    }
}
</script>

<?php include 'footer.php'; ?>