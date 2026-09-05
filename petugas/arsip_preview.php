<?php include 'header.php'; ?>

<!-- Simple CSS that should work in most environments -->
<style>
    /* Simple header styling */
    .preview-header {
        background-color: #3498db;
        color: white;
        padding: 15px;
        margin-bottom: 20px;
    }
    
    .preview-header h3 {
        margin: 0;
        font-size: 20px;
    }
    
    /* Back button */
    .btn-back {
        background-color: #3498db;
        color: white;
        padding: 8px 15px;
        border-radius: 4px;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 20px;
    }
    
    .btn-back:hover {
        background-color: #2980b9;
    }
    
    /* Info table styling */
    .info-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    .info-table th {
        background-color: #f8f9fa;
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
        width: 40%;
    }
    
    .info-table td {
        padding: 10px;
        border: 1px solid #ddd;
    }
    
    /* File badge */
    .file-badge {
        background-color: #3498db;
        color: white;
        padding: 3px 8px;
        border-radius: 3px;
        font-size: 12px;
    }
    
    /* Preview container */
    .preview-container {
        border: 1px solid #ddd;
        padding: 20px;
        min-height: 400px;
        background-color: #f9f9f9;
        margin-bottom: 20px;
    }
    
    .preview-container img {
        max-width: 100%;
    }
    
    /* Download button */
    .download-btn {
        background-color: #27ae60;
        color: white;
        padding: 10px 15px;
        border-radius: 4px;
        text-decoration: none;
        display: block;
        text-align: center;
        width: 100%;
    }
    
    .download-btn:hover {
        background-color: #219653;
    }
    
    /* No preview message */
    .no-preview {
        text-align: center;
        padding: 50px 20px;
    }
    
    .no-preview a {
        color: #3498db;
        text-decoration: underline;
    }
</style>

<!-- Page Header -->
<div class="preview-header">
    <h3><i class="fa fa-file-text-o"></i> Preview Arsip</h3>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Back Button -->
            <a href="arsip.php" class="btn-back">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            
            <?php 
            $id = $_GET['id'];  
            $data = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id and arsip_kategori=kategori_id and arsip_id='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
            
            <div class="row">
                <!-- Archive Info Section -->
                <div class="col-lg-4">
                    <table class="info-table">
                        <tr>
                            <th>Kode Arsip</th>
                            <td><?php echo $d['arsip_kode']; ?></td>
                        </tr>
                        <tr>
                            <th>Waktu Upload</th>
                            <td><?php echo date('H:i:s d-m-Y',strtotime($d['arsip_waktu_upload'])) ?></td>
                        </tr>
                        <tr>
                            <th>Nama File</th>
                            <td><?php echo $d['arsip_nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><?php echo $d['kategori_nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Jenis File</th>
                            <td>
                                <span class="file-badge"><?php echo strtoupper($d['arsip_jenis']); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Petugas Pengupload</th>
                            <td><?php echo $d['petugas_nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td><?php echo $d['arsip_keterangan']; ?></td>
                        </tr>
                    </table>
                    
                    <!-- Download Button -->
                    <a href="../arsip/<?php echo $d['arsip_file']; ?>" class="download-btn" target="_blank">
                        <i class="fa fa-download"></i> Download File
                    </a>
                </div>
                
                <!-- Preview Section -->
                <div class="col-lg-8">
                    <div class="preview-container">
                        <?php 
                        if($d['arsip_jenis'] == "png" || $d['arsip_jenis'] == "jpg" || $d['arsip_jenis'] == "gif" || $d['arsip_jenis'] == "jpeg"){
                        ?>
                            <img src="../arsip/<?php echo $d['arsip_file']; ?>" alt="<?php echo $d['arsip_nama']; ?>">
                        <?php
                        } elseif($d['arsip_jenis'] == "pdf"){
                        ?>
                            <div class="pdf-singe-pro">
                                <a class="media" href="../arsip/<?php echo $d['arsip_file']; ?>"></a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="no-preview">
                                <h4>Preview tidak tersedia</h4>
                                <p>File dengan format <?php echo strtoupper($d['arsip_jenis']); ?> tidak dapat ditampilkan.</p>
                                <a target="_blank" href="../arsip/<?php echo $d['arsip_file']; ?>">
                                    Download file
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            <?php 
            }
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>