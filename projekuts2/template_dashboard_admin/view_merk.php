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
    $sql = "SELECT * FROM merk WHERE id=?";
    $st = $conn->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?> 

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Merk</td><td><?=$row['nama_merk']?></td></tr>
        
    </tbody>
</table>