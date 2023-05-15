<?php require "../config.php" ?>
<?php require "../fungsi/dbkoneksi.php" ?>
<?php include_once '../template/header.php' ?>



<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM `pesanan` ";
    // execute the query
    $rs = $conn->query($sql);
?>

<br>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>id Produk</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $nomor = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['produk_id']?></td>
            <td><?=$row['quantity']?></td>
        </tr>
        <?php 
            // increment counter
            $nomor++;   
            } 
        ?>
    </tbody>
</table>

