<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","ppl");
$conn = new mysqli("localhost","root","","ppl");
if ($conn->connect_error) {
    //  akan dieksekusi ketika terjadi error
    die("Koneksi Gagal");
}