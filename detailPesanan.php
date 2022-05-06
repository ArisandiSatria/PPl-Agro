<?php 
session_start();
require_once("./db.php");

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
        body {
            background-image: url(img/bgppl.jpeg);
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
            <ul class="col-7 d-flex justify-content-between">
                <li><a href="tampilanOwner2.php"><h6>Dashboard</h6></a></li>
                <li><a href="infoCuaca2.php"><h6>Info Cuaca</h6></a></li>
                <li><a href="laporanPencatatan2.php"><h6>Laporan Pencatatan</h6></a></li>
                <li><a href="pemasaran2.php"><h6>Produk</h6></a></li>
                <li><a href="riwayatTransaksi.php"><h6> Riwayat Transaksi</h6></a></li>
            </ul>
            <h5 class="col-2 offset-2 pt-2 d-flex justify-content-end">
                <a href="profilOwner.php" style="text-decoration: none;color: #34364a;">
                <i class="bi bi-person"></i>
                <?php echo "Halo, " . $_SESSION['username_owner'] ."!". ""; ?>
                </a>
            </h5>
        </nav>
    <div class="container mt-5">
        <h5 style="color: rgba(255, 117, 24, 1);">Ada yang pesan nih!</h5>
        <h2 class="mb-4" style="font-weight: bold;">Detail Pesanan</h2>
        <div class="container mx-auto mt-5 row" style="color: black;">
            <div class="container col-2">
                <img src="img/pumpkin_PNG9365.png" class="img-thumbnail">
            </div>
            <div class="col-10 row">
                <div class="container col">
                    <div class="pemesan">
                        <h6 class="fw-bold">Pemesan:</h6>
                        Sandi
                    </div>
                    <div class="alamat mt-2">
                        <h6 class="fw-bold">Alamat:</h6>
                        Perumahan Taman Gading
                    </div>
                    <div class="row mt-4">
                        <div class="col rincian mt-2">
                            <h6 class="fw-bold">Rincian:</h6>
                            <span>Produk: Labu</span><br>
                            <span>Jumlah: 4</span>
                        </div>
                        <div class="col total mt-2">
                            <h6 class="fw-bold">Total:</h6>
                            <span>Harga sub produk: 12000</span><br>
                            <details>
                                <summary>Total pembayaran: 48000</summary>
                                <small style="font-size: xx-small; background-color: blue;"><p><i>4 (jumlah produk) X 12000(harga per produk)</i></p></small>
                            </details>
                        </div>
                    </div>
                </div>
                <div class="container col">
                    <h6 class="mb-2">Bukti pembayaran</h6>
                    <img src="img/5006144-removebg-preview.png" class="img-thumbnail" alt="">
                    <form action="" method="POST">
                        <div class="d-flex justify-content-between mt-2">
                            <button type="edit" class="btn btn-danger" style="color: white;">Batal verifikasi</button>
                            <button type="verif" name="verif" class="btn btn-success" style="color: white;">Verifikasi</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-1">
                <div>
                    <a href="tampilanOwner2.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</body>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>