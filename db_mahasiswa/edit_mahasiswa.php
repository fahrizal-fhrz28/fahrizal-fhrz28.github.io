<?php
    include "koneksi.php";
    $id = $_GET['idsiswa'];
    $ambilData = mysqli_query($koneksi,"SELECT * FROM siswa WHERE idsiswa='$id'");
    $data=mysqli_fetch_array($ambilData);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
        <div class="card-header bg-primary text-white">
        EDIT DATA MAHASISWA
        </div>
        <div class="card-body">
            <form action="" method="POST" class="form-item">
                <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" value="<?php echo $data['npm'] ?>" class="form-control col-md_9" placeholder="Masukkan NPM">
                </div>
                
                <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control col-md_9" placeholder="Masukkan NAMA">
                </div>

                <div class="form-group">
                <label for="tempat_lahir">TEMPAT LAHIR</label>
                <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>" class="form-control col-md_9" placeholder="Masukkan TEMPAT LAHIR">
                </div>

                <div class="form-group">
                <label for="tanggal_lahir">TANGGAL LAHIR</label>
                <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>" class="form-control col-md_9" placeholder="Masukkan TANGGAL LAHIR">
                </div>

                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" class="form-control col-md_9" placeholder="Masukkan Jenis Kelamin">
                <option value="kosong" >Masukkan Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
                </select>
                </div>

                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control col-md_9" placeholder="Masukkan Alamat">
                </div>

                <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="Number" name="kode_pos" value="<?php echo $data['kode_pos'] ?>" class="form-control col-md_9" placeholder="Masukkan Kode Pos">
                </div>
                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
            </form>
            </form>
        </div>
    
    </div>
</body>
</html>
<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $npm                = $_POST['npm'];
        $nama               = $_POST['nama'];
        $tempat_lahir       = $_POST['tempat_lahir'];
        $tanggal_lahir      = $_POST['tanggal_lahir'];
        $jenis_kelamin      = $_POST['jenis_kelamin'];
        $alamat             = $_POST['alamat'];
        $kode_pos           = $_POST['kode_pos'];
    
        mysqli_query($koneksi, "UPDATE siswa SET npm='$npm', nama='$nama', tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',kode_pos='$kode_pos'
        WHERE idsiswa='$id'") 
        or die(mysqli_error($koneksi));

            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang Diupdate....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/mahasiswa/data_siswa.php'>";
    }

?>