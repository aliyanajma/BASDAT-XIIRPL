<?php
session_start();
include 'koneksi.php';

// Menangkap data yang dikirim dari login
$username = $_POST['user'];
$password = $_POST['pass'];

// Menyeleksi data dan dicocokan pada table admin xampp
$data = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

// Menghitung jumlah data yang ditemukan
$cek_data = mysqli_num_rows($cek_data);

if($cek_data > 0){
    $_SESSION['user']=$username;
    $_SESSION['status']='login';
    header("location:user/index.php");
}else{
    header("location:login.php?pesan=gagal");
}

?>