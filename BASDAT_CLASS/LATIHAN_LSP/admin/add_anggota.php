<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Anggota</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<div class="form">
        <h1>Tambah Anggota</h1>

        <form action="proses.php" method="post">
            <label>Nama</label>
            <input type="text" name="nama">
            <br>
            <label>No Telp</label>
            <input type="number" name="telp">
            <br>
            <label>Alamat</label>
            <input type="text" name="alamat">
            <br>
            <label>Email</label>
            <input type="text" name="email">
            <br>
            <label>Password</label>
            <input type="text" name="pass">
            <br>
            <input type="submit" value="submit">
            <br>
        </form>
    </div>
</body>
</html>
