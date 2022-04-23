<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Berhasil Login Owner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
            padding-top: 6px;
        }
        nav ul li a{
            text-decoration: none;
            color: rgb(158, 158, 158);
        }
        nav ul li a:hover{
            color: white;
        }
    </style>
</head>
<body>
    <nav class="d-flex justify-content-around">
        <h4 class="pt-1">SEEDS_UP</h4>
        <ul>
            <li><a href="tampilanOwner.php"><h5>Dashboard</h5></a></li>
            <li><a href="laporanPencatatan.php"><h5>Laporan Pencatatan</h5></a></li>
            <li><a href="infoCuaca.php"><h5>Info Cuaca</h5></a></li>
            <li><a href="pemasaran.php"><h5 style="color: white;">Pemasaran</h5></a></li>
        </ul>
    </nav>