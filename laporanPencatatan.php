<?php

include_once("db.php");
$result = query("SELECT * FROM laporanpencatatan");

?>

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
        .container-fluid {
            background-color: rgba(0, 0, 0, .8);
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
            <li><a href="laporanPencatatan.php"><h5 style="color: white;">Laporan Pencatatan</h5></a></li>
            <li><a href="infoCuaca.php"><h5>Info Cuaca</h5></a></li>
            <li><a href="pemasaran.php"><h5>Pemasaran</h5></a></li>
        </ul>
    </nav>
    <div class="container-fluid justify-content-md-center text-center mt-4">
        <table class="table" style="color: white;">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Judul</th>
                <th>Detail</th>
            </tr>
            <?php
            foreach ($result as $val):
            ?>
            <tr>
                <td><?= $val["id"] ?></td>
                <td><?= $val["tanggal"] ?></td>
                <td><?= $val["judulCatatan"] ?></td>
                <td><a href="detailCatatan.php?id=<?=$val["id"]?>" class="btn btn-primary">Detail</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <button type="button" class="btn fs-5 d-grid mx-auto" onclick="myFunc()" style="background-color: white;">
        <i class="bi bi-plus-circle-fill"></i>
    </button>
    <script>
        function myFunc() {
            window.location.href = "halamanTambahCatatan.php";
        }
        function detailCatatan() {
            window.location.href = "detailCatatan.php";
        }
    </script>
</body>
</html>