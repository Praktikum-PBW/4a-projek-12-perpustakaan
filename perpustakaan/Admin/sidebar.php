<?php 
include "../lib/koneksi.php";
require "session.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="icon" href="../assets/img/logo.png" type="png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .hidetext { -webkit-text-security: disc; }
      
      .nav-link.active {
    color: black;
  }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/styles/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">UNSIKA E-Library</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
          <ul class="nav flex-column">
          <a class="nav-link" href="admin/index.php">
              <h5><i class="bi bi-person-circle"></i> <?php echo $rowSession['nama_admin'] ?></h5>
            </a>
            </li>
          </ul>
          <hr style="color: black;">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../home.php">
                <i class="bi bi-grid-1x2"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../admin/index.php">
                <i class="bi bi-person-lines-fill"></i> Admin
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../user/index.php">
              <i class="bi bi-people"></i> Users
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../buku/index.php">  
              <i class="bi bi-book"></i> Buku
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../peminjaman/index.php">
              <i class="bi bi-box-arrow-in-down"></i> Peminjaman
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pengembalian/index.php">  
              <i class="bi bi-box-arrow-up"></i> Pengembalian
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../rak/index.php">  
              <i class="bi bi-bookshelf"></i> Rak
              </a>
            </li>

            <hr>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">       
              <i class="bi bi-box-arrow-left"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        