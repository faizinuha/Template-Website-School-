<?php
session_start();

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "users");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); 
    // Enkripsi password dengan MD5
   
    // Query untuk mencari user berdasarkan username dan password
    $query  = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);
    $count  = mysqli_num_rows($result);

    if($count == 1) {
       $_SESSION['login_user'] = $username;
        header("location: ../index.html"); 
        } else {
        echo "Username atau password salah.";
        }
    }
?>

<!-- Form Login And bosstrap---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
 
<style>
    body{
        background:url(img/2201_w026_n002_1335b_p1_1335.jpg);
    }
    
  
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Login</h3>
                    <form method="post" action="#">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username"  ><i class="icons-pencil" ></i>
                        </div>
                        <div class="form-group">
                            <input type="password" id="basic-addon1" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary btn-block" value="login">
                        </div>
                        <a href="register.php" class="btn btn-danger">create</a>
                        <a href="Reset_password.php" class="btn btn-primary" id="bio">Reset sandi</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
