<?php

require_once("./db.php");
$result = query("SELECT * FROM data_pencatatan");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM data_pencatatan WHERE id = '$id'";
    $stmt = $conn->query($query);
    $result = $stmt->fetch_assoc();
}

if (isset($_POST["hapus"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM data_pencatatan WHERE id=$id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    header("Location: laporanPencatatan2.php");
}

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
        <div class="container-fluid justify-content-md-center mt-5">
            <h5 style="color: rgba(255, 117, 24, 1);">Ini catatanmu!</h5>
            <h2 class="mb-4" style="font-weight: bold;">Detail Catatan</h2>
            <div class="judul mb-3">
                <h4>Judul:</h4>
                <?=$result["judul"]?>
            </div>
            <div class="kategori mb-3">
                <h4>Kategori:</h4>
                <?=$result["kategori"]?>
            </div>
            <div class="isi mb-3">
                <h4>Isi:</h4>
                <?=$result["isi"]?>
            </div>
            <div class="d-flex justify-content-between mt-5">
                <div>
                    <a href="laporanPencatatan2.php" class="btn btn-secondary">Kembali</a>
                </div>
                <form action="" method="POST">
                    <div class="mb-3">
                        <a href="editData.php?id=<?=$result["id"]?>" type="edit" class="btn btn-warning" style="color: white;">Ubah</a>
                        <button type="hapus" name="hapus" class="btn btn-danger" style="color: white;">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>