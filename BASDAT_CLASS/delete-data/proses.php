<?php
// include  koneksi
include 'koneksi.php';

// Menangkap data id yang dikirim dari url
$id_buku = $_GET['id_buku'];

// Menghapus data dari table buku yah
mysqli_query($koneksi,"delete from buku where id_buku='$id_buku");

// Mengalihkan ke tampilan awal yah
header
?>