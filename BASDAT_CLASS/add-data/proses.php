<?php
// include koneksi
include 'koneksi.php';

// menangkap data yang ada di form
$nama = $_POST['nama'];
$no_telp = $_POST['no telp'];
$alamat= $_POST['alamat'];
$email = $_POST['email'];

// mennginput database
mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','')");

// mengembalikan ke data awal


?>