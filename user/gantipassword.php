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
    
    /* Password panel styling */
    .password-panel {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        margin-bottom: 30px;
        overflow: hidden;
        border: none;
    }
    
    .password-panel .panel-heading {
        background: #3498db;
        color: white;
        padding: 15px 20px;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
    }
    
    .password-panel .panel-heading i {
        margin-right: 10px;
        font-size: 18px;
    }
    
    .password-panel .panel-title {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }
    
    .password-panel .panel-body {
        padding: 25px;
    }
    
    /* Form styling */
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        font-weight: 600;
        color: #34495e;
        margin-bottom: 8px;
        display: block;
    }
    
    .form-control {
        height: auto;
        padding: 12px 15px;
        border: 1px solid #e9ecef;
        border-radius: 6px;
        box-shadow: none;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        outline: none;
    }
    
    .password-input-group {
        position: relative;
    }
    
    .toggle-password {
        position: absolute;
        right: 15px;
        top: 12px;
        cursor: pointer;
        color: #7f8c8d;
    }
    
    /* Button styling */
    .btn-save {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-save:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* Alert styling */
    .alert {
        border-radius: 6px;
        padding: 15px;
        margin-bottom: 20px;
        border: none;
        font-weight: 500;
    }
    
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-left: 4px solid #28a745;
    }
    
    .alert-warning {
        background-color: #fff3cd;
        color: #856404;
        border-left: 4px solid #ffc107;
    }
    
    /* Password guidelines */
    .password-guidelines {
        background-color: #f8f9fa;
        border-left: 4px solid #3498db;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 6px;
    }
    
    .password-guidelines h5 {
        color: #2c3e50;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 10px;
    }
    
    .password-guidelines ul {
        padding-left: 20px;
        margin-bottom: 0;
    }
    
    .password-guidelines li {
        margin-bottom: 5px;
        font-size: 14px;
        color: #34495e;
    }
    
    /* Password strength meter */
    .password-strength {
        margin-top: 10px;
    }
    
    .strength-meter {
        height: 5px;
        background-color: #ecf0f1;
        margin: 10px 0;
        border-radius: 3px;
        position: relative;
        overflow: hidden;
    }
    
    .strength-meter-fill {
        height: 100%;
        border-radius: 3px;
        transition: all 0.3s ease;
        width: 0;
    }
    
    .strength-text {
        font-size: 12px;
        font-weight: 600;
    }
    
    .strength-weak {
        color: #e74c3c;
    }
    
    .strength-medium {
        color: #f39c12;
    }
    
    .strength-strong {
        color: #2ecc71;
    }
    
    /* Security warning */
    .security-warning {
        background-color: #fef8e8;
        border-left: 4px solid #f39c12;
        padding: 15px;
        margin-top: 20px;
        border-radius: 6px;
    }
    
    .security-warning h5 {
        color: #f39c12;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    
    .security-warning h5 i {
        margin-right: 8px;
    }
    
    .security-warning p {
        margin-bottom: 0;
        font-size: 14px;
        color: #7f8c8d;
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
                                <h4 style="margin-bottom: 0px"><i class="fa fa-lock"></i> Ganti Password</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Ganti Password</span></li>
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
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="panel password-panel">
                <div class="panel-heading">
                    <i class="fa fa-key"></i>
                    <h3 class="panel-title">Ganti Password</h3>
                </div>

                <div class="panel-body">
                    <?php 
                    if(isset($_GET['alert'])){
                        if($_GET['alert'] == "sukses"){
                            echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> Password Anda berhasil diganti! Gunakan password baru Anda untuk login berikutnya.</div>";
                        }
                    }
                    ?>

                    <div class="password-guidelines">
                        <h5><i class="fa fa-info-circle"></i> Panduan Membuat Password</h5>
                        <ul>
                            <li>Gunakan minimal 8 karakter</li>
                            <li>Kombinasikan huruf besar dan huruf kecil</li>
                            <li>Tambahkan angka</li>
                            <li>Gunakan karakter khusus (seperti !@#$%^&*)</li>
                            <li>Hindari menggunakan informasi pribadi seperti nama atau tanggal lahir</li>
                            <li>Jangan gunakan password yang sama untuk banyak akun</li>
                        </ul>
                    </div>

                    <form action="gantipassword_act.php" method="post" id="passwordForm">
                        <div class="form-group">
                            <label>Password Lama</label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" placeholder="Masukkan password lama Anda" name="password_lama" required="required" id="oldPassword">
                                <span class="toggle-password" onclick="togglePassword('oldPassword')">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Password Baru</label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" placeholder="Masukkan password baru" name="password" required="required" minlength="8" id="newPassword" oninput="checkPasswordStrength()">
                                <span class="toggle-password" onclick="togglePassword('newPassword')">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>
                            
                            <div class="password-strength">
                                <div class="strength-meter">
                                    <div class="strength-meter-fill" id="strengthMeter"></div>
                                </div>
                                <div class="strength-text" id="strengthText">Kekuatan password: Belum dimasukkan</div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Konfirmasi Password Baru</label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" placeholder="Masukkan ulang password baru" name="password_confirm" required="required" id="confirmPassword" oninput="checkPasswordMatch()">
                                <span class="toggle-password" onclick="togglePassword('confirmPassword')">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>
                            <div id="passwordMatch" style="margin-top: 5px; font-size: 12px;"></div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-save">
                                <i class="fa fa-check"></i> Simpan Password
                            </button>
                        </div>
                    </form>

                    <div class="security-warning">
                        <h5><i class="fa fa-exclamation-triangle"></i> Peringatan Keamanan</h5>
                        <p>Jangan pernah membagikan password Anda kepada siapapun, termasuk administrator sistem. Ganti password Anda secara berkala (setiap 3 bulan) untuk keamanan yang lebih baik. Pastikan untuk keluar (logout) dari sistem jika menggunakan perangkat publik.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="panel password-panel">
                <div class="panel-heading">
                    <i class="fa fa-shield"></i>
                    <h3 class="panel-title">Tips Keamanan Akun</h3>
                </div>

                <div class="panel-body">
                    <div style="margin-bottom: 20px;">
                        <h5 style="font-weight: 600; color: #2c3e50;"><i class="fa fa-check-circle" style="color: #2ecc71;"></i> Praktik Terbaik Keamanan Password</h5>
                        <p style="color: #7f8c8d; font-size: 14px;">Berikut adalah beberapa praktik terbaik yang dapat membantu Anda menjaga keamanan akun:</p>
                        
                        <div style="background-color: #f8f9fa; padding: 15px; border-radius: 6px; margin-top: 15px;">
                            <div style="margin-bottom: 15px;">
                                <div style="font-weight: 600; color: #2c3e50; margin-bottom: 5px;">1. Gunakan Password Manager</div>
                                <p style="color: #7f8c8d; font-size: 14px; margin-bottom: 0;">Password manager dapat membantu Anda menyimpan dan menghasilkan password yang kuat dan unik untuk setiap akun.</p>
                            </div>
                            
                            <div style="margin-bottom: 15px;">
                                <div style="font-weight: 600; color: #2c3e50; margin-bottom: 5px;">2. Aktifkan Autentikasi Dua Faktor (jika tersedia)</div>
                                <p style="color: #7f8c8d; font-size: 14px; margin-bottom: 0;">Autentikasi dua faktor menambahkan lapisan keamanan ekstra dengan memerlukan verifikasi tambahan selain password.</p>
                            </div>
                            
                            <div style="margin-bottom: 15px;">
                                <div style="font-weight: 600; color: #2c3e50; margin-bottom: 5px;">3. Verifikasi Aktivitas Login</div>
                                <p style="color: #7f8c8d; font-size: 14px; margin-bottom: 0;">Periksa secara teratur riwayat login Anda untuk memastikan tidak ada aktivitas mencurigakan.</p>
                            </div>
                            
                            <div>
                                <div style="font-weight: 600; color: #2c3e50; margin-bottom: 5px;">4. Jangan Gunakan Komputer Publik</div>
                                <p style="color: #7f8c8d; font-size: 14px; margin-bottom: 0;">Hindari login ke akun Anda dari komputer publik atau jaringan Wi-Fi yang tidak aman.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div style="background-color: #e8f4f8; border-left: 4px solid #3498db; padding: 15px; border-radius: 6px;">
                        <h5 style="font-weight: 600; color: #2c3e50; margin-top: 0;"><i class="fa fa-question-circle"></i> Butuh Bantuan?</h5>
                        <p style="color: #7f8c8d; font-size: 14px; margin-bottom: 10px;">Jika Anda mengalami kesulitan mengganti password atau tidak dapat mengakses akun Anda, silakan hubungi administrator sistem.</p>
                        <a href="#" class="btn btn-sm btn-info">
                            <i class="fa fa-envelope"></i> Hubungi Admin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Toggle password visibility
function togglePassword(inputId) {
    const passwordInput = document.getElementById(inputId);
    const toggleIcon = passwordInput.nextElementSibling.querySelector('i');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.className = 'fa fa-eye';
    } else {
        passwordInput.type = 'password';
        toggleIcon.className = 'fa fa-eye-slash';
    }
}

// Check password strength
function checkPasswordStrength() {
    const password = document.getElementById('newPassword').value;
    const meter = document.getElementById('strengthMeter');
    const text = document.getElementById('strengthText');
    
    // Reset
    meter.style.width = '0%';
    
    if (password.length === 0) {
        text.innerHTML = 'Kekuatan password: Belum dimasukkan';
        text.className = 'strength-text';
        return;
    }
    
    // Check strength
    let strength = 0;
    
    // Length check
    if (password.length >= 8) {
        strength += 1;
    }
    
    // Uppercase check
    if (/[A-Z]/.test(password)) {
        strength += 1;
    }
    
    // Lowercase check
    if (/[a-z]/.test(password)) {
        strength += 1;
    }
    
    // Number check
    if (/[0-9]/.test(password)) {
        strength += 1;
    }
    
    // Special character check
    if (/[^A-Za-z0-9]/.test(password)) {
        strength += 1;
    }
    
    // Update meter and text
    if (strength < 2) {
        meter.style.width = '33%';
        meter.style.backgroundColor = '#e74c3c';
        text.innerHTML = 'Kekuatan password: Lemah';
        text.className = 'strength-text strength-weak';
    } else if (strength < 4) {
        meter.style.width = '66%';
        meter.style.backgroundColor = '#f39c12';
        text.innerHTML = 'Kekuatan password: Sedang';
        text.className = 'strength-text strength-medium';
    } else {
        meter.style.width = '100%';
        meter.style.backgroundColor = '#2ecc71';
        text.innerHTML = 'Kekuatan password: Kuat';
        text.className = 'strength-text strength-strong';
    }
}

// Check if passwords match
function checkPasswordMatch() {
    const password = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const matchText = document.getElementById('passwordMatch');
    
    if (confirmPassword.length === 0) {
        matchText.innerHTML = '';
        return;
    }
    
    if (password === confirmPassword) {
        matchText.innerHTML = '<i class="fa fa-check-circle"></i> Password cocok';
        matchText.style.color = '#2ecc71';
    } else {
        matchText.innerHTML = '<i class="fa fa-times-circle"></i> Password tidak cocok';
        matchText.style.color = '#e74c3c';
    }
}

// Form validation
document.getElementById('passwordForm').addEventListener('submit', function(e) {
    const password = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    if (password !== confirmPassword) {
        e.preventDefault();
        alert('Password baru dan konfirmasi password tidak cocok. Silakan periksa kembali.');
    }
});
</script>

<?php include 'footer.php'; ?>