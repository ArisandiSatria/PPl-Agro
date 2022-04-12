<?php 

include 'db.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: tampilan.php");
}

if (isset($_POST['submitOwner'])) {
    $email = $_POST['emailOwner'];
    $password = $_POST['passwordOwner'];

    $sql = "SELECT * FROM dataowner WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: tampilanOwner.php");
    
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
if (isset($_POST['submitCustomer'])) {
    $email = $_POST['emailCustomer'];
    $password = $_POST['passwordCustomer'];

    $sql = "SELECT * FROM datacustomer WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: tampilanCustomer.php");

    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Log In</title>
    <style>
        /* .container {
            margin-top: 80px;
        }

        .login {
            margin-top: 35px;
        } */

        img {
            height: 180px;
            width: 180px;
        }
    </style>
</head>
<body>    

<div class="container text-center">
    <div class="text-center border-0 p-0 padding-top-0">
        <div class="card-body">
            <h2 class="card-title">Masuk sebagai:</h2>
            <div class="row justify-content-center">
                <div class="col-3 gy-3">
                    <img src="img/businessman-concept-illustration/owner.jpg" class="img-thumbnail" alt="...">
                    <div class="tombol gap-5 row justify-content-center">
                        <button class="btn btn-primary col-4 gy-2" type="button" onclick='content2()'>Owner</button>
                    </div>
                </div>
                <div class="col-3 gy-3">
                    <img src="img/shopping-online-concept-illustration/customer.jpg" class="img-thumbnail" alt="...">
                    <div class="tombol gap-5 row justify-content-center">
                        <button class="btn btn-primary col-4 gy-2" type="button" onclick='content3()'>Customer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="loginPage">
        <div id="content2" style="display: none" class="row">
            <form action="" method="POST" class="login-email mt-2">
                <h3 class="login-text">Owner</h3>
                <div class="row justify-content-center gy-1">
                    <label for="inputEmail3">Email</label>
                    <input class="col-3" type="email" class="form-control" placeholder="Email" name="emailOwner" id="inputEmail3" value="" required>
                    <label for="inputPassword3">Password</label>
                    <input class="col-3" type="password" class="form-control" name="passwordOwner" placeholder="Password" value="" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center p-3">
                    <button type="submit" name="submitOwner" class="btn btn-primary">Log In</button>
                </div>
                <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>
        <div id="content3" style="display: none" class="row">
            <form action="" method="POST" class="login-email mt-2">
                <h3 class="login-text">Customer</h3>
                <div class="row justify-content-center gy-1">
                    <label for="inputEmail3">Email</label>
                    <input class="col-3" type="email" class="form-control" placeholder="Email" name="emailOwner" id="inputEmail3" value="" required>
                    <label for="inputPassword3">Password</label>
                    <input class="col-3" type="password" class="form-control" name="passwordOwner" placeholder="Password" value="" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center p-3">
                    <button type="submit" name="submitOwner" class="btn btn-primary">Log In</button>
                </div>
                <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>
</div>    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
function content2() {
    document.getElementById("content2").style.display="block";
    document.getElementById("content3").style.display="none";

}
function content3() {
    document.getElementById("content2").style.display="none";
    document.getElementById("content3").style.display="block";
}
</script>
</body>
</html>
