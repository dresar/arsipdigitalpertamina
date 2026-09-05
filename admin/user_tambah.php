<?php include 'header.php'; ?>

<!-- CSS tambahan untuk tampilan form -->
<style>
    /* Form styling */
    .form-panel {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        margin-bottom: 20px;
        overflow: hidden;
    }
    
    .form-panel .panel-heading {
        background: linear-gradient(to right, #4e73df, #224abe);
        color: white;
        padding: 15px 20px;
        border-bottom: none;
    }
    
    .form-panel .panel-title {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }
    
    .form-panel .panel-body {
        padding: 25px;
    }
    
    /* Form controls */
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        font-weight: 600;
        display: block;
        margin-bottom: 8px;
        color: #444;
    }
    
    .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #e3e6f0;
        box-shadow: none;
        transition: all 0.3s;
    }
    
    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }
    
    /* Alert boxes */
    .alert {
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        border: none;
    }
    
    .alert-info {
        background-color: rgba(78, 115, 223, 0.15);
        border-left: 4px solid #4e73df;
        color: #2e59d9;
    }
    
    .alert-warning {
        background-color: rgba(246, 194, 62, 0.15);
        border-left: 4px solid #f6c23e;
        color: #dda20a;
    }
    
    .alert-success {
        background-color: rgba(28, 200, 138, 0.15);
        border-left: 4px solid #1cc88a;
        color: #13855c;
    }
    
    .alert-danger {
        background-color: rgba(231, 74, 59, 0.15);
        border-left: 4px solid #e74a3b;
        color: #be2617;
    }
    
    .alert-icon {
        margin-right: 10px;
    }
    
    /* Buttons */
    .btn-back {
        background-color: #4e73df;
        border-color: #4e73df;
        color: white;
        border-radius: 20px;
        padding: 8px 15px;
        transition: all 0.3s;
    }
    
    .btn-back:hover {
        background-color: #2e59d9;
        border-color: #2e59d9;
        transform: translateY(-2px);
    }
    
    .btn-submit {
        background-color: #4e73df;
        border-color: #4e73df;
        color: white;
        border-radius: 20px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .btn-submit:hover {
        background-color: #2e59d9;
        border-color: #2e59d9;
        transform: translateY(-2px);
    }
    
    /* File upload */
    .file-upload {
        position: relative;
        display: inline-block;
        width: 100%;
    }
    
    .file-upload-label {
        background-color: #f8f9fc;
        border: 1px dashed #d1d3e2;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .file-upload-label:hover {
        background-color: #eaecf4;
    }
    
    .file-upload-icon {
        font-size: 24px;
        margin-bottom: 10px;
        color: #4e73df;
    }
    
    .file-upload-text {
        color: #6e707e;
    }
    
    .file-upload input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }
    
    .file-hint {
        margin-top: 8px;
        font-size: 12px;
        color: #858796;
    }
    
    /* Password strength meter */
    .password-strength {
        height: 5px;
        margin-top: 5px;
        border-radius: 5px;
        background-color: #e3e6f0;
        overflow: hidden;
    }
    
    .password-strength-bar {
        height: 100%;
        width: 0;
        transition: width 0.3s, background-color 0.3s;
    }
    
    .password-hint {
        margin-top: 8px;
        font-size: 12px;
        color: #858796;
    }
    
    /* Input validation */
    .is-valid {
        border-color: #1cc88a;
    }
    
    .is-invalid {
        border-color: #e74a3b;
    }
    
    .invalid-feedback {
        color: #e74a3b;
        font-size: 12px;
        margin-top: 5px;
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
                                <h4 style="margin-bottom: 0px">Tambah User</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><a href="user.php">User</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Tambah</span></li>
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
        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
            <!-- Info Alert -->
            <div class="alert alert-info">
                <i class="fa fa-info-circle alert-icon"></i> Silahkan isi semua informasi yang diperlukan untuk menambahkan user baru ke sistem.
            </div>
            
            <!-- Form Panel -->
            <div class="form-panel panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user-plus"></i> Form Tambah User</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">            
                        <a href="user.php" class="btn btn-back">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                    <br>
                    <br>
                    
                    <!-- Warning Alert -->
                    <div class="alert alert-warning">
                        <i class="fa fa-exclamation-triangle alert-icon"></i> Pastikan username yang dimasukkan belum pernah digunakan sebelumnya.
                    </div>

                    <?php
                    // Tampilkan pesan error jika ada
                    if(isset($_GET['error'])) {
                        echo '<div class="alert alert-danger">
                                <i class="fa fa-times-circle alert-icon"></i> '.$_GET['error'].'
                              </div>';
                    }
                    
                    // Tampilkan pesan sukses jika ada
                    if(isset($_GET['success'])) {
                        echo '<div class="alert alert-success">
                                <i class="fa fa-check-circle alert-icon"></i> '.$_GET['success'].'
                              </div>';
                    }
                    ?>

                    <form method="post" action="user_aksi.php" enctype="multipart/form-data" id="formTambahUser">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" required="required" placeholder="Masukkan nama lengkap">
                            <div class="invalid-feedback" id="namaFeedback"></div>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" id="username" required="required" placeholder="Masukkan username">
                            <div class="invalid-feedback" id="usernameFeedback"></div>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password" required="required" placeholder="Masukkan password">
                            <div class="password-strength">
                                <div class="password-strength-bar" id="passwordStrength"></div>
                            </div>
                            <div class="password-hint">
                                * Password harus minimal 8 karakter dengan kombinasi huruf dan angka
                            </div>
                            <div class="invalid-feedback" id="passwordFeedback"></div>
                        </div>

                        <div class="form-group">
                            <label>Foto (Opsional)</label>
                            <div class="file-upload">
                                <div class="file-upload-label">
                                    <div class="file-upload-icon">
                                        <i class="fa fa-cloud-upload"></i>
                                    </div>
                                    <div class="file-upload-text" id="fileUploadText">
                                        Pilih file atau seret ke sini
                                    </div>
                                    <input type="file" name="foto" id="foto" onchange="updateFileName(this)">
                                </div>
                            </div>
                            <div class="file-hint">
                                * Format file yang diizinkan: JPG, PNG, GIF (maks. 2MB)
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-submit">
                                <i class="fa fa-save"></i> Simpan User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Kolom informasi tambahan -->
        <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
            <div class="form-panel panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-info-circle"></i> Informasi</h3>
                </div>
                <div class="panel-body">
                    <div class="alert alert-success">
                        <i class="fa fa-lightbulb-o alert-icon"></i> <strong>Tips!</strong> User yang ditambahkan akan langsung dapat mengakses sistem arsip.
                    </div>
                    
                    <h4><i class="fa fa-file-text-o"></i> Petunjuk Pengisian</h4>
                    <ul>
                        <li>Isi semua field yang bertanda (*) wajib</li>
                        <li>Nama lengkap akan ditampilkan pada sistem</li>
                        <li>Username akan digunakan untuk login</li>
                        <li>Password minimal 8 karakter</li>
                        <li>Foto tidak wajib diisi</li>
                    </ul>
                    
                    <h4><i class="fa fa-shield"></i> Hak Akses User</h4>
                    <p>User memiliki akses untuk:</p>
                    <ul>
                        <li>Mencari arsip</li>
                        <li>Mengunduh arsip</li>
                        <li>Melihat riwayat unduhan</li>
                        <li>Mengubah profil pribadi</li>
                    </ul>
                    
                    <div class="alert alert-info">
                        <i class="fa fa-question-circle alert-icon"></i> <strong>Bantuan:</strong> Jika user lupa password, admin dapat mengatur ulang password melalui menu edit user.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk validasi form -->
<script>
// Function untuk update nama file
function updateFileName(input) {
    const fileName = input.files[0] ? input.files[0].name : 'Pilih file atau seret ke sini';
    document.getElementById('fileUploadText').textContent = fileName;
}

// Event listener saat dokumen siap
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formTambahUser');
    const namaInput = document.getElementById('nama');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const passwordStrength = document.getElementById('passwordStrength');
    
    // Validasi nama
    namaInput.addEventListener('input', function() {
        if(this.value.length < 3) {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
            document.getElementById('namaFeedback').textContent = 'Nama harus minimal 3 karakter';
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            document.getElementById('namaFeedback').textContent = '';
        }
    });
    
    // Validasi username
    usernameInput.addEventListener('input', function() {
        if(this.value.length < 5) {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
            document.getElementById('usernameFeedback').textContent = 'Username harus minimal 5 karakter';
        } else if(!/^[a-zA-Z0-9_]+$/.test(this.value)) {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
            document.getElementById('usernameFeedback').textContent = 'Username hanya boleh huruf, angka dan underscore';
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            document.getElementById('usernameFeedback').textContent = '';
        }
    });
    
    // Validasi password dan meter kekuatan
    passwordInput.addEventListener('input', function() {
        let strength = 0;
        const password = this.value;
        
        // Kalkulasi kekuatan password
        if(password.length >= 8) strength += 25;
        if(/[A-Z]/.test(password)) strength += 25;
        if(/[0-9]/.test(password)) strength += 25;
        if(/[^A-Za-z0-9]/.test(password)) strength += 25;
        
        // Update meter kekuatan
        passwordStrength.style.width = strength + '%';
        
        // Set warna berdasarkan kekuatan
        if(strength < 25) {
            passwordStrength.style.backgroundColor = '#e74a3b'; // Merah
        } else if(strength < 50) {
            passwordStrength.style.backgroundColor = '#f6c23e'; // Kuning
        } else if(strength < 75) {
            passwordStrength.style.backgroundColor = '#36b9cc'; // Biru
        } else {
            passwordStrength.style.backgroundColor = '#1cc88a'; // Hijau
        }
        
        // Validasi
        if(password.length < 8) {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
            document.getElementById('passwordFeedback').textContent = 'Password harus minimal 8 karakter';
        } else if(!/[0-9]/.test(password) || !/[a-zA-Z]/.test(password)) {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
            document.getElementById('passwordFeedback').textContent = 'Password harus mengandung huruf dan angka';
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            document.getElementById('passwordFeedback').textContent = '';
        }
    });
    
    // Validasi form sebelum submit
    form.addEventListener('submit', function(event) {
        let isValid = true;
        
        // Validasi nama
        if(namaInput.value.length < 3) {
            namaInput.classList.add('is-invalid');
            document.getElementById('namaFeedback').textContent = 'Nama harus minimal 3 karakter';
            isValid = false;
        }
        
        // Validasi username
        if(usernameInput.value.length < 5 || !/^[a-zA-Z0-9_]+$/.test(usernameInput.value)) {
            usernameInput.classList.add('is-invalid');
            document.getElementById('usernameFeedback').textContent = 'Username tidak valid';
            isValid = false;
        }
        
        // Validasi password
        if(passwordInput.value.length < 8 || !/[0-9]/.test(passwordInput.value) || !/[a-zA-Z]/.test(passwordInput.value)) {
            passwordInput.classList.add('is-invalid');
            document.getElementById('passwordFeedback').textContent = 'Password tidak memenuhi syarat';
            isValid = false;
        }
        
        if(!isValid) {
            event.preventDefault();
            alert('Form tidak valid! Silakan periksa kembali data yang dimasukkan.');
        }
    });
});
</script>

<?php include 'footer.php'; ?>