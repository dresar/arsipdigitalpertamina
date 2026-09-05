<?php include 'header.php'; ?>

<!-- Custom CSS for Dashboard -->
<style>
    /* Main Dashboard Styling */
    .dashboard-area {
        padding: 20px 0;
    }
    
    .stat-card {
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin-bottom: 25px;
        overflow: hidden;
        height: 100%;
        background: #fff;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    .stat-card-inner {
        padding: 25px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .stat-card-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        font-size: 24px;
        color: white;
    }
    
    .bg-primary-gradient {
        background: linear-gradient(to right, #4e73df, #224abe);
    }
    
    .bg-success-gradient {
        background: linear-gradient(to right, #1cc88a, #13855c);
    }
    
    .bg-info-gradient {
        background: linear-gradient(to right, #36b9cc, #258391);
    }
    
    .bg-warning-gradient {
        background: linear-gradient(to right, #f6c23e, #dda20a);
    }
    
    .stat-card-title {
        font-size: 14px;
        color: #888;
        margin-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }
    
    .stat-card-value {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #333;
    }
    
    .stat-card-desc {
        font-size: 13px;
        color: #888;
        margin-top: auto;
    }
    
    .stat-card-progress {
        height: 8px;
        margin-top: 15px;
        border-radius: 4px;
        overflow: hidden;
    }
    
    /* Chart & Graph Containers */
    .chart-container {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 25px;
    }
    
    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    
    .chart-title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }
    
    .chart-controls {
        display: flex;
        gap: 10px;
    }
    
    .chart-control-btn {
        border: none;
        background: #f8f9fc;
        border-radius: 4px;
        padding: 5px 10px;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .chart-control-btn:hover {
        background: #eaecf4;
    }
    
    .chart-control-btn.active {
        background: #4e73df;
        color: white;
    }
    
    /* Recent Activities */
    .activity-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .activity-item {
        display: flex;
        padding: 15px 0;
        border-bottom: 1px solid #f1f1f1;
    }
    
    .activity-item:last-child {
        border-bottom: none;
    }
    
    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 16px;
        color: white;
        flex-shrink: 0;
    }
    
    .activity-content {
        flex-grow: 1;
    }
    
    .activity-title {
        font-weight: 600;
        margin-bottom: 5px;
        color: #333;
    }
    
    .activity-time {
        font-size: 12px;
        color: #888;
    }
    
    /* Quick Stats */
    .quick-stats {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 25px;
    }
    
    .quick-stat-item {
        flex: 1;
        min-width: 150px;
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
    }
    
    .quick-stat-icon {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 20px;
        color: white;
    }
    
    .quick-stat-info h4 {
        margin: 0;
        font-size: 20px;
        font-weight: 700;
    }
    
    .quick-stat-info p {
        margin: 0;
        font-size: 12px;
        color: #888;
    }
    
    /* Admin Profile Card */
    .admin-profile-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        background: #fff;
        height: 100%;
    }
    
    .admin-profile-header {
        height: 120px;
        background: linear-gradient(135deg, #4e73df, #224abe);
        position: relative;
    }
    
    .admin-profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid white;
        position: absolute;
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        background: #fff;
    }
    
    .admin-profile-content {
        padding: 60px 20px 20px;
        text-align: center;
    }
    
    .admin-profile-name {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    .admin-profile-role {
        font-size: 14px;
        color: #888;
        margin-bottom: 15px;
    }
    
    .admin-profile-stats {
        display: flex;
        justify-content: space-around;
        margin: 20px 0;
    }
    
    .admin-profile-stat-item {
        text-align: center;
    }
    
    .admin-profile-stat-value {
        font-size: 18px;
        font-weight: 600;
        color: #4e73df;
    }
    
    .admin-profile-stat-label {
        font-size: 12px;
        color: #888;
    }
    
    .admin-profile-desc {
        font-size: 14px;
        color: #666;
        padding: 0 10px;
    }
    
    .admin-profile-actions {
        margin-top: 20px;
    }
    
    .admin-profile-btn {
        padding: 8px 20px;
        border-radius: 5px;
        border: none;
        background: #4e73df;
        color: white;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .admin-profile-btn:hover {
        background: #224abe;
    }
    
    /* Latest Upload Section */
    .latest-uploads {
        margin-top: 25px;
    }
    
    .upload-item {
        display: flex;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #f1f1f1;
    }
    
    .upload-item:last-child {
        border-bottom: none;
    }
    
    .upload-icon {
        width: 40px;
        height: 40px;
        background: #f1f5ff;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: #4e73df;
        font-size: 18px;
    }
    
    .upload-content {
        flex-grow: 1;
    }
    
    .upload-title {
        font-weight: 600;
        margin-bottom: 3px;
        color: #333;
        font-size: 14px;
    }
    
    .upload-info {
        display: flex;
        font-size: 12px;
        color: #888;
    }
    
    .upload-size {
        margin-right: 15px;
    }
    
    .upload-actions {
        display: flex;
        gap: 10px;
    }
    
    .upload-action-btn {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fc;
        color: #666;
        transition: all 0.3s;
    }
    
    .upload-action-btn:hover {
        background: #eaecf4;
        color: #4e73df;
    }

    /* System Info Card */
    .system-info-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 25px;
    }
    
    .system-info-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
    }
    
    .system-info-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid #f1f1f1;
    }
    
    .system-info-item:last-child {
        border-bottom: none;
    }
    
    .system-info-label {
        font-size: 14px;
        color: #666;
    }
    
    .system-info-value {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }
    
    /* Responsive Fixes */
    @media (max-width: 768px) {
        .stat-card {
            margin-bottom: 15px;
        }
        
        .quick-stat-item {
            min-width: calc(50% - 15px);
        }
    }
    
    @media (max-width: 576px) {
        .quick-stat-item {
            min-width: 100%;
        }
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
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
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

<div class="dashboard-area">
    <div class="container-fluid">
        <!-- Stats Cards -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="stat-card">
                    <div class="stat-card-inner">
                        <div class="stat-card-icon bg-primary-gradient">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-card-title">PETUGAS</div>
                        <?php 
                        $jumlah_petugas = mysqli_query($koneksi,"select * from petugas");
                        $count_petugas = mysqli_num_rows($jumlah_petugas);
                        ?>
                        <div class="stat-card-value"><?php echo $count_petugas; ?></div>
                        <div class="stat-card-desc">Total petugas pengelola arsip</div>
                        <div class="progress stat-card-progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="stat-card">
                    <div class="stat-card-inner">
                        <div class="stat-card-icon bg-success-gradient">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="stat-card-title">USER</div>
                        <?php 
                        $jumlah_user = mysqli_query($koneksi,"select * from user");
                        $count_user = mysqli_num_rows($jumlah_user);
                        ?>
                        <div class="stat-card-value"><?php echo $count_user; ?></div>
                        <div class="stat-card-desc">Total pengguna sistem arsip</div>
                        <div class="progress stat-card-progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="stat-card">
                    <div class="stat-card-inner">
                        <div class="stat-card-icon bg-info-gradient">
                            <i class="fa fa-file-archive-o"></i>
                        </div>
                        <div class="stat-card-title">ARSIP</div>
                        <?php 
                        $jumlah_arsip = mysqli_query($koneksi,"select * from arsip");
                        $count_arsip = mysqli_num_rows($jumlah_arsip);
                        ?>
                        <div class="stat-card-value"><?php echo $count_arsip; ?></div>
                        <div class="stat-card-desc">Total dokumen tersimpan</div>
                        <div class="progress stat-card-progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="stat-card">
                    <div class="stat-card-inner">
                        <div class="stat-card-icon bg-warning-gradient">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="stat-card-title">UNDUHAN</div>
                        <?php 
                        $jumlah_unduhan = mysqli_query($koneksi,"select * from riwayat");
                        $count_unduhan = mysqli_num_rows($jumlah_unduhan);
                        ?>
                        <div class="stat-card-value"><?php echo $count_unduhan; ?></div>
                        <div class="stat-card-desc">Total unduhan dokumen</div>
                        <div class="progress stat-card-progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Stats -->
        <div class="quick-stats">
            <div class="quick-stat-item">
                <div class="quick-stat-icon bg-primary-gradient">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="quick-stat-info">
                    <h4><?php echo date('d'); ?></h4>
                    <p><?php echo date('F Y'); ?></p>
                </div>
            </div>
            
            <div class="quick-stat-item">
                <div class="quick-stat-icon bg-success-gradient">
                    <i class="fa fa-folder-open"></i>
                </div>
                <?php 
                $kategori = mysqli_query($koneksi,"select * from kategori");
                $count_kategori = mysqli_num_rows($kategori);
                ?>
                <div class="quick-stat-info">
                    <h4><?php echo $count_kategori; ?></h4>
                    <p>Kategori</p>
                </div>
            </div>
            
            <div class="quick-stat-item">
                <div class="quick-stat-icon bg-info-gradient">
                    <i class="fa fa-clock-o"></i>
                </div>
                <?php 
                $today = date('Y-m-d');
                $today_uploads = mysqli_query($koneksi,"SELECT * FROM arsip WHERE DATE(arsip_waktu_upload) = '$today'");
                $count_today = mysqli_num_rows($today_uploads);
                ?>
                <div class="quick-stat-info">
                    <h4><?php echo $count_today; ?></h4>
                    <p>Upload Hari Ini</p>
                </div>
            </div>
            
            <div class="quick-stat-item">
                <div class="quick-stat-icon bg-warning-gradient">
                    <i class="fa fa-eye"></i>
                </div>
                <?php 
                $today_downloads = mysqli_query($koneksi,"SELECT * FROM riwayat WHERE DATE(riwayat_waktu) = '$today'");
                $count_today_downloads = mysqli_num_rows($today_downloads);
                ?>
                <div class="quick-stat-info">
                    <h4><?php echo $count_today_downloads; ?></h4>
                    <p>Unduh Hari Ini</p>
                </div>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <!-- Charts Area -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h5 class="chart-title"><i class="fa fa-area-chart"></i> Grafik Pengunduhan Arsip</h5>
                        <div class="chart-controls">
                            <button class="chart-control-btn active" data-period="week">Minggu Ini</button>
                            <button class="chart-control-btn" data-period="month">Bulan Ini</button>
                            <button class="chart-control-btn" data-period="year">Tahun Ini</button>
                        </div>
                    </div>
                    
                    <div id="main-chart" style="height: 350px;"></div>
                </div>
                
                <!-- Recent Activities -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h5 class="chart-title"><i class="fa fa-list"></i> Aktivitas Terbaru</h5>
                        <div class="chart-controls">
                            <button class="chart-control-btn active" data-activity="all">Semua</button>
                            <button class="chart-control-btn" data-activity="uploads">Upload</button>
                            <button class="chart-control-btn" data-activity="downloads">Unduh</button>
                        </div>
                    </div>
                    
                    <ul class="activity-list">
                        <?php 
                        // Get latest activities (combines uploads and downloads)
                        $activities_query = "
                        (SELECT 'upload' as activity_type, arsip_waktu_upload as activity_time, arsip_nama as activity_name, petugas_nama as user_name 
                         FROM arsip 
                         JOIN petugas ON arsip_petugas = petugas_id
                         ORDER BY arsip_waktu_upload DESC
                         LIMIT 5)
                        UNION
                        (SELECT 'download' as activity_type, riwayat_waktu as activity_time, arsip_nama as activity_name, user_nama as user_name 
                         FROM riwayat
                         JOIN arsip ON riwayat_arsip = arsip_id
                         JOIN user ON riwayat_user = user_id
                         ORDER BY riwayat_waktu DESC
                         LIMIT 5)
                        ORDER BY activity_time DESC
                        LIMIT 5";
                        
                        $activities = mysqli_query($koneksi, $activities_query);
                        
                        while($activity = mysqli_fetch_array($activities)){
                            $type = $activity['activity_type'];
                            $icon_class = ($type == 'upload') ? 'fa-upload bg-success-gradient' : 'fa-download bg-info-gradient';
                            $activity_text = ($type == 'upload') ? 'mengunggah dokumen' : 'mengunduh dokumen';
                        ?>
                        <li class="activity-item">
                            <div class="activity-icon <?php echo $icon_class; ?>">
                                <i class="fa <?php echo ($type == 'upload') ? 'fa-upload' : 'fa-download'; ?>"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">
                                    <strong><?php echo $activity['user_name']; ?></strong> <?php echo $activity_text; ?> <strong><?php echo $activity['activity_name']; ?></strong>
                                </div>
                                <div class="activity-time">
                                    <i class="fa fa-clock-o"></i> <?php echo date('H:i, d M Y', strtotime($activity['activity_time'])); ?>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                
                <!-- Latest Uploads with File Type Icons -->
                <div class="chart-container latest-uploads">
                    <div class="chart-header">
                        <h5 class="chart-title"><i class="fa fa-file-o"></i> Upload Dokumen Terbaru</h5>
                        <a href="arsip.php" class="btn btn-sm btn-primary">Lihat Semua</a>
                    </div>
                    
                    <?php 
                    $latest_uploads = mysqli_query($koneksi, "SELECT * FROM arsip, kategori, petugas 
                                                             WHERE arsip_petugas=petugas_id AND arsip_kategori=kategori_id 
                                                             ORDER BY arsip_waktu_upload DESC LIMIT 5");
                    
                    while($upload = mysqli_fetch_array($latest_uploads)){
                        // Determine icon based on file type
                        $file_type = $upload['arsip_jenis'];
                        $icon_class = 'fa-file-o';
                        
                        if(in_array($file_type, ['pdf'])) {
                            $icon_class = 'fa-file-pdf-o';
                        } elseif(in_array($file_type, ['doc', 'docx'])) {
                            $icon_class = 'fa-file-word-o';
                        } elseif(in_array($file_type, ['xls', 'xlsx'])) {
                            $icon_class = 'fa-file-excel-o';
                        } elseif(in_array($file_type, ['ppt', 'pptx'])) {
                            $icon_class = 'fa-file-powerpoint-o';
                        } elseif(in_array($file_type, ['jpg', 'jpeg', 'png', 'gif'])) {
                            $icon_class = 'fa-file-image-o';
                        } elseif(in_array($file_type, ['zip', 'rar'])) {
                            $icon_class = 'fa-file-archive-o';
                        }
                    ?>
                    <div class="upload-item">
                        <div class="upload-icon">
                            <i class="fa <?php echo $icon_class; ?>"></i>
                        </div>
                        <div class="upload-content">
                            <div class="upload-title"><?php echo $upload['arsip_nama']; ?></div>
                            <div class="upload-info">
                                <span class="upload-category">
                                    <i class="fa fa-folder-o"></i> <?php echo $upload['kategori_nama']; ?>
                                </span>
                                <span class="upload-uploader">
                                    <i class="fa fa-user"></i> <?php echo $upload['petugas_nama']; ?>
                                </span>
                                <span class="upload-time">
                                    <i class="fa fa-clock-o"></i> <?php echo date('H:i, d M Y', strtotime($upload['arsip_waktu_upload'])); ?>
                                </span>
                            </div>
                        </div>
                        <div class="upload-actions">
                            <a href="arsip_preview.php?id=<?php echo $upload['arsip_id']; ?>" class="upload-action-btn" title="Preview">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="../arsip/<?php echo $upload['arsip_file']; ?>" target="_blank" class="upload-action-btn" title="Download">
                                <i class="fa fa-download"></i>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <!-- Admin Profile Card -->
                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from admin where admin_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="admin-profile-card">
                    <div class="admin-profile-header">
                        <div class="admin-profile-img">
                            <?php 
                            if($s['admin_foto'] == ""){
                                ?>
                                <img src="../gambar/sistem/user.png" style="width: 100%; height: 100%; object-fit: cover;">
                                <?php
                            } else {
                                ?>
                                <img src="../gambar/admin/<?php echo $s['admin_foto']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="admin-profile-content">
                        <div class="admin-profile-name"><?php echo $s['admin_nama']; ?></div>
                        <div class="admin-profile-role">Administrator</div>
                        
                        <div class="admin-profile-stats">
                            <div class="admin-profile-stat-item">
                                <div class="admin-profile-stat-value"><?php echo $count_arsip; ?></div>
                                <div class="admin-profile-stat-label">Arsip</div>
                            </div>
                            <div class="admin-profile-stat-item">
                                <div class="admin-profile-stat-value"><?php echo $count_user; ?></div>
                                <div class="admin-profile-stat-label">User</div>
                            </div>
                            <div class="admin-profile-stat-item">
                                <div class="admin-profile-stat-value"><?php echo $count_petugas; ?></div>
                                <div class="admin-profile-stat-label">Petugas</div>
                            </div>
                        </div>
                        
                        <div class="admin-profile-desc">
                            Pengelolaan arsip jadi lebih mudah dengan sistem informasi arsip digital. Salam produktif!</div>
                        
                        <div class="admin-profile-actions">
                            <a href="profil.php" class="admin-profile-btn">
                                <i class="fa fa-user-circle-o"></i> Edit Profil
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- System Information -->
                <div class="system-info-card">
                    <h5 class="system-info-title"><i class="fa fa-server"></i> Informasi Sistem</h5>
                    
                    <div class="system-info-item">
                        <div class="system-info-label">PHP Version</div>
                        <div class="system-info-value"><?php echo phpversion(); ?></div>
                    </div>
                    
                    <div class="system-info-item">
                        <div class="system-info-label">Server</div>
                        <div class="system-info-value"><?php echo $_SERVER['SERVER_SOFTWARE']; ?></div>
                    </div>
                    
                    <div class="system-info-item">
                        <div class="system-info-label">Database</div>
                        <div class="system-info-value">MySQL</div>
                    </div>
                    
                    <div class="system-info-item">
                        <div class="system-info-label">Waktu Server</div>
                        <div class="system-info-value" id="server-time">
                            <?php 
                            // Set timezone Jakarta
                            date_default_timezone_set('Asia/Jakarta');
                            echo date('H:i:s - d M Y'); 
                            ?>
                            <small> WIB</small>
                        </div>
                    </div>
                    
                    <script>
                    // Fungsi untuk memperbarui waktu server secara real-time
                    function updateServerTime() {
                        var now = new Date();
                        
                        // Set timezone Jakarta (GMT+7)
                        now.setTime(now.getTime() + (7*60*60*1000 - now.getTimezoneOffset()*60*1000));
                        
                        var hours = now.getUTCHours();
                        var minutes = now.getUTCMinutes();
                        var seconds = now.getUTCSeconds();
                        var day = now.getUTCDate();
                        
                        // Array nama bulan dalam bahasa Indonesia
                        var monthNames = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
                        var month = monthNames[now.getUTCMonth()];
                        var year = now.getUTCFullYear();
                        
                        // Format waktu dengan leading zeros
                        hours = hours < 10 ? "0" + hours : hours;
                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;
                        
                        // Format tanggal lengkap
                        var timeString = hours + ":" + minutes + ":" + seconds + " - " + day + " " + month + " " + year;
                        
                        // Perbarui elemen HTML
                        document.getElementById("server-time").innerHTML = timeString + " <small>WIB</small>";
                        
                        // Jalankan fungsi setiap 1 detik
                        setTimeout(updateServerTime, 1000);
                    }
                    
                    // Mulai pembaruan waktu ketika halaman selesai dimuat
                    window.onload = function() {
                        updateServerTime();
                    };
                    </script>
                    
                    <div class="system-info-item">
                        <div class="system-info-label">Status Sistem</div>
                        <div class="system-info-value"><span class="label label-success">Aktif</span></div>
                    </div>
                </div>
                
                <!-- Category Distribution -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h5 class="chart-title"><i class="fa fa-pie-chart"></i> Distribusi Kategori</h5>
                    </div>
                    
                    <div id="category-chart" style="height: 250px;"></div>
                    
                    <?php
                    $category_query = mysqli_query($koneksi, "SELECT kategori_nama, COUNT(arsip_id) as total 
                                                           FROM kategori 
                                                           LEFT JOIN arsip ON kategori_id = arsip_kategori 
                                                           GROUP BY kategori_id
                                                           ORDER BY total DESC
                                                           LIMIT 5");
                    ?>
                    
                    <ul class="list-group mt-3">
                        <?php while($cat = mysqli_fetch_array($category_query)) { ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $cat['kategori_nama']; ?>
                            <span class="badge badge-primary badge-pill"><?php echo $cat['total']; ?></span>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                
                <!-- Recent Downloads -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h5 class="chart-title"><i class="fa fa-download"></i> Unduhan Terbaru</h5>
                        <a href="riwayat.php" class="btn btn-sm btn-primary">Lihat Semua</a>
                    </div>
                    
                    <ul class="activity-list">
                        <?php 
                        $recent_downloads = mysqli_query($koneksi, "SELECT * FROM riwayat, arsip, user 
                                                                 WHERE riwayat_arsip=arsip_id AND riwayat_user=user_id 
                                                                 ORDER BY riwayat_waktu DESC LIMIT 4");
                        
                        while($download = mysqli_fetch_array($recent_downloads)){
                        ?>
                        <li class="activity-item">
                            <div class="activity-icon bg-info-gradient">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">
                                    <strong><?php echo $download['user_nama']; ?></strong> mengunduh <strong><?php echo $download['arsip_nama']; ?></strong>
                                </div>
                                <div class="activity-time">
                                    <i class="fa fa-clock-o"></i> <?php echo date('H:i, d M Y', strtotime($download['riwayat_waktu'])); ?>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Loading Morris Charts Dependencies -->
<script src="../assets/js/morrisjs/morris.min.js"></script>
<script src="../assets/js/morrisjs/raphael-min.js"></script>

<!-- JavaScript for Charts -->
<script type="text/javascript">
$(document).ready(function(){
    // Data for download graph - daily data for a month
    var dailyData = [
        <?php
        // Get data for the last 30 days
        for($i = 29; $i >= 0; $i--) {
            $date = date('Y-m-d', strtotime("-$i days"));
            $formatted_date = date('d-m-Y', strtotime("-$i days"));
            
            // Count downloads for each day
            $downloads_query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM riwayat WHERE DATE(riwayat_waktu) = '$date'");
            $downloads = mysqli_fetch_assoc($downloads_query);
            $total_downloads = $downloads['total'];
            
            echo "{ date: '".$formatted_date."', value: ".$total_downloads." },";
        }
        ?>
    ];
    
    // Graph for downloads over time
    if($('#extra-area-chart').length) {
        Morris.Area({
            element: 'extra-area-chart',
            data: dailyData,
            xkey: 'date',
            ykeys: ['value'],
            labels: ['Jumlah Unduhan'],
            pointSize: 2,
            fillOpacity: 0.6,
            pointStrokeColors: ['#006DF0'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineColors: ['#006DF0'],
            hideHover: 'auto',
            lineWidth: 1,
            resize: true
        });
    }
    
    // Data for category distribution
    var categoryData = [
        <?php
        // Get category distribution data
        $category_distribution = mysqli_query($koneksi, "SELECT kategori_nama, COUNT(arsip_id) as total 
                                                    FROM kategori 
                                                    LEFT JOIN arsip ON kategori_id = arsip_kategori 
                                                    GROUP BY kategori_id
                                                    HAVING total > 0
                                                    ORDER BY total DESC
                                                    LIMIT 5");
        
        while($cat = mysqli_fetch_array($category_distribution)) {
            echo "{label: '".$cat['kategori_nama']."', value: ".$cat['total']."},";
        }
        ?>
    ];
    
    // Category distribution donut chart
    if($('#category-chart').length) {
        Morris.Donut({
            element: 'category-chart',
            data: categoryData,
            colors: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
            resize: true,
            formatter: function (value) { return value + ' Arsip'; }
        });
    }
    
    // Setup for bar chart showing monthly data
    var monthlyData = [
        <?php
        // Get data for the last 6 months
        for($i = 5; $i >= 0; $i--) {
            $month = date('m', strtotime("-$i months"));
            $year = date('Y', strtotime("-$i months"));
            $month_name = date('M Y', strtotime("-$i months"));
            
            // Count uploads for each month
            $uploads_query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM arsip 
                                                  WHERE MONTH(arsip_waktu_upload) = '$month' 
                                                  AND YEAR(arsip_waktu_upload) = '$year'");
            $uploads = mysqli_fetch_assoc($uploads_query);
            $total_uploads = $uploads['total'];
            
            // Count downloads for each month
            $downloads_query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM riwayat 
                                                   WHERE MONTH(riwayat_waktu) = '$month' 
                                                   AND YEAR(riwayat_waktu) = '$year'");
            $downloads = mysqli_fetch_assoc($downloads_query);
            $total_downloads = $downloads['total'];
            
            echo "{ month: '".$month_name."', uploads: ".$total_uploads.", downloads: ".$total_downloads." },";
        }
        ?>
    ];
    
    // Monthly comparison bar chart
    if($('#morris-area-chart').length) {
        Morris.Bar({
            element: 'morris-area-chart',
            data: monthlyData,
            xkey: 'month',
            ykeys: ['uploads', 'downloads'],
            labels: ['Upload', 'Unduhan'],
            barColors: ['#1cc88a', '#36b9cc'],
            hideHover: 'auto',
            resize: true
        });
    }
    
    // Chart toggle buttons
    $('[data-toggle="graph"]').on('click', function(){
        // Update active button state
        $('[data-toggle="graph"]').removeClass('btn-primary').addClass('btn-default').removeClass('active');
        $(this).removeClass('btn-default').addClass('btn-primary').addClass('active');
        
        var target = $(this).data('target');
        
        if (target == 'daily') {
            $('#extra-area-chart').fadeIn();
            $('#morris-area-chart').hide();
            $('#monthly-legend').hide();
            $('.cus-product-sl-rp li:first-child h5').html('<i class="fa fa-circle" style="color: #006DF0;"></i>Jumlah Unduhan Harian');
        } else if (target == 'monthly') {
            $('#extra-area-chart').hide();
            $('#morris-area-chart').fadeIn();
            $('#monthly-legend').show();
            $('.cus-product-sl-rp li:first-child h5').html('<i class="fa fa-circle" style="color: #36b9cc;"></i>Jumlah Unduhan Bulanan');
        }
    });
    
    // Activity filter buttons
    $('.chart-control-btn[data-activity]').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var activity = $(this).data('activity');
        
        if(activity === 'all') {
            $('.activity-item').show();
        } else if(activity === 'uploads') {
            $('.activity-item').hide();
            $('.activity-item .fa-upload').closest('.activity-item').show();
        } else if(activity === 'downloads') {
            $('.activity-item').hide();
            $('.activity-item .fa-download').closest('.activity-item').show();
        }
    });
});
</script>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<!-- Custom CSS for Dashboard masih sama seperti sebelumnya -->
<style>
    /* Main Dashboard Styling */
    .dashboard-area {
        padding: 20px 0;
    }
    
    /* Style yang sudah ada tetap dipertahankan */
    /* ... */
</style>

<div class="breadcome-area">
    <!-- Area breadcrumb tetap sama seperti sebelumnya -->
</div>

<div class="dashboard-area">
    <div class="container-fluid">
        <!-- Stats Cards tetap sama seperti sebelumnya -->
        
        <!-- Quick Stats tetap sama seperti sebelumnya -->
        
        <!-- Main Content Area -->
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <!-- Charts Area - PERBAIKAN ID dan STRUKTUR -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h5 class="chart-title"><i class="fa fa-area-chart"></i> Grafik Pengunduhan Arsip</h5>
                        <div class="chart-controls">
                            <button class="chart-control-btn active" data-period="week">Minggu Ini</button>
                            <button class="chart-control-btn" data-period="month">Bulan Ini</button>
                            <button class="chart-control-btn" data-period="year">Tahun Ini</button>
                        </div>
                    </div>
                    
                    <!-- Perbaikan: ID grafik disesuaikan dengan yang digunakan di JavaScript -->
                    <div id="main-chart" style="height: 350px;"></div>
                </div>
                
                <!-- Recent Activities tetap sama seperti sebelumnya -->
                
                <!-- Latest Uploads tetap sama seperti sebelumnya -->
            </div>
            
            <!-- Right Column -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <!-- Admin Profile Card tetap sama seperti sebelumnya -->
                
                <!-- System Information tetap sama seperti sebelumnya -->
                
                <!-- Category Distribution - PERBAIKAN STRUKTUR -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h5 class="chart-title"><i class="fa fa-pie-chart"></i> Distribusi Kategori</h5>
                    </div>
                    
                    <!-- Perbaikan: ID grafik yang sesuai untuk kategori -->
                    <div id="category-chart" style="height: 250px;"></div>
                    
                    <?php
                    $category_query = mysqli_query($koneksi, "SELECT kategori_nama, COUNT(arsip_id) as total 
                                                           FROM kategori 
                                                           LEFT JOIN arsip ON kategori_id = arsip_kategori 
                                                           GROUP BY kategori_id
                                                           ORDER BY total DESC
                                                           LIMIT 5");
                    ?>
                    
                    <ul class="list-group mt-3">
                        <?php while($cat = mysqli_fetch_array($category_query)) { ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $cat['kategori_nama']; ?>
                            <span class="badge badge-primary badge-pill"><?php echo $cat['total']; ?></span>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                
                <!-- Recent Downloads tetap sama seperti sebelumnya -->
            </div>
        </div>
    </div>
</div>

<!-- Loading Morris Charts Dependencies - PASTIKAN LIBRARY INI DIMUAT -->
<script src="../assets/js/morrisjs/morris.min.js"></script>
<script src="../assets/js/morrisjs/raphael-min.js"></script>

<!-- JavaScript untuk Grafik - PERBAIKAN CODE JAVASCRIPT -->
<script type="text/javascript">
$(document).ready(function(){
    // Data untuk grafik unduhan - data harian untuk satu bulan
    var dailyData = [
        <?php
        // Ambil data untuk 30 hari terakhir
        for($i = 29; $i >= 0; $i--) {
            $date = date('Y-m-d', strtotime("-$i days"));
            $formatted_date = date('d-m-Y', strtotime("-$i days"));
            
            // Hitung unduhan untuk setiap hari
            $downloads_query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM riwayat WHERE DATE(riwayat_waktu) = '$date'");
            $downloads = mysqli_fetch_assoc($downloads_query);
            $total_downloads = $downloads['total'];
            
            echo "{ date: '".$formatted_date."', value: ".$total_downloads." },";
        }
        ?>
    ];
    
    // Data untuk distribusi kategori
    var categoryData = [
        <?php
        // Reset pointer query kategori
        mysqli_data_seek($category_query, 0);
        
        // Ambil data distribusi kategori
        while($cat = mysqli_fetch_array($category_query)) {
            echo "{label: '".$cat['kategori_nama']."', value: ".$cat['total']."},";
        }
        ?>
    ];
    
    // PERBAIKAN: Inisialisasi grafik area untuk data unduhan
    if($('#main-chart').length) {
        Morris.Area({
            element: 'main-chart',
            data: dailyData,
            xkey: 'date',
            ykeys: ['value'],
            labels: ['Jumlah Unduhan'],
            pointSize: 3,
            fillOpacity: 0.6,
            pointStrokeColors: ['#4e73df'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineColors: ['#4e73df'],
            hideHover: 'auto',
            lineWidth: 2,
            resize: true
        });
    }
    
    // PERBAIKAN: Inisialisasi grafik donut untuk distribusi kategori
    if($('#category-chart').length) {
        Morris.Donut({
            element: 'category-chart',
            data: categoryData,
            colors: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
            resize: true,
            formatter: function (value) { return value + ' Arsip'; }
        });
    }
    
    // PERBAIKAN: Tombol filter periode
    $('.chart-control-btn[data-period]').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        
        var period = $(this).data('period');
        
        // Disini bisa ditambahkan kode untuk update data grafik berdasarkan periode
        // Contoh sederhana - hanya untuk demonstrasi:
        if(period === 'week') {
            // Filter data untuk minggu ini
            // Contoh implementasi: perbarui data grafik dengan AJAX
            console.log("Menampilkan data minggu ini");
        } else if(period === 'month') {
            // Filter data untuk bulan ini
            console.log("Menampilkan data bulan ini");
        } else if(period === 'year') {
            // Filter data untuk tahun ini
            console.log("Menampilkan data tahun ini");
        }
    });
    
    // Tombol filter aktivitas - tetap sama seperti sebelumnya
    $('.chart-control-btn[data-activity]').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var activity = $(this).data('activity');
        
        if(activity === 'all') {
            $('.activity-item').show();
        } else if(activity === 'uploads') {
            $('.activity-item').hide();
            $('.activity-item .fa-upload').closest('.activity-item').show();
        } else if(activity === 'downloads') {
            $('.activity-item').hide();
            $('.activity-item .fa-download').closest('.activity-item').show();
        }
    });
});
</script>

<!-- PERBAIKAN: Script untuk waktu server real-time yang lebih akurat -->
<script type="text/javascript">
// Fungsi untuk memperbarui waktu server secara real-time
function updateServerTime() {
    // Buat tanggal saat ini berbasis WIB (UTC+7)
    var now = new Date();
    var utcTime = now.getTime() + (now.getTimezoneOffset() * 60000);
    var wibTime = new Date(utcTime + (7 * 60 * 60 * 1000));
    
    var hours = wibTime.getHours();
    var minutes = wibTime.getMinutes();
    var seconds = wibTime.getSeconds();
    var day = wibTime.getDate();
    
    // Nama bulan dalam bahasa Indonesia
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
    var month = monthNames[wibTime.getMonth()];
    var year = wibTime.getFullYear();
    
    // Format dengan leading zeros
    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    
    // Format string tanggal lengkap
    var timeString = hours + ":" + minutes + ":" + seconds + " - " + day + " " + month + " " + year;
    
    // Perbarui elemen HTML
    document.getElementById("server-time").innerHTML = timeString + " <small>WIB</small>";
    
    // Jalankan fungsi setiap 1 detik
    setTimeout(updateServerTime, 1000);
}

// Mulai pembaruan waktu ketika halaman selesai dimuat
window.onload = function() {
    updateServerTime();
};
</script>

<?php include 'footer.php'; ?>