<?php include 'header.php'; ?>

<!-- Custom CSS for Archive listing page -->
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
    
    /* Filter panel styling */
    .filter-panel {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        padding: 20px;
        margin-bottom: 25px;
        border-left: 4px solid #3498db;
    }
    
    .filter-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #2c3e50;
        display: flex;
        align-items: center;
    }
    
    .filter-title i {
        margin-right: 8px;
        color: #3498db;
    }
    
    .filter-btn {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
        margin-top: 26px;
    }
    
    .filter-btn:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }
    
    /* Data table panel */
    .data-panel {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        overflow: hidden;
        margin-bottom: 30px;
    }
    
    .panel-heading {
        background-color: #3498db;
        color: white;
        padding: 15px 20px;
        font-weight: 600;
        display: flex;
        align-items: center;
    }
    
    .panel-heading i {
        margin-right: 10px;
    }
    
    .panel-title {
        margin: 0;
        font-size: 18px;
    }
    
    .panel-body {
        padding: 20px;
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
        background-color: #f0f7ff;
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
    }
    
    /* Category badge */
    .category-badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 50px;
        background-color: #3498db;
        color: white;
        font-size: 12px;
        font-weight: 500;
    }
    
    /* Action buttons */
    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 12px;
        border-radius: 4px;
        color: #2c3e50;
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
        text-decoration: none;
        margin-right: 5px;
    }
    
    .action-btn:hover {
        background-color: #e9ecef;
        text-decoration: none;
    }
    
    .action-btn i {
        margin-right: 5px;
    }
    
    .download-btn {
        background-color: #2ecc71;
        color: white;
        border-color: #27ae60;
    }
    
    .download-btn:hover {
        background-color: #27ae60;
        color: white;
    }
    
    .preview-btn {
        background-color: #3498db;
        color: white;
        border-color: #2980b9;
    }
    
    .preview-btn:hover {
        background-color: #2980b9;
        color: white;
    }
    
    /* Timestamp styling */
    .timestamp {
        display: flex;
        align-items: center;
        font-size: 13px;
        color: #7f8c8d;
    }
    
    .timestamp i {
        margin-right: 5px;
        color: #3498db;
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
    <!-- Filter Panel -->
    <div class="filter-panel">
        <h4 class="filter-title"><i class="fa fa-filter"></i> Filter Arsip</h4>
        
        <form method="get" action="">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori" required="required">
                            <option value="">Pilih kategori</option>
                            <?php 
                            $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                            while($k = mysqli_fetch_array($kategori)){
                                ?>
                                <option <?php if(isset($_GET['kategori'])){if($_GET['kategori'] == $k['kategori_id']){echo "selected='selected'";}} ?> value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                                <?php 
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <button type="submit" class="btn filter-btn btn-block">
                        <i class="fa fa-search"></i> Tampilkan
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Data Table Panel -->
    <div class="data-panel">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-file-text"></i> Data Arsip</h3>
        </div>
        <div class="panel-body">
            <?php
            if(isset($_GET['kategori'])){
                $kategori = $_GET['kategori'];
                $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id and arsip_kategori=kategori_id and arsip_kategori='$kategori' ORDER BY arsip_id DESC");
            }else{
                $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id and arsip_kategori=kategori_id ORDER BY arsip_id DESC");
            }
            
            if(mysqli_num_rows($arsip) > 0) {
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
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>
                                    <div class="timestamp">
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo date('H:i:s  d-m-Y',strtotime($p['arsip_waktu_upload'])) ?>
                                    </div>
                                </td>
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
                                            <span class="label label-primary"><?php echo strtoupper($p['arsip_jenis']) ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="category-badge">
                                        <?php echo $p['kategori_nama'] ?>
                                    </span>
                                </td>
                                <td><?php echo $p['petugas_nama'] ?></td>
                                <td><?php echo $p['arsip_keterangan'] ?></td>
                                <td class="text-center">
                                    <a target="_blank" class="action-btn download-btn" href="arsip_download.php?id=<?php echo $p['arsip_id']; ?>">
                                        <i class="fa fa-download"></i> Download
                                    </a>
                                    <a target="_blank" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="action-btn preview-btn">
                                        <i class="fa fa-search"></i> Preview
                                    </a>
                                </td>
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php } else { ?>
                <div class="empty-state">
                    <i class="fa fa-folder-open-o"></i>
                    <h4>Tidak ada arsip yang ditemukan</h4>
                    <p>Silakan pilih kategori lain atau periksa kembali filter yang Anda gunakan.</p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>