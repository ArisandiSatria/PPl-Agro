<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])) {
        session_destroy();
        header("Location: index.php"); 
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Berhasil Login Owner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(img/download.jpg);
            color: white;
        }

        nav {
            background-color: rgba(0, 0, 0, .6);
            padding-top: 20px;
            padding-bottom: 5px;
            box-sizing: border-box;
        }

        nav ul {
            display: flex;
            list-style: none;
            width: 50%;
            justify-content: space-between;
        }

        nav ul li a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <!-- <form action="">
    </form>
    <form action="" method="POST" class="login-email">
        <div class="input-group">
            <input type="submit" name="submit" value="Log Out">
        </div>
    </form> -->


    <nav class="d-flex justify-content-around">
        <h4>SEEDS_UP</h4>
        <ul>
            <li><a href=""><h5>Dashboard</h5></a></li>
            <li><a href=""><h5>Laporan Pencatatan</h5></a></li>
            <li><a href=""><h5>Info Cuaca</h5></a></li>
            <li><a href=""><h5>Pemasaran</h5></a></li>
        </ul>
    </nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
