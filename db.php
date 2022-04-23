<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","ppl");

$conn = new mysqli("localhost","root","","ppl");

if ($conn->connect_error) {
    die("Koneksi Gagal");
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$sql = "CREATE TABLE IF NOT EXISTS laporanpencatatan (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tanggal VARCHAR(30) NOT NULL,
	judulCatatan VARCHAR(50) NOT NULL,
	isiCatatan VARCHAR(500) NOT NULL
)";

$conn->query($sql);
