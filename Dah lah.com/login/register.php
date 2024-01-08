<?php
session_start();

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "users");
//boleh di buat sendiri boleh enggak
//自分で作れるのか、作れないのか？

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // Enkripsi password dengan MD5


    // Periksa apakah email sudah terdaftar
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_result = mysqli_query($koneksi, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        echo "Harap Masukan Email";
    } else {
        // Query untuk menambahkan user baru
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("location: login.php");
            exit();
        } else {
            echo "Gagal mendaftar. Silakan coba lagi.";
        }
    }
}
?>


<!-- Form Register And bosstrap-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        body {
            background: url(img/2201_w026_n002_1335b_p1_1335.jpg) no-repeat;
        }

        .bio {
            margin-left: 320px;
            text-decoration: underline;
        }

        .bio1 {
            text-decoration: underline;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Register</h3>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="masukan Nama ">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" >
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    >
                            </div>
                            <div class="form-group">
                                <input type="submit" name="register" class="btn btn-primary btn-block" value="Register">
                            </div>
                            <a href="login.php" class="btn btn-primary">Login</a> 
                            <a href="Reset_password.php"class="btn btn-danger" onclick="">Lupa Kata Sandi</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>