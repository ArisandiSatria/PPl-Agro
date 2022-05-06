<?php

// echo "Filename: " . $_FILES['file']['name']."<br>";
// echo "Type : " . $_FILES['file']['type'] ."<br>";
// echo "Size : " . $_FILES['file']['size'] ."<br>";
// echo "Temp name: " . $_FILES['file']['tmp_name'] ."<br>";
// echo "Error : " . $_FILES['file']['error'] . "<br>";
include 'db.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['file']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["bayar"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  var_dump($check);
  if($check !== false) {
    $sqlupdatestok = "UPDATE `transaksi_pesanan` 
    SET `bukti_pembayaran`='".$_FILES['file']['name']."',`jenis_pembayaran`='".$_POST["jenis"]."' WHERE id_transaksi=".$_POST["id_transaksi"];
    $conn->query($sqlupdatestok);
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>