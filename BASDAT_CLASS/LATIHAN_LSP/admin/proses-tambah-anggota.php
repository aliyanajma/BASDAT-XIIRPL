<?php
            include 'koneksi.php';

            $nama = $_POST['nama'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $password = $_POST['pass'];

            $input = mysqli_query($koneksi, "insert into anggota values('','$nama','$telp','$alamat','$email','$pass')");

            if($input){
                ?>
                <script>
                    alert('Data berhasil Ditambahkan!!');
                    window.location = "index.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                alert('Data Gagal Ditambahkan');
                window.location = "index.php"
                </script>
                <?php
            }

            // mengalihkan ke tampilan awal yah
            header("loccation:index.php");

?>