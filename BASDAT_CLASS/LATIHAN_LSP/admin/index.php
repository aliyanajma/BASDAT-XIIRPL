<html>

    <head>
        <title>Admin Page</title>
    </head>

    <body>
        <h1>Selamat Datang Di Index</h1>
        <h3>Halaman Admin</h3>
        
        <!--- Cek halaman apakah sudah login atau belum -->
        <?php
        session_start();
        if ($_SESSION['status']!= 'login') {
            header('location:../login_admin.php?pesan=belum_login');
        }
        ?>
        <!-- end --->
        
        <h4>Welcome <?php echo $_SESSION['admin']?> anda telah login</h4>
    <div class="table">
        <h2>Selamat Datang di Buku Store</h2>
        <h1>Data Buku</h1>
        <button><a href="add.php">Tambah Buku</a></button>
        <button><a href="add_anggota.php">Tambah Anggota</a></button>
        <br>
        <br>
<table border="1">
<tr>
    <th>ID Buku</th>
    <th>Katalog</th>
    <th>Judul Buku</th>
    <th>Pengarang</th>
    <th>Tahun Terbit</th>
    <th>Penerbit</th>
    <th>Aksi</th>

<?php
include '../koneksi.php';
$buku = mysqli_query($koneksi, "select * from buku");
foreach($buku as $row){
    echo "<tr>";
    echo "<td>". $row['id_buku']. "</td>";
    echo "<td>". $row['id_katalog']. "</td>";
    echo "<td>". $row['judul_buku']. "</td>";
    echo "<td>". $row['pengarang']. "</td>";
    echo "<td>". $row['thn_terbit']. "</td>";
    echo "<td>". $row['penerbit']. "</td>";
    ?>
    <td>
         <a href="update.php?id_buku=<?php echo $row['id_buku'];?>">EDIT</a>
         <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku'];?>">HAPUS</a>
    </td>

    <?php
    echo "</tr>";
}
?>
</tr>
</table>
</div>
<a href="../logout.php">LOGOUT</a>
</div>
</body>
</html>