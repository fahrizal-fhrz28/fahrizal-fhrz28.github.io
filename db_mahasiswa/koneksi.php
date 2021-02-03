<?php
    $koneksi = mysqli_connect("localhost","root","","db_mahasiswa1");
    if(mysqli_connect_errno($koneksi))
    {
        echo "koneksi gagal" . mysqli_connect_error();
    }
?>