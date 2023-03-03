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
            header('location:../loginn.php?pesan=belum_login');
        }
        ?>
        <!-- end --->
        
        <h4>Welcome <?php echo $_SESSION['user']?> Anda Telah Login</h4>
        <a href="../logout.php">LOGOUT</a>
    </body>
</html>