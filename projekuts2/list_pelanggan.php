<!------------PHP---------------->

<?php require "config.php" ?>
<?php require "fungsi/dbkoneksi.php" ?>
<?php include_once 'template/header.php' ?>

<?php
$sql = "SELECT * FROM pesanan";
$rs = $conn->query($sql);
?>

<!------------PHP---------------->



<!------------Body---------------->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Handphone</th>
                <th scope="col">Email</th>
                <th scope="col">Jumlah pesanan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor  = 1;
            foreach ($rs as $row) {
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['tanggal'] ?></td>
                    <td><?= $row['nama_pemesan'] ?></td>
                    <td><?= $row['alamat_pemesan'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['jumlah_pesanan'] ?></td>


                    <!-- <td>
                        <a class="btn btn-primary" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
                        <a class="btn btn-primary" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a> -->
                    <!-- <a class="btn btn-primary" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a> -->
                    </td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>

    <a class="btn btn-success" href="form_pelanggan.php" role="button">Tambah Pelanggan</a>
    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">


</body>

</html>

<!------------Body---------------->