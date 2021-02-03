<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text white">
            INPUT DATA MAHASISWA
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item" >
                    <div class="from-grup">
                        <label for="nama">NPM</label>
                        <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM">
                    </div>
                    <div class="from-grup">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>
                    <div class="from-grup">
                        <label for="nama">TEMPAT LAHIR</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="from-grup">
                        <label for="nama">TANGGAL LAHIR</label>
                        <input type="date" name="tanggl_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="from-grup">
                        <label for="nama">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control col-md_9" placeholder="Masukkan Jenis Kelamin">
                            <option value="kosong" >Masukkan Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="from-grup">
                        <label for="nama">ALAMAT</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>
                    <div class="from-grup">
                        <label for="nama">KODE POS</label>
                        <input type="text" name="kode_pos" class="form-control col-md-9" placeholder="Masukkan Kode Pos">
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="reset" class="btn btn-danger" >Batal</button>
                    </div>
                    <br>
                    <br>

                    <a href="action-logout.php">LOGOUT</a>
                </form>

            </div>
        </div>    
    </div>

</body>
</html>
<?php
 
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $npm                          = $_POST['npm'];
        $nama                         = $_POST['nama'];
        $tempat_lahir                 = $_POST['tempat_lahir'];
        $tanggal_lahir                = $_POST['tanggal_lahir'];
        $jenis_kelamin                = $_POST['jenis_kelamin'];
        $alamat                       = $_POST['alamat'];
        $kode_pos                      = $_POST['kode_pos'];

        mysqli_query($koneksi, "INSERT INTO siswa VALUES('',
        '$npm', '$nama', '$tempat_lahir','$tanggal_lahir', '$jenis_kelamin', '$alamat', '$kode_pos'
     )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
        echo "<meta http-equiv='refresh'content='1;url=http://localhost/db_mahasiswa/data_siswa.php'>";

    }
?>