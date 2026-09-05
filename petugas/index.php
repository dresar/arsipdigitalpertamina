<?php include 'header.php'; ?>

<!-- Custom Dashboard CSS -->
<style>
    /* Dashboard General Styling */
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
    
    .breadcome-menu {
        text-align: right;
    }
    
    .breadcome-menu li {
        display: inline-block;
    }
    
    .bread-slash {
        padding: 0 5px;
        color: #95a5a6;
    }
    
    .bread-blod {
        font-weight: 600;
        color: #3498db;
    }
    
    /* Info Card Styling */
    .white-box {
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        padding: 25px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: white;
        border-top: 3px solid #3498db;
        height: 100%;
        min-height: 130px;
    }
    
    .white-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 7px 15px rgba(0,0,0,0.1);
    }
    
    .analytics-info-cs h3 {
        font-size: 18px;
        margin-top: 0;
        margin-bottom: 15px;
        font-weight: 600;
        color: #34495e;
    }
    
    .analytics-info-cs .counter {
        font-size: 28px;
        font-weight: 700;
    }
    
    .two-part-sp {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .two-part-sp li {
        display: flex;
        align-items: center;
    }
    
    .two-part-sp li i {
        margin-right: 8px;
    }
    
    /* Box color variants */
    .analytics-info-cs:nth-child(1) .white-box {
        border-top-color: #3498db;
    }
    
    .analytics-info-cs:nth-child(1) .counter {
        color: #3498db;
    }
    
    .analytics-info-cs:nth-child(2) .white-box {
        border-top-color: #9b59b6;
    }
    
    .analytics-info-cs:nth-child(2) .counter {
        color: #9b59b6;
    }
    
    .analytics-info-cs:nth-child(3) .white-box {
        border-top-color: #2ecc71;
    }
    
    .analytics-info-cs:nth-child(3) .counter {
        color: #2ecc71;
    }
    
    .analytics-info-cs:nth-child(4) .white-box {
        border-top-color: #e74c3c;
    }
    
    .analytics-info-cs:nth-child(4) .counter {
        color: #e74c3c;
    }
    
    /* Chart area styling */
    .product-sales-chart {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        padding: 20px;
        margin-bottom: 30px;
    }
    
    .portlet-title {
        border-bottom: 1px solid #f1f1f1;
        padding-bottom: 15px;
        margin-bottom: 15px;
    }
    
    .caption-subject {
        font-size: 18px;
        font-weight: 600;
        color: #34495e;
    }
    
    .cus-product-sl-rp {
        margin-bottom: 15px;
    }
    
    .cus-product-sl-rp li {
        display: inline-block;
        margin-right: 10px;
    }
    
    /* Profile card styling */
    .single-cards-item {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        background: white;
        height: 100%;
    }
    
    .single-product-image img {
        width: 100%;
        height: 120px;
        object-fit: cover;
    }
    
    .single-product-text {
        padding: 20px;
        text-align: center;
    }
    
    .img-user {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid white;
        margin-top: -40px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .single-product-text h4 {
        margin-top: 15px;
        margin-bottom: 5px;
        font-weight: 600;
    }
    
    .single-product-text h5 {
        color: #7f8c8d;
        margin-bottom: 15px;
    }
    
    .ctn-cards {
        color: #7f8c8d;
        font-size: 14px;
        line-height: 1.6;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .res-mg-t-30 {
            margin-top: 20px;
        }
        
        .breadcome-menu {
            text-align: left;
            margin-top: 10px;
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

<div class="traffice-source-area mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-info-cs">
                    <div class="white-box">
                        <h3 class="box-title">Petugas</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right sp-cn-r">
                                <i class="fa fa-user" aria-hidden="true"></i> 
                                <span class="counter text-success">
                                    <?php 
                                    $jumlah_petugas = mysqli_query($koneksi,"select * from petugas");
                                    ?>
                                    <span class="counter"><?php echo mysqli_num_rows($jumlah_petugas); ?></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-info-cs res-mg-t-30 table-mg-t-pro-n">
                    <div class="white-box">
                        <h3 class="box-title">User / Pengguna</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right graph-two-ctn">
                                <i class="fa fa-users" aria-hidden="true"></i> 
                                <span class="counter text-purple">
                                    <?php 
                                    $jumlah_user = mysqli_query($koneksi,"select * from user");
                                    ?>
                                    <span class="counter"><?php echo mysqli_num_rows($jumlah_user); ?></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="white-box">
                        <h3 class="box-title">Total Arsip</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right graph-three-ctn">
                                <i class="fa fa-file-archive-o" aria-hidden="true"></i> 
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
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="white-box">
                        <h3 class="box-title">Kategori Arsip</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right graph-four-ctn">
                                <i class="fa fa-folder-open" aria-hidden="true"></i> 
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
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>Grafik pengunduhan arsip</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>Grafik jumlah unduh arsip perhari selama sebulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <h5><i class="fa fa-circle" style="color: #006DF0;"></i> Jumlah Unduhan</h5>
                        </li>
                    </ul>
                    <div id="extra-area-chart" style="height: 356px;"></div>
                    <div id="morris-area-chart"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from petugas where petugas_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#">
                            <img src="../assets/img/product/profile-bg.jpg" alt="">
                        </a>
                    </div>

                    <div class="single-product-text">
                        <?php 
                        if($s['petugas_foto'] == ""){
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png">
                            <?php
                        }else{
                            ?>
                            <img class="img-user" src="../gambar/petugas/<?php echo $s['petugas_foto']; ?>">
                            <?php
                        }
                        ?>

                        <h4><a class="cards-hd-dn" href="#"><?php echo $s['petugas_nama']; ?></a></h4>
                        <h5>Petugas</h5>
                        <p class="ctn-cards">Pengelolaan arsip jadi lebih mudah dengan  arsip digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>