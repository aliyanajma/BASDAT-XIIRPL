<?php
// variabel lokal hanya bisa di akses dari scope dimana dia di definisikan 
$nama = " guanteng bingitsz";

function halodunia(){
    $nama = "Pak Saiful"; //variabel lokal
    echo $nama;;
}
halodunia(); // objek

echo $nama;

?>