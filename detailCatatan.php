<?php
include_once("db.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM laporanpencatatan WHERE id = '$id'";
    $stmt = $conn->query($query);
    $result = $stmt->fetch_assoc();
} else {
    header("location: laporanPencatatan.php");
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
    </style>
</head>
<body>
    <div class="container-fluid mt-3">
        <button type="button" class="btn btn-light" onclick="myFunc()">Back</button>
    </div>
    <div class="container-fluid mt-5">
        <h1 class=" text-center">Detail Catatan</h1>
        <div class='card mt-5 mx-auto'>
            <div class="card-body" style="color: black;">
                <p class="card-text"><?= $result["judulCatatan"] ?></p>
                <p class="card-text"><?=$result["isiCatatan"]?></p>
            </div>
        </div>
    </div>
        <script>
        function myFunc() {
            window.location.href = "laporanPencatatan.php";
        }
    </script>
</body>
</html>