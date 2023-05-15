<?php 
// Include file koneksi database
require_once '../fungsi/dbkoneksi.php';

// Ambil data dari form
$_nama_merk = $_POST['nama_merk'];



$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_nama_merk;



// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Save"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO `merk` (nama_merk) VALUES (?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE `merk` SET nama_merk=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_merk.php');
?>