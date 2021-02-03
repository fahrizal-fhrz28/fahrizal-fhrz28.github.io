<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text white">
                LOGIN
            </div>
            <div class="card-body">
                <form action="action-login.php" method="POST" class="form-item">
               
                    <div class="from-grup">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control col-md-9" placeholder="Masukkan Username">
                    </div>
                    <div class="from-grup">
                        <label for="password">Password </label>
                        <input type="password" name="password" class="form-control col-md-9" placeholder="Masukkan Password">
                    </div><br>

                    <center>  
                   <button type="submit" class="btn btn-primary" name="simpan">Login</button>
                    
                    <button type="reset" class="btn btn-danger" >Batal</button>
                   </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>