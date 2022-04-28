<?php 

require_once("./db.php");

$query ="SELECT * FROM data_produk";
$result = execute($query);

$query = "SELECT * FROM akun_pemilik";
$stmt = $conn->query($query);
$hasil = $stmt->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SEEDS UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        * {
            font-style: poppins, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            padding-top: 20px;
            padding-bottom: 5px;
            box-sizing: border-box;
        }
        nav ul {
            list-style: none;
            width: 50%;
            padding-top: 6px;
        }
        nav ul li a{
            text-decoration: none;
            color: #34364a;
        }
        nav ul li a:hover{
            color: rgba(255, 117, 24, 1);
        }
        .card {
            box-shadow: 0 6px 10px 1px rgba(0, 0, 0, .2);
        }
        .add {
            background-color: rgba(255, 117, 24, 1); 
            position: fixed;
            height: 3rem; 
            width: 3rem; 
            color: white;
            top: 88%;
            right: 2%;
            display: flex;
            justify-content: center;
        }
        .add:hover {
            box-shadow: 0 0 6px 1px rgba(255, 117, 24, 1);
        }
    </style>
<body>
    <div class="container mt-4">
        <nav class="row ps-4">
            <h3 class="col-2">SEEDS_UP</h3>
            <ul class="col-5 d-flex justify-content-between">
                <li><a href="tampilanOwner2.php"><h6>Dashboard</h6></a></li>
                <li><a href="laporanPencatatan2.php"><h6>Laporan Pencatatan</h6></a></li>
                <li><a href="infoCuaca2.php"><h6>Info Cuaca</h6></a></li>
                <li><a href="pemasaran2.php"><h6>Pemasaran</h6></a></li>
            </ul>
            <h5 class="col-3 offset-2 pt-2 d-flex justify-content-end">Halo, <?=$hasil["username"]?></h5>
        </nav>
    </div>
    <div class="container mt-5">
        <h5 style="color: rgba(255, 117, 24, 1);">Wah, produkmu menarik!</h5>
        <h2 class="mb-4" style="font-weight: bold;">Produk</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4" style="color: black;">
            <?php

            foreach ($result as $a):

            ?>
            <div class="col">
                <div class="card h-100 border-0 rounded-3">
                    <div class="card-body">
                        <img src="img/pumpkin_PNG9365.png" class="img-thumbnail">
                        <h4 class="card-title my-2"><?=$a["nama_produk"]?></h4>
                        <div>
                            <a href="detailProduk.php?id=<?=$a["id_produk"]?>" class="btn btn-warning" style="background-color: rgba(255, 117, 24, 1); color: white;" >Detail Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="tambahProduk.php" class="add rounded-circle"><i class="bi bi-plus fs-2" style="color: white;"></i></a>
    </div>
</body>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>