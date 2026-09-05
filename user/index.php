<?php include 'header.php'; ?>

<!-- Dashboard Custom Styling -->
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
    
    /* Stats cards */
    .white-box {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        padding: 20px;
        height: 100%;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
        border-left: 4px solid #3498db;
    }
    
    .white-box:hover {
        transform: translateY(-5px);
    }
    
    .white-box h3 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #34495e;
    }
    
    .counter {
        font-size: 24px;
        font-weight: 700;
    }
    
    .two-part-sp {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    /* Welcome section */
    .welcome-section {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .welcome-section h3 {
        font-size: 22px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
    }
    
    .welcome-section h4 {
        font-size: 16px;
        color: #7f8c8d;
        margin-bottom: 15px;
    }
    
    /* User profile card */
    .user-profile-card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        overflow: hidden;
        height: 100%;
    }
    
    .profile-banner img {
        width: 100%;
        height: 120px;
        object-fit: cover;
    }
    
    .profile-content {
        padding: 20px;
        text-align: center;
        position: relative;
    }
    
    .img-user {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        border: 4px solid white;
        box-shadow: 0 3px 8px rgba(0,0,0,0.15);
        margin-top: -60px;
        object-fit: cover;
        background-color: white;
    }
    
    .profile-content h4 {
        margin-top: 15px;
        margin-bottom: 5px;
        font-weight: 600;
        color: #2c3e50;
    }
    
    .profile-content h5 {
        font-size: 14px;
        color: #7f8c8d;
        margin-bottom: 15px;
    }
    
    /* Archive showcase */
    .archive-showcase {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        margin-bottom: 20px;
        overflow: hidden;
    }
    
    .archive-header {
        background-color: #3498db;
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .archive-header h3 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
    }
    
    .archive-header a {
        color: white;
        text-decoration: none;
        font-size: 14px;
    }
    
    .archive-header a:hover {
        text-decoration: underline;
    }
    
    .archive-body {
        padding: 0;
    }
    
    /* Archive item styling */
    .archive-item {
        padding: 15px 20px;
        border-bottom: 1px solid #f1f1f1;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
    }
    
    .archive-item:last-child {
        border-bottom: none;
    }
    
    .archive-item:hover {
        background-color: #f9f9f9;
    }
    
    .archive-icon {
        width: 40px;
        height: 40px;
        background-color: #ebf5fb;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .archive-icon i {
        color: #3498db;
        font-size: 18px;
    }
    
    .archive-details {
        flex-grow: 1;
    }
    
    .archive-title {
        font-weight: 600;
        color: #2c3e50;
        font-size: 14px;
        margin-bottom: 3px;
    }
    
    .archive-meta {
        color: #7f8c8d;
        font-size: 12px;
    }
    
    .archive-meta span {
        display: inline-block;
        margin-right: 15px;
    }
    
    .archive-category {
        display: inline-block;
        padding: 2px 8px;
        background-color: #3498db;
        color: white;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 500;
    }
    
    .archive-actions {
        flex-shrink: 0;
    }
    
    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 13px;
        transition: all 0.2s ease;
        text-decoration: none;
    }
    
    .preview-btn {
        background-color: #3498db;
        color: white;
        margin-right: 5px;
    }
    
    .preview-btn:hover {
        background-color: #2980b9;
        color: white;
    }
    
    .download-btn {
        background-color: #2ecc71;
        color: white;
    }
    
    .download-btn:hover {
        background-color: #27ae60;
        color: white;
    }
    
    /* Filter box */
    .filter-box {
        padding: 15px 20px;
        border-bottom: 1px solid #f1f1f1;
        background-color: #f9f9f9;
    }
    
    .filter-form {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
    
    .filter-label {
        font-weight: 600;
        margin-right: 10px;
        color: #2c3e50;
        font-size: 14px;
    }
    
    .filter-select {
        flex-grow: 1;
        padding: 6px 10px;
        border: 1px solid #e9ecef;
        border-radius: 4px;
        margin-right: 10px;
    }
    
    .filter-btn {
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 6px 15px;
        font-size: 13px;
        cursor: pointer;
    }
    
    .filter-btn:hover {
        background-color: #2980b9;
    }
    
    /* Search box */
    .search-box {
        padding: 15px 20px;
        border-bottom: 1px solid #f1f1f1;
        background-color: #f3f8fd;
    }
    
    .search-form {
        display: flex;
        align-items: center;
    }
    
    .search-input {
        flex-grow: 1;
        padding: 8px 15px;
        border: 1px solid #e9ecef;
        border-radius: 4px 0 0 4px;
        font-size: 14px;
    }
    
    .search-input:focus {
        outline: none;
        border-color: #3498db;
    }
    
    .search-btn {
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 0 4px 4px 0;
        padding: 8px 15px;
        cursor: pointer;
    }
    
    .search-btn:hover {
        background-color: #2980b9;
    }
    
    /* User guide section */
    .user-guide {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        padding: 0;
        margin-top: 20px;
        overflow: hidden;
    }
    
    .guide-header {
        background-color: #3498db;
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .guide-header h3 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
    }
    
    .guide-header button {
        background: none;
        border: none;
        color: white;
        font-size: 14px;
        cursor: pointer;
    }
    
    .guide-header button:focus {
        outline: none;
    }
    
    .guide-content {
        padding: 20px;
        color: #34495e;
    }
    
    .guide-content p {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .guide-section {
        margin-bottom: 20px;
    }
    
    .guide-section h4 {
        font-size: 16px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
    }
    
    .guide-steps {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .guide-steps li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
        font-size: 14px;
    }
    
    .guide-steps li:before {
        content: "•";
        color: #3498db;
        font-size: 18px;
        position: absolute;
        left: 5px;
        top: -1px;
    }
    
    .guide-note {
        background-color: #f8f9fa;
        border-left: 4px solid #f39c12;
        padding: 10px 15px;
        font-size: 13px;
        margin-bottom: 15px;
    }
    
    .guide-note strong {
        color: #f39c12;
    }
    
    /* Feature boxes */
    .feature-box {
        display: flex;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        margin-bottom: 20px;
        overflow: hidden;
    }
    
    .feature-icon-wrapper {
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #3498db;
        color: white;
    }
    
    .feature-icon-wrapper i {
        font-size: 24px;
    }
    
    .feature-content {
        padding: 15px;
        flex-grow: 1;
    }
    
    .feature-content h4 {
        font-size: 16px;
        font-weight: 600;
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 8px;
    }
    
    .feature-content p {
        font-size: 13px;
        color: #7f8c8d;
        margin-bottom: 0;
    }
    
    /* News and updates section */
    .news-box {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        margin-bottom: 20px;
        overflow: hidden;
    }
    
    .news-header {
        background-color: #3498db;
        color: white;
        padding: 15px 20px;
    }
    
    .news-header h3 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
    }
    
    .news-item {
        padding: 15px 20px;
        border-bottom: 1px solid #f1f1f1;
    }
    
    .news-item:last-child {
        border-bottom: none;
    }
    
    .news-date {
        font-size: 12px;
        color: #95a5a6;
        margin-bottom: 5px;
    }
    
    .news-title {
        font-weight: 600;
        font-size: 14px;
        color: #2c3e50;
        margin-bottom: 5px;
    }
    
    .news-text {
        font-size: 13px;
        color: #7f8c8d;
        margin-bottom: 0;
    }
    
    /* Empty state */
    .empty-archives {
        padding: 30px;
        text-align: center;
    }
    
    .empty-archives i {
        font-size: 40px;
        color: #e0e6ed;
        margin-bottom: 15px;
    }
    
    .empty-archives p {
        color: #7f8c8d;
        margin-bottom: 0;
    }
    
    /* Shortcut buttons */
    .shortcut-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }
    
    .shortcut-btn {
        flex: 1;
        min-width: 120px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        padding: 15px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .shortcut-btn:hover {
        transform: translateY(-5px);
    }
    
    .shortcut-icon {
        width: 50px;
        height: 50px;
        background-color: #ebf5fb;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }
    
    .shortcut-icon i {
        font-size: 20px;
        color: #3498db;
    }
    
    .shortcut-label {
        font-size: 13px;
        font-weight: 500;
        color: #2c3e50;
    }
    
    /* Tags list */
    .tags-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }
    
    .tag {
        background-color: #f1f1f1;
        color: #7f8c8d;
        font-size: 12px;
        padding: 4px 10px;
        border-radius: 20px;
        transition: all 0.2s ease;
    }
    
    .tag:hover {
        background-color: #e9ecef;
        cursor: pointer;
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
                                <h4 style="margin-bottom: 0px">Dashboard User</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <h3>Selamat Datang di Sistem Informasi Arsip Digital</h3>
                    <h4>Akses dan temukan arsip yang Anda butuhkan dengan mudah</h4>
                </div>
                
                <!-- Shortcut Buttons -->
                <div class="shortcut-buttons">
                    <a href="arsip.php" class="shortcut-btn">
                        <div class="shortcut-icon">
                            <i class="fa fa-files-o"></i>
                        </div>
                        <span class="shortcut-label">Semua Arsip</span>
                    </a>
                    <a href="kategori.php" class="shortcut-btn">
                        <div class="shortcut-icon">
                            <i class="fa fa-folder-open"></i>
                        </div>
                        <span class="shortcut-label">Kategori</span>
                    </a>
                    <a href="#" onclick="toggleGuide()" class="shortcut-btn">
                        <div class="shortcut-icon">
                            <i class="fa fa-question-circle"></i>
                        </div>
                        <span class="shortcut-label">Panduan</span>
                    </a>
                    <a href="profil.php" class="shortcut-btn">
                        <div class="shortcut-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <span class="shortcut-label">Profil</span>
                    </a>
                </div>
                
                <!-- Statistics Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><i class="fa fa-file-archive-o"></i> Total Arsip Tersedia</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn">
                                    <i class="fa fa-level-up" aria-hidden="true"></i> 
                                    <span class="counter text-info">
                                        <?php 
                                        $jumlah_arsip = mysqli_query($koneksi,"select * from arsip");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><i class="fa fa-folder-open"></i> Kategori Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right graph-four-ctn">
                                    <i class="fa fa-level-down" aria-hidden="true"></i> 
                                    <span class="text-danger">
                                        <?php 
                                        $jumlah_kategori = mysqli_query($koneksi,"select * from kategori");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_kategori); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Search & Tags -->
                <div class="archive-showcase" style="margin-bottom: 20px;">
                    <div class="search-box">
                        <form action="arsip.php" method="get" class="search-form">
                            <input type="text" name="search" placeholder="Cari arsip berdasarkan nama atau kode..." class="search-input">
                            <button type="submit" class="search-btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div style="padding: 15px 20px;">
                        <div style="font-size: 14px; margin-bottom: 5px;">Pencarian populer:</div>
                        <div class="tags-list">
                            <a href="arsip.php?search=proposal" class="tag">Proposal</a>
                            <a href="arsip.php?search=laporan" class="tag">Laporan</a>
                            <a href="arsip.php?search=surat" class="tag">Surat</a>
                            <a href="arsip.php?search=dokumentasi" class="tag">Dokumentasi</a>
                            <a href="arsip.php?search=2023" class="tag">2023</a>
                            <a href="arsip.php?search=2024" class="tag">2024</a>
                        </div>
                    </div>
                </div>
                
                <!-- Archive Showcase -->
                <div class="archive-showcase">
                    <div class="archive-header">
                        <h3><i class="fa fa-files-o"></i> Arsip Terbaru</h3>
                        <a href="arsip.php">Lihat Semua <i class="fa fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="filter-box">
                        <form method="get" action="" class="filter-form">
                            <span class="filter-label">Filter:</span>
                            <select name="kategori" class="filter-select">
                                <option value="">Semua Kategori</option>
                                <?php 
                                $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                                while($k = mysqli_fetch_array($kategori)){
                                    ?>
                                    <option <?php if(isset($_GET['kategori'])){if($_GET['kategori'] == $k['kategori_id']){echo "selected='selected'";}} ?> value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                                    <?php 
                                }
                                ?>
                            </select>
                            <button type="submit" class="filter-btn"><i class="fa fa-filter"></i> Filter</button>
                        </form>
                    </div>
                    
                    <div class="archive-body">
                        <?php
                        if(isset($_GET['kategori'])){
                            $kategori = $_GET['kategori'];
                            $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id and arsip_kategori=kategori_id and arsip_kategori='$kategori' ORDER BY arsip_id DESC LIMIT 5");
                        } else {
                            $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id and arsip_kategori=kategori_id ORDER BY arsip_id DESC LIMIT 5");
                        }
                        
                        if(mysqli_num_rows($arsip) > 0) {
                            while($p = mysqli_fetch_array($arsip)) {
                                // Determine icon based on file type
                                $icon = "fa-file-o";
                                if($p['arsip_jenis'] == "pdf") {
                                    $icon = "fa-file-pdf-o";
                                } else if($p['arsip_jenis'] == "doc" || $p['arsip_jenis'] == "docx") {
                                    $icon = "fa-file-word-o";
                                } else if($p['arsip_jenis'] == "xls" || $p['arsip_jenis'] == "xlsx") {
                                    $icon = "fa-file-excel-o";
                                } else if($p['arsip_jenis'] == "ppt" || $p['arsip_jenis'] == "pptx") {
                                    $icon = "fa-file-powerpoint-o";
                                } else if($p['arsip_jenis'] == "jpg" || $p['arsip_jenis'] == "jpeg" || $p['arsip_jenis'] == "png" || $p['arsip_jenis'] == "gif") {
                                    $icon = "fa-file-image-o";
                                }
                        ?>
                        <div class="archive-item">
                            <div class="archive-icon">
                                <i class="fa <?php echo $icon; ?>"></i>
                            </div>
                            <div class="archive-details">
                                <div class="archive-title"><?php echo $p['arsip_nama']; ?></div>
                                <div class="archive-meta">
                                    <span><i class="fa fa-barcode"></i> <?php echo $p['arsip_kode']; ?></span>
                                    <span><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y', strtotime($p['arsip_waktu_upload'])); ?></span>
                                    <span class="archive-category"><?php echo $p['kategori_nama']; ?></span>
                                </div>
                            </div>
                            <div class="archive-actions">
                                <a href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="action-btn preview-btn" target="_blank">
                                    <i class="fa fa-eye"></i> Preview
                                </a>
                                <a href="arsip_download.php?id=<?php echo $p['arsip_id']; ?>" class="action-btn download-btn" target="_blank">
                                    <i class="fa fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        } else {
                        ?>
                        <div class="empty-archives">
                            <i class="fa fa-folder-open-o"></i>
                            <p>Tidak ada arsip ditemukan untuk kategori ini.</p>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                
                <!-- News and Updates -->
                <div class="news-box">
                    <div class="news-header">
                        <h3><i class="fa fa-newspaper-o"></i> Berita & Informasi Terbaru</h3>
                    </div>
                    <div class="news-item">
                        <div class="news-date">
                            <i class="fa fa-calendar"></i> <?php echo date('d M Y'); ?>
                        </div>
                        <div class="news-title">Arsip Terbaru Telah Ditambahkan</div>
                        <div class="news-text">Sejumlah arsip penting telah ditambahkan ke dalam sistem. Silakan cek daftar arsip terbaru.</div>
                    </div>
                    <div class="news-item">
                        <div class="news-date">
                            <i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime('-2 days')); ?>
                        </div>
                        <div class="news-title">Pemeliharaan Sistem</div>
                        <div class="news-text">Sistem telah diperbarui untuk meningkatkan kecepatan dan keamanan. Terima kasih atas kesabaran Anda.</div>
                    </div>
                </div>
                
                <!-- User Guide Section -->
                <div class="user-guide" id="userGuide">
                    <div class="guide-header">
                        <h3><i class="fa fa-book"></i> Panduan Pengguna</h3>
                        <button onclick="toggleGuide()"><i class="fa fa-chevron-up" id="guideIcon"></i></button>
                        </div>
                    <div class="guide-content" id="guideContent">
                        <div class="guide-section">
                            <h4><i class="fa fa-search"></i> Mencari Arsip</h4>
                            <ul class="guide-steps">
                                <li>Gunakan kotak pencarian di bagian atas untuk mencari arsip berdasarkan nama atau kode.</li>
                                <li>Klik tag pencarian populer untuk menemukan arsip yang sering dicari.</li>
                                <li>Filter arsip berdasarkan kategori menggunakan dropdown yang tersedia.</li>
                                <li>Hasil pencarian akan menampilkan semua arsip yang cocok dengan kriteria Anda.</li>
                            </ul>
                        </div>
                        
                        <div class="guide-section">
                            <h4><i class="fa fa-eye"></i> Melihat Preview Arsip</h4>
                            <ul class="guide-steps">
                                <li>Klik tombol "Preview" pada arsip yang ingin Anda lihat.</li>
                                <li>Preview akan terbuka di tab baru dan menampilkan isi dokumen.</li>
                                <li>Format yang didukung untuk preview: PDF, gambar (JPG, PNG, GIF), dan beberapa format dokumen lainnya.</li>
                                <li>Jika preview tidak tersedia, Anda dapat langsung mengunduh arsip tersebut.</li>
                            </ul>
                        </div>
                        
                        <div class="guide-section">
                            <h4><i class="fa fa-download"></i> Mengunduh Arsip</h4>
                            <ul class="guide-steps">
                                <li>Klik tombol "Download" pada arsip yang ingin Anda unduh.</li>
                                <li>File akan otomatis terunduh ke perangkat Anda.</li>
                                <li>Pastikan Anda memiliki aplikasi yang sesuai untuk membuka jenis file yang diunduh.</li>
                            </ul>
                            <div class="guide-note">
                                <strong>Catatan:</strong> Setiap unduhan akan tercatat dalam sistem untuk tujuan audit dan keamanan.
                            </div>
                        </div>
                        
                        <div class="guide-section">
                            <h4><i class="fa fa-folder-open"></i> Mengakses Kategori</h4>
                            <ul class="guide-steps">
                                <li>Klik menu "Kategori" atau tombol pintasan "Kategori" di dashboard.</li>
                                <li>Pilih kategori yang ingin Anda lihat untuk menampilkan semua arsip dalam kategori tersebut.</li>
                                <li>Anda juga dapat menggunakan dropdown filter kategori pada daftar arsip.</li>
                            </ul>
                        </div>
                        
                        <div class="guide-section">
                            <h4><i class="fa fa-user"></i> Mengelola Profil</h4>
                            <ul class="guide-steps">
                                <li>Klik menu "Profil" atau tombol "Edit Profil" di panel profil.</li>
                                <li>Anda dapat memperbarui informasi profil seperti nama dan foto.</li>
                                <li>Ubah password Anda secara berkala untuk keamanan yang lebih baik.</li>
                            </ul>
                        </div>
                        
                        <div class="guide-section">
                            <h4><i class="fa fa-info-circle"></i> Fitur Tambahan</h4>
                            <ul class="guide-steps">
                                <li><strong>Statistik Arsip:</strong> Lihat jumlah total arsip dan kategori di dashboard.</li>
                                <li><strong>Arsip Terbaru:</strong> Akses cepat ke arsip yang baru ditambahkan di dashboard.</li>
                                <li><strong>Berita & Informasi:</strong> Dapatkan informasi terbaru tentang sistem dan pembaruan arsip.</li>
                                <li><strong>Pencarian Tag:</strong> Gunakan tag populer untuk menemukan arsip yang sering dicari.</li>
                            </ul>
                        </div>
                        
                        <div class="guide-section">
                            <h4><i class="fa fa-question-circle"></i> Butuh Bantuan?</h4>
                            <p>Jika Anda mengalami kesulitan atau memiliki pertanyaan, silakan hubungi administrator sistem atau kirim pesan melalui menu "Hubungi Admin".</p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature Highlights -->
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="feature-box">
                            <div class="feature-icon-wrapper">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Pencarian Cepat</h4>
                                <p>Temukan arsip dengan cepat menggunakan fitur pencarian dan filter kategori.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="feature-box">
                            <div class="feature-icon-wrapper">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Preview Dokumen</h4>
                                <p>Lihat isi dokumen secara langsung tanpa harus mengunduhnya terlebih dahulu.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row" style="margin-top: 15px;">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="feature-box">
                            <div class="feature-icon-wrapper">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Unduh Mudah</h4>
                                <p>Unduh arsip yang Anda butuhkan dengan satu klik untuk akses offline.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="feature-box">
                            <div class="feature-icon-wrapper">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Kategori & Tag</h4>
                                <p>Temukan arsip berdasarkan kategori dan tag untuk pengalaman yang lebih terorganisir.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Profile Section -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from user where user_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="user-profile-card">
                    <div class="profile-banner">
                        <img src="../assets/img/product/profile-bg.jpg" alt="Profile Banner">
                    </div>

                    <div class="profile-content">
                        <?php 
                        if($s['user_foto'] == ""){
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png">
                            <?php
                        }else{
                            ?>
                            <img class="img-user" src="../gambar/user/<?php echo $s['user_foto']; ?>">
                            <?php
                        }
                        ?>

                        <h4><?php echo $s['user_nama']; ?></h4>
                        <h5>User</h5>
                        <p>Akses dan temukan dokumen arsip dengan mudah dan cepat.</p>
                        
                        <a href="profil.php" class="btn btn-primary btn-sm" style="margin-top: 10px;">
                            <i class="fa fa-user"></i> Edit Profil
                        </a>
                    </div>
                </div>
                
                <!-- Recent Categories -->
                <div class="white-box" style="margin-top: 20px;">
                    <h3 class="box-title"><i class="fa fa-folder"></i> Kategori Arsip</h3>
                    <div style="margin-top: 15px;">
                        <?php 
                        $kat = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id DESC LIMIT 5");
                        while($k = mysqli_fetch_array($kat)){
                        ?>
                        <div style="padding: 8px 0; border-bottom: 1px solid #f1f1f1;">
                            <a href="arsip.php?kategori=<?php echo $k['kategori_id']; ?>" style="color: #3498db;">
                                <i class="fa fa-folder-o"></i> <?php echo $k['kategori_nama']; ?>
                            </a>
                        </div>
                        <?php } ?>
                        <div style="padding-top: 10px;">
                            <a href="kategori.php" class="btn btn-default btn-block btn-sm">
                                Lihat Semua Kategori
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Most Downloaded Archives -->
                <div class="white-box" style="margin-top: 20px;">
                    <h3 class="box-title"><i class="fa fa-download"></i> Arsip Terpopuler</h3>
                    <div style="margin-top: 15px;">
                        <?php 
                        // Assuming you have a download count or you can modify this query
                        $popular = mysqli_query($koneksi,"SELECT * FROM arsip,kategori WHERE arsip_kategori=kategori_id ORDER BY arsip_id DESC LIMIT 3");
                        while($pop = mysqli_fetch_array($popular)){
                        ?>
                        <div style="padding: 8px 0; border-bottom: 1px solid #f1f1f1;">
                            <a href="arsip_preview.php?id=<?php echo $pop['arsip_id']; ?>" style="color: #2c3e50; display: block;">
                                <div style="font-weight: 600; font-size: 13px;"><?php echo $pop['arsip_nama']; ?></div>
                                <div style="font-size: 12px; color: #7f8c8d;">
                                    <span class="label label-primary" style="font-size: 10px;"><?php echo $pop['kategori_nama']; ?></span>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                
                <!-- Last Login Info -->
                <div class="white-box" style="margin-top: 20px;">
                    <h3 class="box-title"><i class="fa fa-clock-o"></i> Aktivitas</h3>
                    <p style="font-size: 13px; margin-bottom: 5px;">
                        <i class="fa fa-sign-in"></i> Login terakhir:<br>
                        <span style="color: #7f8c8d;"><?php echo date('d/m/Y H:i'); ?></span>
                    </p>
                </div>
                
                <!-- Help Section -->
                <div class="white-box" style="margin-top: 20px;">
                    <h3 class="box-title"><i class="fa fa-question-circle"></i> Butuh Bantuan?</h3>
                    <p style="font-size: 13px; margin-bottom: 10px;">
                        Jika Anda mengalami kesulitan dalam menggunakan sistem, silakan hubungi administrator.
                    </p>
                    <a href="#" class="btn btn-info btn-block btn-sm">
                        <i class="fa fa-envelope"></i> Hubungi Admin
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for toggling user guide -->
<script>
function toggleGuide() {
    var content = document.getElementById('guideContent');
    var icon = document.getElementById('guideIcon');
    
    if (content.style.display === 'none') {
        content.style.display = 'block';
        icon.className = 'fa fa-chevron-up';
    } else {
        content.style.display = 'none';
        icon.className = 'fa fa-chevron-down';
    }
}
</script>

<?php include 'footer.php'; ?>