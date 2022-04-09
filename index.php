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
</head>
<body>    

    <div class="container">





       
   
            <div class="input-group">
            <button onclick='content2()'>Owner</button>
            <button onclick='content3()'>Customer</button>
            </div>

            

      









    <div id="content2" style="display: none">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Owner</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="emailOwner" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="passwordOwner" value="" required>
            </div>
            <div class="input-group">
                <input type="submit" name="submitOwner" value="Log In">
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>

    <div id="content3" style="display: none">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Customer</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="emailCustomer" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="passwordCustomer" value="" required>
            </div>
            <div class="input-group">
                <input type="submit" name="submitCustomer" value="Log In">
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
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