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
    
    /* Upload panel styling */
    .upload-panel {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        border: none;
        margin-bottom: 30px;
        overflow: hidden;
    }
    
    .upload-panel .panel-heading {
        background: #3498db;
        color: white;
        padding: 15px 20px;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
    }
    
    .upload-panel .panel-heading i {
        margin-right: 10px;
        font-size: 18px;
    }
    
    .upload-panel .panel-title {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }
    
    .upload-panel .panel-body {
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
        padding: 10px 15px;
        border: 1px solid #e9ecef;
        border-radius: 4px;
        box-shadow: none;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        outline: none;
    }
    
    textarea.form-control {
        min-height: 100px;
    }
    
    /* Button styling */
    .btn-back {
        color: #7f8c8d;
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
        padding: 6px 12px;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }
    
    .btn-back i {
        margin-right: 5px;
    }
    
    .btn-back:hover {
        background-color: #ecf0f1;
    }
    
    .btn-upload {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }
    
    .btn-upload i {
        margin-right: 8px;
    }
    
    .btn-upload:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* File upload styling */
    .file-upload-container {
        position: relative;
        overflow: hidden;
        margin-bottom: 10px;
    }
    
    .file-upload-input {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
        height: 100%;
        width: 100%;
    }
    
    .file-upload-btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #3498db;
        color: white;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .file-upload-btn:hover {
        background-color: #2980b9;
    }
    
    .file-upload-text {
        margin-left: 10px;
        color: #7f8c8d;
        font-size: 14px;
    }
    
    .file-name-display {
        margin-top: 10px;
        padding: 8px 12px;
        background-color: #f8f9fa;
        border-radius: 4px;
        color: #34495e;
        display: none;
    }
    
    .file-name-display i {
        margin-right: 5px;
        color: #3498db;
    }
    
    /* Upload guidelines */
    .upload-guidelines {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 25px;
        border-left: 4px solid #3498db;
    }
    
    .guidelines-header {
        color: #2c3e50;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    
    .guidelines-header i {
        margin-right: 8px;
        color: #3498db;
    }
    
    .guidelines-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .guidelines-item {
        display: flex;
        margin-bottom: 12px;
    }
    
    .guidelines-item:last-child {
        margin-bottom: 0;
    }
    
    .guidelines-icon {
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
    
    .guidelines-text {
        flex-grow: 1;
        font-size: 14px;
        color: #7f8c8d;
    }
    
    .guidelines-text strong {
        color: #34495e;
    }
    
    /* File type restrictions */
    .file-restrictions {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #e9ecef;
    }
    
    .file-restrictions h5 {
        font-weight: 600;
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 15px;
    }
    
    .file-types {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
    }
    
    .file-type {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
        color: white;
    }
    
    .file-type-document {
        background-color: #3498db;
    }
    
    .file-type-spreadsheet {
        background-color: #2ecc71;
    }
    
    .file-type-image {
        background-color: #9b59b6;
    }
    
    .file-type-pdf {
        background-color: #e74c3c;
    }
    
    .file-limit-warning {
        font-size: 13px;
        color: #e74c3c;
        margin-top: 10px;
        display: flex;
        align-items: center;
    }
    
    .file-limit-warning i {
        margin-right: 5px;
    }
    
    /* Helper text */
    .help-text {
        font-size: 12px;
        color: #7f8c8d;
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
                                <h4 style="margin-bottom: 0px"><i class="fa fa-cloud-upload"></i> Upload Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php">Home</a> <span class="bread-slash">/</span></li>
                                <li><a href="arsip.php">Arsip</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Upload</span></li>
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
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Upload Guidelines -->
            <div class="upload-guidelines">
                <h4 class="guidelines-header"><i class="fa fa-lightbulb-o"></i> Panduan Upload Arsip</h4>
                
                <ul class="guidelines-list">
                    <li class="guidelines-item">
                        <div class="guidelines-icon">1</div>
                        <div class="guidelines-text">
                            <strong>Kode Arsip:</strong> Gunakan format yang konsisten (misalnya: ARS-2024-001) untuk memudahkan pengindeksan.
                        </div>
                    </li>
                    <li class="guidelines-item">
                        <div class="guidelines-icon">2</div>
                        <div class="guidelines-text">
                            <strong>Nama Arsip:</strong> Gunakan nama yang jelas dan deskriptif. Hindari penggunaan nama yang terlalu umum.
                        </div>
                    </li>
                    <li class="guidelines-item">
                        <div class="guidelines-icon">3</div>
                        <div class="guidelines-text">
                            <strong>Pilih Kategori:</strong> Pastikan memilih kategori yang sesuai dengan jenis arsip untuk memudahkan pencarian.
                        </div>
                    </li>
                    <li class="guidelines-item">
                        <div class="guidelines-icon">4</div>
                        <div class="guidelines-text">
                            <strong>Keterangan:</strong> Berikan deskripsi yang lengkap tentang isi dokumen, termasuk kata kunci penting.
                        </div>
                    </li>
                    <li class="guidelines-item">
                        <div class="guidelines-icon">5</div>
                        <div class="guidelines-text">
                            <strong>File:</strong> Pilih file yang ingin diupload. Pastikan file yang diupload tidak mengandung virus dan sesuai dengan ketentuan.
                        </div>
                    </li>
                </ul>
                
                <div class="file-restrictions">
                    <h5>Jenis File yang Didukung:</h5>
                    <div class="file-types">
                        <span class="file-type file-type-document">DOC/DOCX</span>
                        <span class="file-type file-type-spreadsheet">XLS/XLSX</span>
                        <span class="file-type file-type-pdf">PDF</span>
                        <span class="file-type file-type-image">JPG/JPEG</span>
                        <span class="file-type file-type-image">PNG</span>
                        <span class="file-type file-type-image">GIF</span>
                    </div>
                    
                    <p style="font-size: 14px; color: #7f8c8d; margin-bottom: 10px;">
                        <i class="fa fa-info-circle" style="color: #3498db;"></i> Ukuran file maksimal: <strong>10MB</strong> per file.
                    </p>
                    
                    <div class="file-limit-warning">
                        <i class="fa fa-exclamation-triangle"></i> File dengan ekstensi .php, .js, .exe dan file berbahaya lainnya tidak diperbolehkan untuk alasan keamanan.
                    </div>
                </div>
            </div>
            
            <div class="panel upload-panel">
                <div class="panel-heading">
                    <i class="fa fa-file-text"></i>
                    <h3 class="panel-title">Form Upload Arsip</h3>
                </div>
                <div class="panel-body">
                    <div class="text-right mb-3">            
                        <a href="arsip.php" class="btn btn-back">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                    <form method="post" action="arsip_aksi.php" enctype="multipart/form-data" id="uploadForm">
                        <div class="form-group">
                            <label for="kode">Kode Arsip</label>
                            <input type="text" class="form-control" name="kode" id="kode" required="required" placeholder="Masukkan kode arsip (contoh: ARS-2024-001)">
                            <div class="help-text">Gunakan format yang konsisten untuk memudahkan pencarian.</div>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Arsip</label>
                            <input type="text" class="form-control" name="nama" id="nama" required="required" placeholder="Masukkan nama arsip yang deskriptif">
                            <div class="help-text">Gunakan nama yang jelas menggambarkan isi dokumen.</div>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori" required="required">
                                <option value="">Pilih kategori</option>
                                <?php 
                                $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                                while($k = mysqli_fetch_array($kategori)){
                                    ?>
                                    <option value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                                    <?php 
                                }
                                ?>
                            </select>
                            <div class="help-text">Pilih kategori yang paling sesuai dengan jenis dokumen.</div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" required="required" placeholder="Berikan deskripsi lengkap tentang isi arsip..."></textarea>
                            <div class="help-text">Sertakan informasi penting dan kata kunci untuk memudahkan pencarian.</div>
                        </div>

                        <div class="form-group">
                            <label>File</label>
                            <div class="file-upload-container">
                                <div class="file-upload-btn">
                                    <i class="fa fa-folder-open"></i> Pilih File
                                </div>
                                <input type="file" name="file" id="fileUpload" class="file-upload-input" required>
                                <span class="file-upload-text">Belum ada file yang dipilih</span>
                            </div>
                            <div class="file-name-display" id="fileNameDisplay">
                                <i class="fa fa-file"></i> <span id="fileName"></span>
                            </div>
                            <div class="help-text">Format yang didukung: PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, PNG, GIF. Maks 10MB.</div>
                        </div>

                        <div class="form-group" style="margin-top: 25px;">
                            <button type="submit" class="btn btn-upload">
                                <i class="fa fa-cloud-upload"></i> Upload Arsip
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// File upload preview
document.getElementById('fileUpload').addEventListener('change', function(e) {
    var fileName = e.target.files[0] ? e.target.files[0].name : 'Belum ada file yang dipilih';
    var fileSize = e.target.files[0] ? (e.target.files[0].size / 1024 / 1024).toFixed(2) : 0;
    
    document.querySelector('.file-upload-text').textContent = fileName;
    
    var fileNameDisplay = document.getElementById('fileNameDisplay');
    var fileNameSpan = document.getElementById('fileName');
    
    if (e.target.files[0]) {
        // Get file extension
        var fileExt = fileName.split('.').pop().toLowerCase();
        var iconClass = 'fa-file';
        
        // Set appropriate icon based on file type
        if (['pdf'].includes(fileExt)) {
            iconClass = 'fa-file-pdf-o';
        } else if (['doc', 'docx'].includes(fileExt)) {
            iconClass = 'fa-file-word-o';
        } else if (['xls', 'xlsx'].includes(fileExt)) {
            iconClass = 'fa-file-excel-o';
        } else if (['jpg', 'jpeg', 'png', 'gif'].includes(fileExt)) {
            iconClass = 'fa-file-image-o';
        }
        
        // Update icon
        fileNameDisplay.querySelector('i').className = 'fa ' + iconClass;
        
        // Update filename and size
        fileNameSpan.textContent = fileName + ' (' + fileSize + ' MB)';
        
        // Show the file name display
        fileNameDisplay.style.display = 'block';
        
        // Check file size
        if (fileSize > 10) {
            alert('File terlalu besar! Ukuran maksimal adalah 10MB.');
            this.value = '';
            fileNameDisplay.style.display = 'none';
            document.querySelector('.file-upload-text').textContent = 'Belum ada file yang dipilih';
        }
        
        // Check file extension
        var allowedExts = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'jpg', 'jpeg', 'png', 'gif'];
        if (!allowedExts.includes(fileExt)) {
            alert('Format file tidak didukung! Gunakan format: PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, PNG, GIF.');
            this.value = '';
            fileNameDisplay.style.display = 'none';
            document.querySelector('.file-upload-text').textContent = 'Belum ada file yang dipilih';
        }
    } else {
        fileNameDisplay.style.display = 'none';
    }
});

// Form validation
document.getElementById('uploadForm').addEventListener('submit', function(e) {
    var kode = document.getElementById('kode').value;
    var nama = document.getElementById('nama').value;
    var kategori = document.getElementById('kategori').value;
    var keterangan = document.getElementById('keterangan').value;
    var file = document.getElementById('fileUpload').value;
    
    if (kode.trim() === '' || nama.trim() === '' || kategori === '' || keterangan.trim() === '' || file === '') {
        e.preventDefault();
        alert('Semua field wajib diisi!');
    }
});
</script>

<?php include 'footer.php'; ?>