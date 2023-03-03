<html>
    <head>
        <title>User Page</title>
    </head>
    <body>
        <h1>Selamat Datang Di Index</h1>
        <h3>Halaman User</h3>  
        <!--- Cek halaman apakah sudah login atau belum -->
        <?php
        session_start();
        if ($_SESSION['status']!='login'){
            header('location:login.php?pesan=belum_login');
        }
        ?>
        <h4>Welcome <?php
        include '../koneksi.php';
        $email = $_SESSION['email'];
        $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
         foreach($anggota as $nama){
             echo $nama['nama'];
        }
        ?> Anda Telah Login</h4>

        <!-- end --->
        <div class="table">
        <h2>Selamat Datang Di Buku Store</h2>
        <h1>Menampilkan Data Buku</h1>
<table border="1">
<tr>
    <th>ID Buku</th>
    <th>Katalog</th>
    <th>Judul Buku</th>
    <th>Pengarang</th>
    <th>Tahun Terbit</th>
    <th>Penerbit</th>
</tr>
<!-- Menampilkan Data Buku -->
<?php
include '../koneksi.php';
$buku = mysqli_query($koneksi, "select * from buku");
foreach($buku as $row){
    echo "<tr>";
    echo "<td>".$id_buku = $row['id_buku']."</td>";
    echo "<td>".$katalog = $row['id_katalog']."</td>";
    echo "<td>".$judul = $row['judul_buku']."</td>";
    echo "<td>".$pengarang = $row['pengarang']."</td>";
    echo "<td>".$pengarang = $row['thn_terbit']."</td>";
    echo "<td>".$penerbit = $row['penerbit']."</td>";
    ?>

    <?php
    echo "</tr>";
}
?>
</table>
<a href="../logout.php">LOGOUT</a>
</div>
</body>
</html>