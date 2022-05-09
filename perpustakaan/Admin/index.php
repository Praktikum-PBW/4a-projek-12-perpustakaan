<?php 
error_reporting(0);
include "sidebar.php" 
?>
<form action="" method="POST">
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h3>Data Admin </h3>
            <a href="create.php" class="btn btn-primary">Add</a>
        </div>
        <input type="text" name="search" placeholder="Cari data dengan id">
        <input type="submit" name="cari" value="Search">
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama Admin</th>
                        <th>username</th>
                        <th>password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $cari = $_POST['search'];
                    if($cari !=""){
                        $query = mysqli_query($koneksi,"SELECT * FROM admin WHERE id_admin LIKE '".$cari."'");
                        
                    }else{
                        $query = mysqli_query($koneksi, 'SELECT *FROM admin');
                    }
                        if(mysqli_num_rows($query) > 0 ) {
                        foreach ($query as $data){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['id_admin']?></td>
                            <td><?= $data['nama_admin']?></td>
                            <td><?= $data['username']?></td>
                            <td><?= $data['password']?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="edit.php?page=admin_edit&id_admin=<?= $data['id_admin']?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="delete.php?page=admin_delete&id_admin=<?= $data['id_admin']?>"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah anda yakin?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        }else{
                            ?>
                            <tr>
                                <td colspan="10">
                                    <div class="alert alert-danger">Data Kosong...</div>
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
</form>