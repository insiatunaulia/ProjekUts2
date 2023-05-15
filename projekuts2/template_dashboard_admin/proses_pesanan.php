<?php 
// Include file koneksi database
require_once '../fungsi/dbkoneksi.php';

// Ambil data dari form
$_tanggal = $_POST['tanggal'];
$_produk_id = $_POST['produk_id'];
$_quantity = $_POST['quantity'];



$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_tanggal;
$ar_data[]=$_produk_id;
$ar_data[]=$_quantity;


// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Save"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO `pesanan` (tanggal,produk_id,quantity) VALUES (?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE `pesanan` SET tanggal=?,produk_id=?,quantity=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_pesanan.php');
?>