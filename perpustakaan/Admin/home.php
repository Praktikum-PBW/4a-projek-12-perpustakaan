<?php
include "../koneksi.php";
require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Perpustakaan</title>
    <style>
      .hidetext { -webkit-text-security: disc; }
    </style>
</head>
<body>
<div class="container">
<div class="col mt-5 justify-content-end">
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="bi bi-person"></i> Selamat Datang! <?php echo $rowSession['nama_admin'] ?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="create.php"><i class="bi bi-file-earmark-plus"></i> Buat data</a></li>
    <li><a class="dropdown-item" href="../logout.php" onclick="return confirm('Apakah anda ingin keluar?')"><i class="bi bi-box-arrow-left"></i> Keluar</a></li>

  </ul>
</div> 
</div> 

<div class="col">
  <div class="row">
    <table class="table mt-2">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Tanggal</th>
          <th scope="col" class="center">Delete | Edit | Lihat</th>
        </tr>
      </thead>
      <tbody>
          <?php 
          $query=mysqli_query ($koneksi,"SELECT * FROM admin order by created_at desc");
          $no=1;
          while($r= mysqli_fetch_array($query)){
            echo"<tr>
            <th scope='row'>$no</th>
            <td>$r[nama_admin]</td>
            <td>$r[username]</td>
            <td class='hidetext'>$r[password]</td>
            <td>$r[created_at]</td>
            <td>
            <a href='delete.php?id_admin=$r[id_admin]' button type='button' class='btn btn-danger' onclick='return confirm('Are You Sure?')'><i class='bi bi-trash'></i></a>
            <a href='edit.php?id_admin=$r[id_admin]'button type='button' class='btn btn-warning'><i class='bi bi-pencil-fill'></i></a>
            <a href='lihat.php?id_admin=$r[id_admin]'button type='button' class='btn btn-success'><i class='bi bi-eye-fill'></i></a>
            </td>
          </tr>";
          $no++;
          }
        ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>