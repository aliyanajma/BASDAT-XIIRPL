<?php

session_start();

// Menghapus semua sesi
session_destroy();

// Mengarahkan halaman dan memberikan pesan logout
header("location:../login.php?pesan=logout");

?>