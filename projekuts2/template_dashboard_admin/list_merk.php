<?php require "../config.php" ?>
<?php require "../fungsi/dbkoneksi.php" ?>
<?php include_once '../template/header.php' ?>



<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM `merk` ";
    // execute the query
    $rs = $conn->query($sql);
?>

<br>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Id</th>
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
            <td><?=$row['nama_merk']?></td>
            <td><?=$row['id']?></td>
            <td>
                <!-- buttons to edit, and delete a product -->
                <a class="btn btn-info" href="form_merk.php.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-danger" href="delete_merk.php?id=<?=$row['id']?> "
                onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['name']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
                <?php 
                $nomor++;   
                } 
                ?>
    </tbody>
</table>  

<a class="btn btn-info" href="form_merk.php" role="button">Create Merk</a>