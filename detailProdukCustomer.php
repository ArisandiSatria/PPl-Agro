<?php 

require_once("./db.php");
session_start();
$result = query("SELECT * FROM data_produk");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM data_produk WHERE id_produk = '$id'";
    $stmt = $conn->query($query);
    $result = $stmt->fetch_assoc();
}

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
        body {
            background-image: url(img/bgcus.jpeg);
            background-size: cover;
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
    </style>
<body>
<div class="container mt-4">
        <nav class="row ps-4">
            <div class="col-1">
                <img src="img/logoppl-removebg-preview.png" style="position:absolute;top:4%;height: 4rem; width: 4.5rem;">
            </div>
            <ul class="col-5 d-flex justify-content-between">
                <li><a href="tampilanCustomer.php"><h6>Produk</h6></a></li>
                <li><a href="pesananCustomer.php"><h6>Pesananmu</h6></a></li>
                <li><a href="profilOwnerCustomer.php"><h6>Profil Owner</h6></a></li>
            </ul>
            <h5 class="col-3 offset-2 pt-2 d-flex justify-content-end">
                <a href="profilCustomer.php" style="text-decoration: none;color: #34364a;">
                <i class="bi bi-person"></i>
                <?php echo "Halo, " . $_SESSION['username_customer'] ."!". ""; ?>
                </a>
            </h5>
        </nav>
    </div>
    <div class="container mt-5">
        <h5 style="color: rgba(255, 117, 24, 1);">Produkmu luar biasa!</h5>
        <h2 class="mb-4" style="font-weight: bold;">Detail Produk</h2>
        <form action="tambahPesanan.php" method="GET">
        <div class="container mx-auto mt-5 row" style="color: black;">
            <div class="container col-2">
                <img src="img/pumpkin_PNG9365.png" class="img-thumbnail">
            </div>
            <div class="row col">
                <div class="container col-12">
                    <h1 class="d-inline"><?=$result["nama_produk"]?></h1>
                </div>
                <div class="container col mt-4">
                    <?=$result["keterangan"]?>
                    <div class="row mt-5">
                        <div class="Language col">
                            <h6 class="fw-bold">Harga</h6>
                            <?=$result["harga_produk"]?>
                        </div>
                        <div class="Rental Duration col">
                            <h6 class="fw-bold">Stok Produk</h6>
                            <?=$result["stok_barang"]?>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Jumlah Pesanan :</label>
                            <input type="number" name="jumlah" class="form-control col-md-9" placeholder="Masukkan jumlah pesanan">
                            <!-- <input type="text" name="id_produk" value="<?=$result["id_produk"]?>">
                            <input type="text" name="harga_produk" value="<?=$result["harga_produk"]?>">
                            <input type="text" name="stok_barang" value="<?=$result["stok_barang"]?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-5">
                <div>
                    <a href="tampilanCustomer.php" class="btn btn-secondary">Kembali</a>
                </div>
                
                    <div class="mb-3">
                        <!-- <a href="tambahPesanan.php?id=" class="btn btn-warning" style="background-color: rgba(255, 117, 24, 1); color: white;" >Pesan</a> -->
                        <input type="submit" name="pesan" value="pesan">
                    </div>
                
            </div>
            </form>
        </div>
    </div>
</body>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>