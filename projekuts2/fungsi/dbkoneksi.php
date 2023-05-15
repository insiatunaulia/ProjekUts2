<?php

$host = "localhost";
$dbname = "db_toko_alat_tulis";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Koneksi Gagal :"  .   $e->getMessage();
}

?>
