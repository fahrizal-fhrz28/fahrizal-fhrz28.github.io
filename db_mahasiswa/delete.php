<?php
    include "koneksi.php";
    $id = $_GET['idsiswa'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM siswa WHERE idsiswa='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/db_mahasiswa/data_siswa.php'>";
?>