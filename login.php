<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Admin | Sistem Informasi Arsip Digital - Pertamina Hulu Rokan</title>
    <meta name="description" content="Sistem Informasi Arsip Digital Pertamina Hulu Rokan">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #007953;
            --secondary-color: #005587;
            --accent-color: #f7941e;
            --light-bg: #f8f9fa;
            --dark-bg: #121212;
            --dark-card: #1e1e1e;
            --dark-input: #2d2d2d;
            --text-dark: #343a40;
            --text-light: #f8f9fa;
            --border-light: rgba(255, 255, 255, 0.1);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
            height: 100vh;
            overflow-x: hidden;
        }
        
        body.light-mode {
            background: linear-gradient(135deg, rgba(0, 121, 83, 0.1) 0%, rgba(0, 85, 135, 0.1) 100%);
            color: var(--text-dark);
        }
        
        body.dark-mode {
            background: var(--dark-bg);
            color: var(--text-light);
        }
        
        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .login-header h1 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 0;
            transition: color 0.3s ease;
        }
        
        .login-header h2 {
            color: var(--secondary-color);
            font-weight: 600;
            margin-top: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .dark-mode .login-header h1 {
            color: #00b278;
        }
        
        .dark-mode .login-header h2 {
            color: #0080c5;
        }
        
        .login-header .logo {
            max-width: 200px;
            margin-bottom: 1.5rem;
            transition: filter 0.3s ease;
        }
        
        .dark-mode .login-header .logo {
            filter: brightness(1.2);
        }
        
        .login-card {
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            transition: all 0.3s ease, background-color 0.3s ease, transform 0.3s ease;
        }
        
        .light-mode .login-card {
            background: white;
        }
        
        .dark-mode .login-card {
            background: var(--dark-card);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }
        
        .login-card:hover {
            transform: translateY(-5px);
        }
        
        .light-mode .login-card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .dark-mode .login-card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        
        .login-card-header {
            color: white;
            padding: 1.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .light-mode .login-card-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }
        
        .dark-mode .login-card-header {
            background: linear-gradient(135deg, #00864a 0%, #0069a7 100%);
        }
        
        .login-card-header h3 {
            position: relative;
            z-index: 1;
            font-weight: 600;
        }
        
        .login-card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 60%);
            transform: rotate(45deg);
        }
        
        .login-card-body {
            padding: 2rem;
        }
        
        .form-floating {
            margin-bottom: 1.5rem;
        }
        
        .form-floating label {
            color: #6c757d;
        }
        
        .dark-mode .form-floating label {
            color: #adb5bd;
        }
        
        .form-control, .form-select {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }
        
        .dark-mode .form-control, .dark-mode .form-select {
            background-color: var(--dark-input);
            border-color: var(--border-light);
            color: var(--text-light);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
        }
        
        .light-mode .form-control:focus, .light-mode .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 121, 83, 0.25);
        }
        
        .dark-mode .form-control:focus, .dark-mode .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 179, 120, 0.25);
        }
        
        .dark-mode .form-check-input {
            background-color: var(--dark-input);
            border-color: var(--border-light);
        }
        
        .dark-mode .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .dark-mode .form-check-label {
            color: var(--text-light);
        }
        
        .btn-login {
            border: none;
            color: white;
            font-weight: 500;
            padding: 0.75rem;
            border-radius: 5px;
            width: 100%;
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .light-mode .btn-login {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }
        
        .dark-mode .btn-login {
            background: linear-gradient(135deg, #00864a 0%, #0069a7 100%);
        }
        
        .btn-login::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
        }
        
        .btn-login:hover::after {
            left: 100%;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
        }
        
        .light-mode .btn-login:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .dark-mode .btn-login:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .login-footer {
            margin-top: 2rem;
            text-align: center;
            transition: color 0.3s ease;
            font-size: 0.875rem;
        }
        
        .light-mode .login-footer {
            color: #6c757d;
        }
        
        .dark-mode .login-footer {
            color: #adb5bd;
        }
        
        .login-links {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5rem;
            font-size: 0.875rem;
        }
        
        .login-links a {
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .light-mode .login-links a {
            color: var(--primary-color);
        }
        
        .light-mode .login-links a:hover {
            color: var(--secondary-color);
        }
        
        .dark-mode .login-links a {
            color: #00b278;
        }
        
        .dark-mode .login-links a:hover {
            color: #0080c5;
        }
        
        /* Animation classes */
        .bounce-in {
            animation: bounceIn 1s;
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s;
        }
        
        .slide-in-right {
            animation: slideInRight 0.5s;
        }
        
        .shake {
            animation: shake 0.5s;
        }
        
        /* Help modal */
        .modal-content {
            border-radius: 15px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        
        .light-mode .modal-content {
            background: white;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .dark-mode .modal-content {
            background: var(--dark-card);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            color: var(--text-light);
            border-color: var(--border-light);
        }
        
        .modal-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            transition: background-color 0.3s ease;
        }
        
        .light-mode .modal-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            border-bottom: 0;
        }
        
        .dark-mode .modal-header {
            background: linear-gradient(135deg, #00864a 0%, #0069a7 100%);
            color: white;
            border-bottom-color: var(--border-light);
        }
        
        .modal-title {
            font-weight: 600;
        }
        
        .modal-body {
            padding: 2rem;
        }
        
        .dark-mode .modal-body {
            color: var(--text-light);
        }
        
        .dark-mode .modal-footer {
            border-top-color: var(--border-light);
        }
        
        .help-item {
            margin-bottom: 1.5rem;
        }
        
        .help-item h5 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .light-mode .help-item h5 {
            color: var(--primary-color);
        }
        
        .dark-mode .help-item h5 {
            color: #00b278;
        }
        
        .help-item p {
            transition: color 0.3s ease;
        }
        
        .light-mode .help-item p {
            color: #6c757d;
        }
        
        .dark-mode .help-item p {
            color: #adb5bd;
        }
        
        .dark-mode .help-item ul {
            color: #adb5bd;
        }
        
        .help-icon {
            margin-right: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .light-mode .help-icon {
            color: var(--accent-color);
        }
        
        .dark-mode .help-icon {
            color: #f9a94a;
        }
        
        /* Dark mode toggle */
        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.1);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .dark-mode .theme-toggle {
            background: rgba(255, 255, 255, 0.1);
            color: #00b278;
        }
        
        .theme-toggle:hover {
            transform: rotate(45deg);
        }
        
        .light-mode .theme-toggle:hover {
            background: rgba(0, 0, 0, 0.2);
        }
        
        .dark-mode .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        
        /* Role select styling */
        .form-select {
            padding-top: 1rem;
            padding-bottom: 1rem;
            height: 58px;
            border-radius: 0.375rem;
        }
        
        .form-select-label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity .1s ease-in-out,transform .1s ease-in-out;
            color: #6c757d;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem);
            background-color: white;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        
        .dark-mode .form-select-label {
            color: #adb5bd;
            background-color: var(--dark-input);
        }
        
        .role-select-container {
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 576px) {
            .login-container {
                padding: 1rem;
            }
            
            .login-card-body {
                padding: 1.5rem;
            }
            
            .theme-toggle {
                top: 10px;
                right: 10px;
            }
        }
        
        /* Background animation */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.7;
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(15px);
            opacity: 0.1;
            animation: float 15s infinite linear;
            transition: background 0.3s ease;
        }
        
        .light-mode .floating-shape {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }
        
        .dark-mode .floating-shape {
            background: linear-gradient(135deg, #00864a 0%, #0069a7 100%);
        }
        
        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(100px, 50px) rotate(90deg);
            }
            50% {
                transform: translate(50px, 100px) rotate(180deg);
            }
            75% {
                transform: translate(-50px, 50px) rotate(270deg);
            }
            100% {
                transform: translate(0, 0) rotate(360deg);
            }
        }
        
        /* Alert adjustments for dark mode */
        .dark-mode .alert {
            background-color: var(--dark-input);
            border-color: var(--border-light);
        }
        
        .dark-mode .alert-success {
            color: #75b798;
            border-color: #75b798;
        }
        
        .dark-mode .alert-danger {
            color: #ea868f;
            border-color: #ea868f;
        }
        
        .dark-mode .alert-warning {
            color: #ffda6a;
            border-color: #ffda6a;
        }
        
        .dark-mode .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        
        .dark-mode .btn-outline-secondary {
            color: #adb5bd;
            border-color: #6c757d;
        }
        
        .dark-mode .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: white;
        }
        
        .dark-mode .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
    </style>
