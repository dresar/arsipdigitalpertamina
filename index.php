<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT Pertamina Hulu Rokan Rantau - Sistem Arsip Digital</title>
    <meta name="description" content="Arsip Digital PT Pertamina Hulu Rokan Rantau">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            transition: all 0.3s ease;
        }

        /* Navbar Styling */
        .navbar-pertamina {
            background: #006644;
            /* Pertamina green */
            border-radius: 0px;
            border: none;
            margin: 0px;
            padding: 15px 0px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-pertamina.scrolled {
            padding: 10px 0;
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: 700;
            font-size: 24px;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #fff !important;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 15px 20px;
        }

        .navbar-inverse .navbar-nav>li>a:hover {
            color: #ffcc00 !important;
            /* Pertamina yellow */
        }

        .navbar-toggle {
            border-color: #fff !important;
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff !important;
        }

        .navbar-inverse .navbar-toggle:focus,
        .navbar-inverse .navbar-toggle:hover {
            background-color: #004d33 !important;
        }

        /* Banner Styling */
        .banner {
            background: linear-gradient(135deg, #006644 0%, #004d33 100%);
            padding: 80px 0px;
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .banner h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .banner p {
            font-size: 18px;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .banner-btn {
            display: inline-block;
            padding: 12px 25px;
            color: white;
            border: 2px solid white;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-right: 15px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .banner-btn:hover {
            text-decoration: none;
            background-color: #ffcc00;
            /* Pertamina yellow */
            border-color: #ffcc00;
            color: #006644;
            /* Pertamina green */
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .banner-img {
            max-width: 75%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
        }

        .banner-img:hover {
            transform: scale(1.03);
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: #fff;
            transition: all 0.3s ease;
        }

        .feature-box {
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            min-height: 250px;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 50px;
            color: #006644;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .feature-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #333;
            transition: all 0.3s ease;
        }

        .feature-text {
            color: #666;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        /* Footer */
        .footer {
            background-color: #004d33;
            color: white;
            padding: 40px 0 20px;
            transition: all 0.3s ease;
        }

        .footer h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #ffcc00;
            transition: all 0.3s ease;
        }

        .footer p,
        .footer a {
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: #ffcc00;
            text-decoration: none;
        }

        .footer-menu {
            list-style: none;
            padding: 0;
        }

        .footer-menu li {
            margin-bottom: 10px;
        }

        .footer-menu i {
            margin-right: 10px;
            color: #ffcc00;
            transition: all 0.3s ease;
        }

        .copyright {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            font-size: 14px;
        }

        /* User Guide Section */
        .guide-section {
            padding: 80px 0;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .guide-box {
            margin-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .guide-header {
            background-color: #006644;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .guide-icon {
            font-size: 36px;
            margin-right: 20px;
            color: #ffcc00;
            transition: all 0.3s ease;
        }

        .guide-title {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
            transition: all 0.3s ease;
        }

        .guide-content {
            background-color: #fff;
            padding: 30px;
        }

        .guide-step {
            display: flex;
            margin-bottom: 20px;
            align-items: flex-start;
        }

        .guide-step-number {
            font-size: 24px;
            font-weight: 700;
            color: #006644;
            margin-right: 15px;
            background-color: #f5f5f5;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .guide-step-text h4 {
            font-size: 18px;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
            transition: all 0.3s ease;
        }

        .guide-step-text p {
            color: #666;
            margin-bottom: 0;
            transition: all 0.3s ease;
        }

        .guide-img {
            width: 25%;
            height: auto;
            border-radius: 5px;
            margin: 20px 0;
            box-shadow: 0 3px 10px rgba(255, 0, 0, 0.1);
        }

        .guide-note {
            background-color: #fffaed;
            border-left: 4px solid #ffcc00;
            padding: 15px;
            margin-top: 20px;
            border-radius: 0 5px 5px 0;
            transition: all 0.3s ease;
        }

        .guide-note h5 {
            color: #333;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .guide-note p {
            color: #666;
            margin-bottom: 0;
            transition: all 0.3s ease;
        }

        /* Color Switch */
        .color-switch {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            background-color: #006644;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .color-switch:hover {
            transform: scale(1.1);
        }

        /* Black and White Mode */
        body.bw-mode {
            filter: grayscale(100%);
        }

        body.bw-mode .navbar-pertamina {
            background: #222;
        }

        body.bw-mode .banner {
            background: linear-gradient(135deg, #222 0%, #111 100%);
        }

        body.bw-mode .feature-icon {
            color: #333;
        }

        body.bw-mode .footer {
            background-color: #222;
        }

        body.bw-mode .footer h4,
        body.bw-mode .footer-menu i {
            color: #ddd;
        }

        body.bw-mode .guide-header {
            background-color: #333;
        }

        body.bw-mode .guide-icon {
            color: #fff;
        }

        body.bw-mode .guide-step-number {
            color: #333;
        }

        body.bw-mode .guide-note {
            background-color: #f5f5f5;
            border-left: 4px solid #777;
        }

        body.bw-mode .color-switch {
            background-color: #333;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
            background-color: #fff;
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .contact-info {
            background-color: #006644;
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .contact-info h3 {
            color: #ffcc00;
            margin-bottom: 20px;
        }

        .contact-info-item {
            display: flex;
            margin-bottom: 20px;
        }

        .contact-icon {
            color: #ffcc00;
            font-size: 24px;
            margin-right: 15px;
            margin-top: 3px;
        }

        .contact-text h5 {
            color: white;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .contact-form .form-control {
            height: 45px;
            margin-bottom: 20px;
            border: 1px solid #e5e5e5;
            box-shadow: none;
        }

        .contact-form textarea.form-control {
            height: 120px;
        }

        .contact-btn {
            background-color: #006644;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .contact-btn:hover {
            background-color: #004d33;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .banner {
                padding: 60px 0;
                text-align: center;
            }

            .banner h1 {
                font-size: 36px;
            }

            .banner-img {
                margin-top: 40px;
                max-width: 80%;
            }

            .guide-header {
                flex-direction: column;
                text-align: center;
                padding: 20px 10px;
            }

            .guide-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .guide-step {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .guide-step-number {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 767px) {
            .navbar-brand img {
                height: 30px;
            }

            .banner h1 {
                font-size: 28px;
            }

            .banner p {
                font-size: 16px;
            }

            .banner-btn {
                display: block;
                margin: 0 auto 15px;
                max-width: 200px;
            }

            .color-switch {
                bottom: 20px;
                right: 20px;
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .contact-info {
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>
    <!-- Color Switch Button -->
    <div class="color-switch" id="colorSwitch">
        <i class="fas fa-adjust"></i>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-pertamina navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="pertamina.png" alt="Pertamina Logo">
                    PT Pertamina Hulu Rokan 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home"><i class="fas fa-home"></i> Beranda</a></li>
                    <li><a href="#features"><i class="fas fa-star"></i> Fitur</a></li>
                    <li><a href="#user-guide"><i class="fas fa-book"></i> Panduan Users</a></li>
                    <li><a href="#admin-guide"><i class="fas fa-user-shield"></i> Panduan Admin</a></li>
                    <li><a href="#contact"><i class="fas fa-envelope"></i> Kontak</a></li>
                    <li><a href="login.php" class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> Login Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner/Hero Section -->
    <section id="home" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h1>Sistem Pengarsipan Digital: Solusi Cerdas untuk Manajemen Dokumen </h1>
                        <p>Selamat datang di Sistem Pengarsipan Digital kami, solusi modern untuk pengelolaan dan penyimpanan
                             dokumen secara elektronik. Dengan teknologi canggih, Anda dapat menyimpan, mengelola, dan mengakses dokumen dengan mudah, aman, dan efisien kapan saja dan di mana saja. Nikmati kemudahan dalam mencari, mengorganisir, dan melindungi data penting Anda, tanpa repot dengan arsip fisik. Bergabunglah dengan kami untuk memaksimalkan produktivitas dan efisiensi organisasi Anda melalui pengarsipan digital yang terstruktur dan aman.

</p>

                        <a href="user_login.php" class="banner-btn"><i class="fas fa-user"></i> Login User</a>
                        <a href="login.php" class="banner-btn"><i class="fas fa-user-shield"></i> Login Admin</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="gambar.jpg" alt="Arsip Digital Illustration" class="banner-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 50px; font-weight: 700; color: #006644;">Fitur Unggulan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-file-archive feature-icon"></i>
                        <h3 class="feature-title">Penyimpanan Aman</h3>
                        <p class="feature-text">Arsip dokumen disimpan dengan aman menggunakan teknologi enkripsi
                            terbaru untuk melindungi data sensitif perusahaan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-search feature-icon"></i>
                        <h3 class="feature-title">Pencarian Cepat</h3>
                        <p class="feature-text">Temukan dokumen yang Anda butuhkan dalam hitungan detik dengan sistem
                            pencarian canggih dan katalogisasi otomatis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-mobile-alt feature-icon"></i>
                        <h3 class="feature-title">Akses Mobile</h3>
                        <p class="feature-text">Akses arsip Anda dari perangkat apa pun, kapan saja dan di mana saja
                            dengan tampilan yang responsif.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-chart-line feature-icon"></i>
                        <h3 class="feature-title">Analisis Data</h3>
                        <p class="feature-text">Dapatkan wawasan berharga dari data arsip Anda dengan fitur analitik dan
                            pelaporan yang komprehensif.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-user-lock feature-icon"></i>
                        <h3 class="feature-title">Manajemen Akses</h3>
                        <p class="feature-text">Kontrol siapa yang dapat mengakses, melihat, dan mengedit dokumen dengan
                            sistem hak akses yang terperinci.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-history feature-icon"></i>
                        <h3 class="feature-title">Riwayat Versi</h3>
                        <p class="feature-text">Lacak semua perubahan pada dokumen dengan sistem riwayat versi dan
                            kemampuan memulihkan versi sebelumnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- User Guide Section -->
    <section id="user-guide" class="guide-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 50px; font-weight: 700; color: #006644;">Panduan Users</h2>
                </div>
            </div>

            <!-- Login Guide -->
            <div class="row">
                <div class="col-md-12">
                    <div class="guide-box">
                        <div class="guide-header">
                            <div class="guide-icon"><i class="fas fa-sign-in-alt"></i></div>
                            <h3 class="guide-title">Cara Login ke Sistem</h3>
                        </div>
                        <div class="guide-content">
                            <div class="guide-step">
                                <div class="guide-step-number">1</div>
                                <div class="guide-step-text">
                                    <h4>Buka Halaman Login</h4>
                                    <p>Klik tombol "Login User" pada halaman utama atau akses langsung melalui URL
                                        <strong>login.php</strong>.</p>
                                </div>
                            </div>

                            <div class="guide-step">
                                <div class="guide-step-number">2</div>
                                <div class="guide-step-text">
                                    <h4>Masukkan Kredensial</h4>
                                    <p>Masukkan NIP dan password yang telah diberikan oleh administrator sistem.</p>
                                </div>
                            </div>

                            <img src="login.png" alt="Panduan Login" class="guide-img">

                            <div class="guide-step">
                                <div class="guide-step-number">3</div>
                                <div class="guide-step-text">
                                    <h4>Autentikasi</h4>
                                    <p>Klik tombol "Masuk" untuk memproses autentikasi. Jika kredensial benar, Anda akan
                                        diarahkan ke dashboard.</p>
                                </div>
                            </div>

                            <div class="guide-step">
                                <div class="guide-step-number">4</div>
                                <div class="guide-step-text">
                                    <h4>Lupa Password</h4>
                                    <p>Jika lupa password, klik tautan "Lupa Password" pada halaman login dan ikuti
                                        petunjuk untuk mengatur ulang password.</p>
                                </div>
                            </div>

                            <div class="guide-note">
                                <h5>Catatan Penting:</h5>
                                <p>Pastikan untuk selalu logout setelah selesai menggunakan sistem, terutama jika
                                    menggunakan komputer publik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Document Search Guide -->
            <div class="row">
                <div class="col-md-12">
                    <div class="guide-box">
                        <div class="guide-header">
                            <div class="guide-icon"><i class="fas fa-search"></i></div>
                            <h3 class="guide-title">Cara Mencari Dokumen</h3>
                        </div>
                        <div class="guide-content">
                            <div class="guide-step">
                                <div class="guide-step-number">1</div>
                                <div class="guide-step-text">
                                    <h4>Akses Menu Pencarian</h4>
                                    <p>Dari dashboard, klik menu "Pencarian" pada sidebar atau gunakan kotak pencarian
                                        di bagian atas halaman.</p>
                                </div>
                            </div>

                            <div class="guide-step">
                                <div class="guide-step-number">2</div>
                                <div class="guide-step-text">
                                    <h4>Pencarian Dasar</h4>
                                    <p>Masukkan kata kunci terkait dokumen yang ingin Anda cari pada kotak pencarian,
                                        lalu tekan Enter atau klik ikon pencarian.</p>
                                </div>
                            </div>

                            <img src="pencarian.png" alt="Panduan Pencarian" class="guide-img">

                            <div class="guide-step">
                                <div class="guide-step-number">3</div>
                                <div class="guide-step-text">
                                    <h4>Pencarian Lanjutan</h4>
                                    <p>Untuk pencarian yang lebih spesifik, gunakan fitur "Pencarian Lanjutan" yang
                                        memungkinkan Anda memfilter berdasarkan:</p>
                                    <ul>
                                        <li>Kategori dokumen</li>
                                        <li>Tanggal unggah</li>
                                        <li>Departemen</li>
                                        <li>Jenis file</li>
                                        <li>Tingkat kerahasiaan</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="guide-step">
                                <div class="guide-step-number">4</div>
                                <div class="guide-step-text">
                                    <h4>Melihat Hasil Pencarian</h4>
                                    <p>Hasil pencarian akan ditampilkan dalam daftar dengan informasi singkat tentang
                                        setiap dokumen. Klik pada dokumen untuk melihat detail atau mengunduhnya.</p>
                                </div>
                            </div>

                            <div class="guide-step">
                                <div class="guide-step-number">5</div>
                                <div class="guide-step-text">
                                    <h4>Menyimpan Pencarian</h4>
                                    <p>Jika Anda sering melakukan pencarian dengan kriteria yang sama, Anda dapat
                                        menyimpan pencarian tersebut dengan mengklik "Simpan Pencarian Ini" di bagian
                                        atas hasil pencarian.</p>
                                </div>
                            </div>

                            <div class="guide-note">
                                <h5>Tips Pencarian:</h5>
                                <p>Gunakan tanda kutip ("") untuk mencari frasa yang tepat. Contoh: <strong>"laporan
                                        keuangan 2024"</strong> akan mencari dokumen yang mengandung frasa tersebut
                                    secara utuh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Download Document Guide -->
            <div class="row">
                <div class="col-md-12">
                    <div class="guide-box">
                        <div class="guide-header">
                            <div class="guide-icon"><i class="fas fa-download"></i></div>
                            <h3 class="guide-title">Cara Mengunduh Dokumen</h3>
                        </div>
                        <div class="guide-content">
                            <div class="guide-step">
                                <div class="guide-step-number">1</div>
                                <div class="guide-step-text">
                                    <h4>Temukan Dokumen</h4>
                                    <p>Gunakan pencarian atau navigasi untuk menemukan dokumen yang ingin diunduh.</p>
                                </div>
                            </div>

                            <div class="guide-step">
                                <div class="guide-step-number">2</div>
                                <div class="guide-step-text">
                                    <h4>Akses Halaman Detail</h4>
                                    <p>Klik pada dokumen untuk membuka halaman detail dokumen.</p>
                                </div>
                            </div>

                            <img src="unduh.png" alt="Panduan Unduh" class="guide-img">

                            <div class="guide-step">
                                <div class="guide-step-number">3</div>
                                <div class="guide-step-text">
                                    <h4>Unduh Dokumen</h4>
                                    <p>Klik tombol "Unduh" pada halaman detail dokumen. File akan diunduh ke perangkat
                                        Anda.</p>
                                </div>
                            </div>

                            <div class="guide-step">
                                <div class="guide-step-number">4</div>
                                <div class="guide-step-text">
                                    <h4>Verifikasi Hak Akses</h4>
                                    <p>Pastikan Anda memiliki hak akses yang cukup untuk mengunduh dokumen tersebut.
                                        Jika tidak memiliki akses, hubungi administrator.</p>
                                </div>
                            </div>

                            <div class="guide-note">
                                <h5>Catatan Keamanan:</h5>
                                <p>Dokumen yang diunduh mungkin diproteksi. Jangan membagikan dokumen dengan pihak yang
                                    tidak berwenang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Admin Guide Section -->
            <section id="admin-guide" class="guide-section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 style="margin-bottom: 50px; font-weight: 700; color: #006644;">Panduan Petugas
                            </h2>
                        </div>
                    </div>

                    <!-- Upload Document Guide -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="guide-box">
                                <div class="guide-header">
                                    <div class="guide-icon"><i class="fas fa-upload"></i></div>
                                    <h3 class="guide-title">Cara Mengunggah Dokumen</h3>
                                </div>
                                <div class="guide-content">
                                    <div class="guide-step">
                                        <div class="guide-step-number">1</div>
                                        <div class="guide-step-text">
                                            <h4>Akses Menu Unggah</h4>
                                            <p>Dari dashboard admin, klik menu "Unggah Dokumen" pada sidebar.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">2</div>
                                        <div class="guide-step-text">
                                            <h4>Pilih File</h4>
                                            <p>Klik tombol "Pilih File" atau seret dan lepas file ke area yang
                                                ditentukan.</p>
                                        </div>
                                    </div>

                                    <img src="img/guide-upload.png" alt="Panduan Unggah" class="guide-img">

                                    <div class="guide-step">
                                        <div class="guide-step-number">3</div>
                                        <div class="guide-step-text">
                                            <h4>Isi Metadata</h4>
                                            <p>Lengkapi metadata dokumen yang diperlukan:</p>
                                            <ul>
                                                <li>Judul Dokumen</li>
                                                <li>Kategori</li>
                                                <li>Departemen</li>
                                                <li>Tanggal Dokumen</li>
                                                <li>Tingkat Kerahasiaan</li>
                                                <li>Kata Kunci</li>
                                                <li>Deskripsi (opsional)</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">4</div>
                                        <div class="guide-step-text">
                                            <h4>Atur Hak Akses</h4>
                                            <p>Tentukan siapa saja yang memiliki hak untuk melihat, mengunduh, atau
                                                mengedit dokumen.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">5</div>
                                        <div class="guide-step-text">
                                            <h4>Unggah</h4>
                                            <p>Klik tombol "Unggah" untuk menyelesaikan proses. Dokumen akan tersedia
                                                setelah diproses oleh sistem.</p>
                                        </div>
                                    </div>

                                    <div class="guide-note">
                                        <h5>Tips Unggah:</h5>
                                        <p>Gunakan format nama file yang konsisten dan deskriptif untuk memudahkan
                                            pencarian. Format yang direkomendasikan:
                                            <strong>[Kategori]_[Judul]_[Tanggal_YYYYMMDD]</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Management Guide -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="guide-box">
                                <div class="guide-header">
                                    <div class="guide-icon"><i class="fas fa-users-cog"></i></div>
                                    <h3 class="guide-title">Manajemen Pengguna</h3>
                                </div>
                                <div class="guide-content">
                                    <div class="guide-step">
                                        <div class="guide-step-number">1</div>
                                        <div class="guide-step-text">
                                            <h4>Akses Menu Pengguna</h4>
                                            <p>Dari dashboard admin, klik menu "Manajemen Pengguna" pada sidebar.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">2</div>
                                        <div class="guide-step-text">
                                            <h4>Tambah Pengguna Baru</h4>
                                            <p>Klik tombol "Tambah Pengguna" dan isi formulir dengan informasi pengguna:
                                            </p>
                                            <ul>
                                                <li>Nama Lengkap</li>
                                                <li>NIP</li>
                                                <li>Email</li>
                                                <li>Departemen</li>
                                                <li>Jabatan</li>
                                                <li>Peran (User/Admin)</li>
                                                <li>Password Sementara</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <img src="img/guide-user-management.png" alt="Panduan Manajemen Pengguna"
                                        class="guide-img">

                                    <div class="guide-step">
                                        <div class="guide-step-number">3</div>
                                        <div class="guide-step-text">
                                            <h4>Edit Pengguna</h4>
                                            <p>Untuk mengedit pengguna, klik ikon "Edit" pada baris pengguna yang ingin
                                                diubah dan perbarui informasi yang diperlukan.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">4</div>
                                        <div class="guide-step-text">
                                            <h4>Atur Grup & Hak Akses</h4>
                                            <p>Klik tab "Grup & Hak Akses" untuk mengatur grup pengguna dan hak akses
                                                terhadap kategori dokumen tertentu.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">5</div>
                                        <div class="guide-step-text">
                                            <h4>Nonaktifkan Pengguna</h4>
                                            <p>Untuk menonaktifkan pengguna, klik ikon "Status" pada baris pengguna dan
                                                ubah status menjadi "Tidak Aktif".</p>
                                        </div>
                                    </div>

                                    <div class="guide-note">
                                        <h5>Praktik Terbaik:</h5>
                                        <p>Terapkan prinsip hak akses minimal (principle of least privilege) - hanya
                                            berikan akses yang diperlukan pengguna untuk melakukan pekerjaannya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- System Configuration Guide -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="guide-box">
                                <div class="guide-header">
                                    <div class="guide-icon"><i class="fas fa-cogs"></i></div>
                                    <h3 class="guide-title">Konfigurasi Sistem</h3>
                                </div>
                                <div class="guide-content">
                                    <div class="guide-step">
                                        <div class="guide-step-number">1</div>
                                        <div class="guide-step-text">
                                            <h4>Akses Menu Konfigurasi</h4>
                                            <p>Dari dashboard admin, klik menu "Konfigurasi Sistem" pada sidebar.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">2</div>
                                        <div class="guide-step-text">
                                            <h4>Kelola Kategori Dokumen</h4>
                                            <p>Pada tab "Kategori", Anda dapat menambah, mengedit, atau menghapus
                                                kategori dokumen.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">3</div>
                                        <div class="guide-step-text">
                                            <h4>Kelola Departemen</h4>
                                            <p>Pada tab "Departemen", Anda dapat mengelola daftar departemen yang
                                                tersedia dalam sistem.</p>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">4</div>
                                        <div class="guide-step-text">
                                            <h4>Pengaturan Keamanan</h4>
                                            <p>Pada tab "Keamanan", Anda dapat mengonfigurasi:</p>
                                            <ul>
                                                <li>Kebijakan password (panjang minimal, kompleksitas)</li>
                                                <li>Periode kedaluwarsa password</li>
                                                <li>Batas percobaan login</li>
                                                <li>Pengaturan timeout sesi</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="guide-step">
                                        <div class="guide-step-number">5</div>
                                        <div class="guide-step-text">
                                            <h4>Pengaturan Notifikasi</h4>
                                            <p>Pada tab "Notifikasi", Anda dapat mengonfigurasi pengaturan email dan
                                                notifikasi sistem.</p>
                                        </div>
                                    </div>

                                    <div class="guide-note">
                                        <h5>Peringatan:</h5>
                                        <p>Perubahan pada konfigurasi sistem dapat memengaruhi semua pengguna. Pastikan
                                            untuk menguji perubahan di lingkungan pengujian sebelum menerapkannya di
                                            lingkungan produksi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section -->
            <section id="contact" class="contact-section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 style="margin-bottom: 50px; font-weight: 700; color: #006644;">Hubungi Kami</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-form">
                                <h3 style="margin-bottom: 30px; font-weight: 600;">Kirim Pesan</h3>
                                <form id="contactForm">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subjek"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Pesan"
                                            required></textarea>
                                    </div>
                                    <button type="submit" class="btn contact-btn">Kirim Pesan</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h3>Informasi Kontak</h3>

                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h5>Alamat</h5>
                                        <p>Jl. Raya Rantau, Kec. Rantau, Kab. Aceh Tamiang, Provinsi Aceh 24476</p>
                                    </div>
                                </div>

                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h5>Telepon</h5>
                                        <p>+62 (0) 641 7031101</p>
                                    </div>
                                </div>

                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h5>Email</h5>
                                        <p>arsip.digital@pertamina-phr.com</p>
                                    </div>
                                </div>

                                <div class="contact-info-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h5>Jam Operasional</h5>
                                        <p>Senin - Jumat: 08.00 - 17.00</p>
                                    </div>
                                </div>

                                <div style="margin-top: 30px;">
                                    <h5 style="color: #ffcc00; margin-bottom: 15px;">Dukungan Teknis</h5>
                                    <p>Untuk bantuan teknis, silakan hubungi tim IT Support:</p>
                                    <p><i class="fas fa-envelope mr-2" style="color: #ffcc00;"></i>
                                        it.support@pertamina-phr.com</p>
                                    <p><i class="fas fa-phone-alt mr-2" style="color: #ffcc00;"></i> Ext. 7777</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Tentang Kami</h4>
                            <p>Sistem Arsip Digital PT Pertamina Hulu Rokan Rantau adalah solusi modern untuk
                                pengelolaan dan penyimpanan dokumen perusahaan secara digital yang aman dan efisien.</p>
                            <div style="margin-top: 20px;">
                                <img src="pertamina.png" alt="Pertamina Logo" style="height: 50px;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4>Tautan Cepat</h4>
                            <ul class="footer-menu">
                                <li><a href="#home"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                                <li><a href="#features"><i class="fas fa-chevron-right"></i> Fitur</a></li>
                                <li><a href="#user-guide"><i class="fas fa-chevron-right"></i> Panduan Pengguna</a></li>
                                <li><a href="#admin-guide"><i class="fas fa-chevron-right"></i> Panduan Admin</a></li>
                                <li><a href="#contact"><i class="fas fa-chevron-right"></i> Kontak</a></li>
                                <li><a href="login.php"><i class="fas fa-chevron-right"></i> Login</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Dokumen Terkait</h4>
                            <ul class="footer-menu">
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Kebijakan Privasi</a></li>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Syarat dan Ketentuan</a></li>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Panduan Keamanan Informasi</a></li>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>&copy; 2025 PT Pertamina Hulu Rokan Rantau. Hak Cipta Dilindungi.</p>
                    </div>
                </div>
            </footer>

            <!-- JavaScript -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>

            <script>
                // Color Switch Functionality
                document.getElementById('colorSwitch').addEventListener('click', function () {
                    document.body.classList.toggle('bw-mode');
                });

                // Navbar Scroll Effect
                window.addEventListener('scroll', function () {
                    var navbar = document.querySelector('.navbar-pertamina');
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });

                // Smooth Scrolling for Anchor Links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();

                        const targetId = this.getAttribute('href');
                        if (targetId === '#') return;

                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            const navbarHeight = document.querySelector('.navbar-pertamina').offsetHeight;
                            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                            window.scrollTo({
                                top: targetPosition,
                                behavior: 'smooth'
                            });
                        }
                    });
                });

                // Form Submission
                document.getElementById('contactForm').addEventListener('submit', function (e) {
                    e.preventDefault();
                    alert('Terima kasih! Pesan Anda telah dikirim. Tim kami akan segera menghubungi Anda.');
                    this.reset();
                });
            </script>
</body>

</html>