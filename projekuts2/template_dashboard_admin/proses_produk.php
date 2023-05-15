<?php 
// Include file koneksi database
require_once '../fungsi/dbkoneksi.php';

// Ambil data dari form
$_nama = $_POST['nama'];
$_stok = $_POST['stok'];
$_harga = $_POST['harga'];
$_merk_id = $_POST['merk_id'];



$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_nama;
$ar_data[]=$_stok;
$ar_data[]=$_harga;
$ar_data[]=$_merk_id;


// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Save"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO `produk` (nama,stok,harga,merk_id) VALUES (?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE `produk` SET nama=?,stok=?,harga=?,
    merk_id=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_produk.php');
?>