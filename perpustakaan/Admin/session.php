<?php 
require "../lib/koneksi.php";
session_start();
$username = $_SESSION['username'];
$querySession = mysqli_query($koneksi, "SELECT * FROM admin where username='$username'");
$rowSession = mysqli_fetch_array($querySession);
$_SESSION['nama_admin'] = $rowSession['nama_admin'];
if (!isset($_SESSION[null]) && !isset($_SESSION["Admin"])){
    echo"<script>alert('Silahkan Login Terlebih Dahulu')
                    window.location.replace('../login.php')</script>";
    exit;
}

?>