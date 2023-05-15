<!-- ----------PHP---------------- -->

<?php require "../config.php"  ?>
<?php require "../fungsi/dbkoneksi.php" ?>
<?php include_once "../template/header.php" ?>

<!-- ----------PHP---------------- -->



<!-- ----------PHP---------------- -->

<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $conn->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?> 

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Tanggal</td><td><?=$row['tanggal']?></td></tr>
        <tr>   <td>Id Produk</td><td><?=$row['produk_id']?></td></tr>
        <tr>   <td>Jumlah</td><td><?=$row['quantity']?></td></tr>
        
    </tbody>
</table>