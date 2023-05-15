<?php require "../config.php" ?>
<?php require "../fungsi/dbkoneksi.php" ?>
<?php include_once '../template/header.php' ?>


<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM `produk` ";
    // execute the query
    $rs = $conn->query($sql);
?>

<br>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Merk</th>
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
            <td><?=$row['nama']?></td>
            <td><?=$row['stok']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['merk_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-warning" href="view_produk.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-info" href="form_produk.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-danger" href="delete_produk.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $nomor++;   
            } 
        ?>
    </tbody>
</table>

<a class="btn btn-info" href="form_produk.php" role="button">Create Product</a>