</head>

<body class="light-mode">
    <!-- Theme toggle button -->
    <button class="theme-toggle" id="themeToggle" title="Toggle dark/light mode">
        <i class="fas fa-moon"></i>
    </button>

    <!-- Background animation -->
    <div class="bg-animation">
        <div class="floating-shape" style="width: 300px; height: 300px; top: 10%; left: 10%;"></div>
        <div class="floating-shape" style="width: 200px; height: 200px; top: 60%; left: 70%; animation-delay: -5s;"></div>
        <div class="floating-shape" style="width: 150px; height: 150px; top: 30%; left: 80%; animation-delay: -10s;"></div>
    </div>

    <div class="login-container">
        <div class="login-header bounce-in">
            <img src="img/pertamina-logo.png" alt="Pertamina Logo" class="logo" onerror="this.src='img/favicon.ico'; this.onerror=null;">
            <h1>SISTEM INFORMASI</h1>
            <h2>ARSIP DIGITAL</h2>
            <p class="text-secondary mt-2 theme-transition">Pertamina Hulu Rokan</p>
        </div>

        <div class="login-card fade-in-up">
            <div class="login-card-header">
                <h3><i class="fas fa-user-shield me-2"></i> LOGIN ADMIN / PETUGAS</h3>
            </div>
            <div class="login-card-body">
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        echo "<div class='alert alert-danger animate__animated animate__headShake mb-4'><i class='fas fa-exclamation-triangle me-2'></i>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                        echo "<script>document.querySelector('.login-card').classList.add('shake');</script>";
                    }else if($_GET['alert'] == "logout"){
                        echo "<div class='alert alert-success animate__animated animate__fadeIn mb-4'><i class='fas fa-check-circle me-2'></i>ANDA TELAH BERHASIL LOGOUT</div>";
                    }else if($_GET['alert'] == "belum_login"){
                        echo "<div class='alert alert-warning animate__animated animate__fadeIn mb-4'><i class='fas fa-info-circle me-2'></i>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                    }
                }
                ?>

                <form action="periksa_login.php" method="POST" id="loginForm">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <label for="username"><i class="fas fa-user me-2"></i>Username</label>
                    </div>
                    
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                    </div>
                    
                    <div class="role-select-container">
                        <label class="form-select-label"><i class="fas fa-user-tag me-2"></i>Hak Akses</label>
                        <select class="form-select" name="akses" id="akses">
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </button>
                    
                    <div class="login-links">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">
                            <i class="fas fa-key me-1"></i>Lupa kata sandi?
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#helpModal">
                            <i class="fas fa-question-circle me-1"></i>Bantuan
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="login-footer slide-in-right">
            <a href="index.php" class="btn btn-sm btn-outline-secondary mb-3">
                <i class="fas fa-arrow-left me-1"></i>Kembali ke halaman utama
            </a>
            <p class="text-muted">Copyright © <?php echo date('Y') ?>. All rights reserved. <br>Sistem Informasi Arsip Digital (SIAD) - Pertamina Hulu Rokan</p>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Lupa Kata Sandi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-4 theme-transition">Masukkan email yang terdaftar. Kami akan mengirimkan instruksi untuk mereset kata sandi Anda.</p>
                    
                    <form action="reset_password.php" method="POST">
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="resetEmail" name="resetEmail" placeholder="Email" required>
                            <label for="resetEmail"><i class="fas fa-envelope me-2"></i>Email</label>
                        </div>
                        
                        <button type="submit" class="btn btn-login">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Instruksi Reset
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Help Modal -->
    <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="helpModalLabel">Panduan Penggunaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="help-item">
                        <h5><i class="fas fa-sign-in-alt help-icon"></i>Cara Login</h5>
                        <p>Masukkan username dan password yang telah diberikan oleh administrator sistem. Pilih hak akses sesuai dengan peran Anda.</p>
                    </div>
                    
                    <div class="help-item">
                        <h5><i class="fas fa-user-tag help-icon"></i>Pemilihan Hak Akses</h5>
                        <p>
                            <b>Admin:</b> Memiliki akses penuh ke semua fitur sistem.<br>
                            <b>Petugas:</b> Memiliki akses terbatas sesuai tugas yang diberikan.
                        </p>
                    </div>
                    
                    <div class="help-item">
                        <h5><i class="fas fa-key help-icon"></i>Lupa Kata Sandi</h5>
                        <p>Klik tombol "Lupa kata sandi?" dan masukkan email yang terdaftar. Instruksi reset password akan dikirim ke email tersebut.</p>
                    </div>
                    
                    <div class="help-item">
                        <h5><i class="fas fa-adjust help-icon"></i>Mode Terang/Gelap</h5>
                        <p>Anda dapat mengubah tampilan ke mode gelap dengan mengklik tombol bulan/matahari di pojok kanan atas layar.</p>
                    </div>
                    
                    <div class="help-item">
                        <h5><i class="fas fa-shield-alt help-icon"></i>Keamanan</h5>
                        <p>Pastikan Anda keluar (logout) setelah selesai menggunakan sistem, terutama jika menggunakan komputer publik.</p>
                    </div>
                    
                    <div class="help-item">
                        <h5><i class="fas fa-exclamation-triangle help-icon"></i>Masalah Akses</h5>
                        <p>Jika Anda mengalami masalah akses setelah beberapa kali percobaan, akun Anda mungkin terkunci. Hubungi administrator sistem untuk bantuan.</p>
                    </div>
                    
                    <div class="help-item">
                        <h5><i class="fas fa-phone help-icon"></i>Kontak Bantuan</h5>
                        <p>Untuk bantuan lebih lanjut, silakan hubungi:</p>
                        <ul>
                            <li>Email: support@pertaminahulurokan.co.id</li>
                            <li>Telepon: (0761) 123456</li>
                            <li>Jam Kerja: Senin-Jumat, 08.00-16.00 WIB</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Dark mode functionality
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        
        // Check for saved theme preference or use user's system preference
        const savedTheme = localStorage.getItem('theme') || 
                          (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        
        // Apply saved theme on page load
        if (savedTheme === 'dark') {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        }
        
        // Theme toggle button click handler
        themeToggle.addEventListener('click', () => {
            if (body.classList.contains('light-mode')) {
                body.classList.remove('light-mode');
                body.classList.add('dark-mode');
                themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            localStorage.setItem('theme', 'dark');
            
            // Add transition animation for switching to dark mode
            document.querySelectorAll('.login-card, .login-header h1, .login-header h2')
                .forEach(el => el.style.animation = 'fadeIn 0.5s');
        } else {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            localStorage.setItem('theme', 'light');
            
            // Add transition animation for switching to light mode
            document.querySelectorAll('.login-card, .login-header h1, .login-header h2')
                .forEach(el => el.style.animation = 'fadeIn 0.5s');
        }
        
        // Update theme-specific text colors
        document.querySelectorAll('.text-muted, .text-secondary').forEach(el => {
            el.style.transition = 'color 0.3s ease';
            if (body.classList.contains('dark-mode')) {
                el.style.color = '#adb5bd !important';
            } else {
                el.style.color = '';
            }
        });
    });
    
    // Add animation when page loads
    document.addEventListener('DOMContentLoaded', function() {
        // Stagger animations slightly
        setTimeout(() => {
            document.querySelector('.login-header').classList.add('animate__animated', 'animate__bounceIn');
        }, 100);
        
        setTimeout(() => {
            document.querySelector('.login-card').classList.add('animate__animated', 'animate__fadeInUp');
        }, 300);
        
        setTimeout(() => {
            document.querySelector('.login-footer').classList.add('animate__animated', 'animate__slideInRight');
        }, 500);
        
        // Password visibility toggle
        const passwordInput = document.getElementById('password');
        const togglePassword = document.createElement('button');
        togglePassword.type = 'button';
        togglePassword.className = 'btn btn-outline-secondary position-absolute end-0 top-50 translate-middle-y me-3';
        togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
        togglePassword.style.zIndex = '5';
        togglePassword.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                passwordInput.type = 'password';
                this.innerHTML = '<i class="fas fa-eye"></i>';
            }
        });
        
        const passwordContainer = passwordInput.parentElement;
        passwordContainer.style.position = 'relative';
        passwordContainer.appendChild(togglePassword);
        
        // Select element animation on change
        const roleSelect = document.getElementById('akses');
        roleSelect.addEventListener('change', function() {
            this.classList.add('animate__animated', 'animate__pulse');
            setTimeout(() => {
                this.classList.remove('animate__animated', 'animate__pulse');
            }, 1000);
        });
        
        // Form animation on submit
        const loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', function(e) {
            const loginBtn = document.querySelector('.btn-login');
            loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Logging in...';
            loginBtn.disabled = true;
            // No e.preventDefault() here to allow form submission
        });
        
        // Add additional styling to select element
        const roleSelectContainer = document.querySelector('.role-select-container');
        roleSelect.addEventListener('focus', function() {
            roleSelectContainer.style.boxShadow = '0 0 0 0.25rem rgba(0, 121, 83, 0.25)';
        });
        
        roleSelect.addEventListener('blur', function() {
            roleSelectContainer.style.boxShadow = 'none';
        });
        
        // Theme-specific styling for the select element
        const updateSelectStyling = () => {
            const isDarkMode = document.body.classList.contains('dark-mode');
            if (isDarkMode) {
                roleSelect.style.backgroundImage = `url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23adb5bd' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e")`;
            } else {
                roleSelect.style.backgroundImage = '';
            }
        };
        
        // Update select styling on theme change
        themeToggle.addEventListener('click', updateSelectStyling);
        
        // Initial styling update
        updateSelectStyling();
    });
    
    // Create dynamic floating shapes for background animation
    document.addEventListener('DOMContentLoaded', function() {
        const bgAnimation = document.querySelector('.bg-animation');
        for (let i = 0; i < 5; i++) {
            const size = Math.random() * 100 + 50;
            const shape = document.createElement('div');
            shape.className = 'floating-shape';
            shape.style.width = `${size}px`;
            shape.style.height = `${size}px`;
            shape.style.top = `${Math.random() * 100}%`;
            shape.style.left = `${Math.random() * 100}%`;
            shape.style.animationDelay = `${Math.random() * -15}s`;
            shape.style.animationDuration = `${Math.random() * 10 + 10}s`;
            bgAnimation.appendChild(shape);
        }
        
        // Add cool loading animation on page ready
        setTimeout(() => {
            const loadingOverlay = document.createElement('div');
            loadingOverlay.style.position = 'fixed';
            loadingOverlay.style.top = '0';
            loadingOverlay.style.left = '0';
            loadingOverlay.style.width = '100%';
            loadingOverlay.style.height = '100%';
            loadingOverlay.style.backgroundColor = 'var(--primary-color)';
            loadingOverlay.style.zIndex = '9999';
            loadingOverlay.style.display = 'flex';
            loadingOverlay.style.justifyContent = 'center';
            loadingOverlay.style.alignItems = 'center';
            loadingOverlay.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            
            const logo = document.createElement('img');
            logo.src = 'img/pertamina-logo.png';
            logo.alt = 'Pertamina Logo';
            logo.style.maxWidth = '150px';
            logo.style.animation = 'pulse 1.5s infinite';
            logo.onerror = function() {
                // If logo fails to load, show text instead
                loadingOverlay.innerHTML = '<h1 style="color: white; font-weight: bold;">PERTAMINA HULU ROKAN</h1>';
            };
            
            loadingOverlay.appendChild(logo);
            document.body.appendChild(loadingOverlay);
            
            // Add keyframes for pulse animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.1); }
                    100% { transform: scale(1); }
                }
            `;
            document.head.appendChild(style);
            
            // Remove loading overlay after 1.5 seconds
            setTimeout(() => {
                loadingOverlay.style.opacity = '0';
                loadingOverlay.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    loadingOverlay.remove();
                }, 500);
            }, 1500);
        }, 300);
    });
    
    // Additional accessibility features
    document.addEventListener('DOMContentLoaded', function() {
        // Add keyboard navigation enhancements
        const focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
        const modal = document.querySelector('.modal');
        
        document.addEventListener('keydown', function(e) {
            // Add escape key to close modals
            if (e.key === 'Escape' && modal && modal.classList.contains('show')) {
                const modalInstance = bootstrap.Modal.getInstance(modal);
                if (modalInstance) modalInstance.hide();
            }
            
            // Add dark mode toggle with keyboard shortcut Alt+T
            if (e.altKey && e.key === 't') {
                themeToggle.click();
            }
        });
    });
</script>