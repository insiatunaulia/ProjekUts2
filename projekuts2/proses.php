<?php

require_once "fungsi/dbkoneksi.php";

?>


<?php

$tanggal_id = $_POST["tanggal_id"];
$produk_id = $_POST["produk_id"];
$quantity_id = $_POST["quantity_id"];



$_proses = $_POST["proses"];


$ar_data[] = $tanggal_id; // ? 1
$ar_data[] = $produk_id; // ? 2
$ar_data[] = $quantity_id; // 3




if ($_proses == "simpan") {
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,produk_id,quantity)
    VALUES (?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE pesanan SET tanggal=?,produk_id=?,quantity=? WHERE id=?";
}
if (isset($sql)) {
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
}

header('location:index.php');

?>