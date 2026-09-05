<?php include 'header.php'; ?>

<!-- Custom CSS untuk Tampilan User - Hanya CSS yang diperbaiki -->
<style>
    /* Card Styling */
    .user-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        margin-bottom: 20px;
        overflow: hidden;
    }
    
    /* Header Card */
    .card-header {
        background: linear-gradient(to right, #4e73df, #224abe);
        color: white;
        padding: 15px 20px;
        font-weight: 600;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .card-header .card-title {
        margin: 0;
        font-size: 18px;
    }
    
    /* Card Body */
    .card-body {
        padding: 20px;
    }
    
    /* Button Style */
    .btn-custom {
        border-radius: 30px;
        padding: 8px 18px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .btn-primary.btn-custom {
        background: #4e73df;
        border-color: #4e73df;
    }
    
    .btn-primary.btn-custom:hover {
        background: #3a5bc7;
        border-color: #3a5bc7;
    }
    
    /* Stat Card */
    .stat-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 25px 20px;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
        margin-bottom: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        transition: all 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.3rem 2rem 0 rgba(58, 59, 69, 0.15);
    }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        color: white;
        font-size: 24px;
    }
    
    .icon-users {
        background: linear-gradient(to right, #4e73df, #224abe);
    }
    
    .icon-calendar {
        background: linear-gradient(to right, #1cc88a, #13855c);
    }
    
    .stat-value {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #333;
    }
    
    .stat-label {
        font-size: 14px;
        color: #858796;
    }
    
    /* Table Styling */
    .table-custom {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .table-custom thead th {
        background-color: #f8f9fc;
        border-bottom: 2px solid #e3e6f0;
        color: #6e707e;
        font-weight: 600;
        padding: 12px 15px;
        text-align: left;
    }
    
    .table-custom tbody tr {
        transition: all 0.3s;
    }
    
    .table-custom tbody tr:hover {
        background-color: #f8f9fc;
    }
    
    .table-custom tbody td {
        padding: 12px 15px;
        border-bottom: 1px solid #e3e6f0;
        vertical-align: middle;
    }
    
    .table-custom tbody tr:last-child td {
        border-bottom: none;
    }
    
    /* User Photo */
    .img-user {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    /* Action Buttons */
    .btn-action {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin: 0 3px;
        transition: all 0.3s;
        border: none;
    }
    
    .btn-action:hover {
        transform: scale(1.1);
    }
    
    .btn-edit {
        background-color: #36b9cc;
        color: white;
    }
    
    .btn-edit:hover {
        background-color: #2a9faf;
    }
    
    .btn-delete {
        background-color: #e74a3b;
        color: white;
    }
    
    .btn-delete:hover {
        background-color: #d52a1a;
    }
    
    /* Error Styling */
    .error-container {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        margin-bottom: 25px;
        text-align: center;
    }
    
    .error-title {
        color: #e74a3b;
        font-weight: 600;
        margin-bottom: 10px;
    }
    
    .error-details {
        font-family: monospace;
        background-color: #f8f9fc;
        padding: 15px;
        border-radius: 5px;
        text-align: left;
        font-size: 13px;
        color: #333;
        margin-top: 15px;
    }
    
    /* Responsive Fixes */
    @media (max-width: 768px) {
        .btn-action {
            width: 30px;
            height: 30px;
            font-size: 12px;
        }
        
        .img-user {
            width: 35px;
            height: 35px;
        }
    }
    
    @media (max-width: 576px) {
        .card-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .card-header .btn {
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
                                <h4 style="margin-bottom: 0px">Data User</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">User</span></li>
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
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="stat-card">
                <div class="stat-icon icon-users">
                    <i class="fa fa-users"></i>
                </div>
                <?php 
                include '../koneksi.php';
                $user = mysqli_query($koneksi,"SELECT * FROM user");
                $jumlah_user = mysqli_num_rows($user);
                ?>
                <div class="stat-value"><?php echo $jumlah_user; ?></div>
                <div class="stat-label">Total User</div>
            </div>
        </div>
    </div>

    <div class="user-card">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>
            <div>
                <a href="user_tambah.php" class="btn btn-primary btn-custom">
                    <i class="fa fa-plus"></i> Tambah User
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-custom table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="5%">Foto</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $user = mysqli_query($koneksi,"SELECT * FROM user ORDER BY user_id DESC");
                    while($p = mysqli_fetch_array($user)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                                <?php 
                                if($p['user_foto'] == ""){
                                    ?>
                                    <img class="img-user" src="../gambar/sistem/user.png">
                                    <?php
                                }else{
                                    ?>
                                    <img class="img-user" src="../gambar/user/<?php echo $p['user_foto']; ?>">
                                    <?php
                                }
                                ?>
                            </td>
                            <td><?php echo $p['user_nama'] ?></td>
                            <td><?php echo $p['user_username'] ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="user_edit.php?id=<?php echo $p['user_id']; ?>" class="btn btn-action btn-edit" title="Edit">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a href="user_hapus.php?id=<?php echo $p['user_id']; ?>" class="btn btn-action btn-delete" title="Hapus" onclick="return confirm('Yakin ingin menghapus user ini?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
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

<?php include 'footer.php'; ?>