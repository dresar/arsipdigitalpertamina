<?php include 'header.php'; ?>

<!-- CSS Kustom untuk halaman ini -->
<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border: none;
        margin-bottom: 30px;
        transition: transform 0.3s;
    }
    
    .card:hover {
        transform: translateY(-5px);
    }
    
    .card-header {
        background: linear-gradient(to right, #4e73df, #36b9cc);
        color: white;
        border-radius: 10px 10px 0 0 !important;
        padding: 18px 25px;
    }
    
    .breadcome-area {
        background-color: #f8f9fc;
        padding: 20px 0;
        margin-bottom: 30px;
        border-bottom: 1px solid #e3e6f0;
    }
    
    .btn-primary {
        background: linear-gradient(to right, #4e73df, #224abe);
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        box-shadow: 0 4px 10px rgba(78, 115, 223, 0.4);
        transition: all 0.3s;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(78, 115, 223, 0.5);
    }
    
    .table-container {
        border-radius: 8px;
        overflow: hidden;
    }
    
    .table-datatable {
        border-collapse: separate;
        border-spacing: 0;
    }
    
    .table-datatable thead th {
        background-color: #f8f9fc;
        border-bottom: 2px solid #e3e6f0;
        color: #4e73df;
        font-weight: 600;
        padding: 15px;
    }
    
    .table-datatable tbody tr:hover {
        background-color: #f8f9fc;
    }
    
    .table-datatable tbody td {
        padding: 15px;
        vertical-align: middle;
    }
    
    .btn-action {
        border-radius: 5px;
        padding: 6px 10px;
        margin: 0 3px;
        transition: all 0.2s;
    }
    
    .btn-edit {
        background-color: #36b9cc;
        color: white;
        border: none;
    }
    
    .btn-edit:hover {
        background-color: #2c9faf;
        color: white;
    }
    
    .btn-delete {
        background-color: #e74a3b;
        color: white;
        border: none;
    }
    
    .btn-delete:hover {
        background-color: #d52a1a;
        color: white;
    }
    
    .empty-state {
        text-align: center;
        padding: 40px 0;
        color: #6c757d;
    }
    
    .badge-count {
        background: #4e73df;
        color: white;
        font-size: 14px;
        font-weight: 600;
        border-radius: 30px;
        padding: 5px 15px;
        display: inline-block;
        margin-left: 10px;
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
                                <h3 style="margin-bottom: 0px">Data Kategori</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Kategori</span></li>
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-0">
                        Data Kategori
                        <?php 
                        include '../koneksi.php';
                        $kategori_count = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM kategori"));
                        ?>
                        <span class="badge-count"><?php echo $kategori_count; ?></span>
                    </h5>
                    <a href="kategori_tambah.php" class="btn btn-primary"><i class="fa fa-plus mr-2"></i> Tambah Kategori</a>
                </div>
                <div class="card-body">
                    <div class="table-container">
                        <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                            <thead>
                                <tr>
                                    <th width="5%" class="text-center">No</th>
                                    <th width="35%">Nama Kategori</th>
                                    <th width="40%">Keterangan</th>
                                    <th class="text-center" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include '../koneksi.php';
                                $no = 1;
                                $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                                
                                if(mysqli_num_rows($kategori) > 0) {
                                    while($p = mysqli_fetch_array($kategori)){
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td><strong><?php echo $p['kategori_nama'] ?></strong></td>
                                            <td><?php echo $p['kategori_keterangan'] ?></td>
                                            <td class="text-center">
                                                <?php 
                                                if($p['kategori_id'] != 1){
                                                    ?>
                                                    <div class="btn-group">
                                                        <a href="kategori_edit.php?id=<?php echo $p['kategori_id']; ?>" class="btn btn-action btn-edit" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="kategori_hapus.php?id=<?php echo $p['kategori_id']; ?>" class="btn btn-action btn-delete" data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin ingin menghapus kategori ini?')"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                    <?php
                                                } else {
                                                    echo '<span class="text-muted"><i>Kategori Default</i></span>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php 
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="4" class="empty-state">
                                            <i class="fa fa-folder-open-o fa-3x mb-3"></i>
                                            <h5>Belum ada data kategori</h5>
                                            <p>Silahkan tambahkan kategori baru untuk memulai</p>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk mengaktifkan tooltip -->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    
    // Tambahkan animasi sederhana saat halaman dimuat
    $(".card").css("opacity", 0).animate({
        opacity: 1
    }, 500);
    
    // Perbaikan untuk DataTable
    $('#table').DataTable({
        responsive: true,
        language: {
            search: "<i class='fa fa-search'></i>",
            searchPlaceholder: "Cari kategori...",
            emptyTable: "Belum ada data kategori",
            zeroRecords: "Tidak ditemukan data yang sesuai",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ kategori",
            infoEmpty: "Menampilkan 0 sampai 0 dari 0 kategori",
            infoFiltered: "(disaring dari _MAX_ kategori)",
            paginate: {
                first: "<i class='fa fa-angle-double-left'></i>",
                last: "<i class='fa fa-angle-double-right'></i>",
                previous: "<i class='fa fa-angle-left'></i>",
                next: "<i class='fa fa-angle-right'></i>"
            }
        }
    });
});
</script>

<?php include 'footer.php'; ?>