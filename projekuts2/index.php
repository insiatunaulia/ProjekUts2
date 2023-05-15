<!-- ----------PHP---------------- -->

<?php require "config.php"  ?>
<?php require "fungsi/dbkoneksi.php" ?>
<?php include_once "template/header.php" ?>

<!-- ----------PHP---------------- -->
<style>
  .carousel-caption {
    top: 40%;
    bottom: auto;
  }

  .carousel-caption h3 {
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
  }

  .carousel-caption p {
    font-size: 18px;
    font-weight: normal;
  }
</style>


<!-- -----------------Body---------------- -->

<div class="carousel slide" id="carousel-483443">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-483443" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-483443">
					</li>
					<li data-slide-to="2" data-target="#carousel-483443">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="https://cdn.shopify.com/s/files/1/0556/8066/3742/collections/collection_page_stationery_1200x600_crop_center.jpg?v=1645552587">
						<div class="carousel-caption">
							<h4 style="font-size: 50px">
								STATIONERY STORE
							</h4>
							<p style="font-size: 20px">
								Toko Alat Tulis No.1 di Indonesia
							</p>
						</div>
					</div>
					<br>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://austin.culturemap.com/media-library/paper-craft-pantry.jpg?id=32048529&width=1200&height=600&coordinates=0%2C682%2C0%2C682">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://hips.hearstapps.com/hmg-prod/images/school-supplies-1594232464.jpg?crop=1.00xw:1.00xh;0,0&resize=1200:*">
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-483443" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-483443" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>

<!-- -----------------Body---------------- -->



<!-- -----------------Text---------------- -->

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <h2>
                Welcome
            </h2>
            <p>
                Selamat datang! Selamat berbelanja!
            </p>
        </div>
    </div>
</div>

<!-- -----------------Text---------------- -->




<!-- ----------------Body----------------- -->


<div class="container-fluid">
  <div class="row">
    <?php
    $sql = "SELECT * FROM `produk`;";
    $stmt = $conn->query($sql);


    while ($row = $stmt->fetch()) {
    ?>
      <div class="col-md-3 mt-3">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/<?= $row['nama'] ?>.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text">
              <div class="text-center">
                <div class="product-name"><?= $row['nama'] ?></div>
                <div class="product-price"><?= $row['harga'] ?></div>
                <div class="text-center mt-3"><a class="btn btn-info" href="view_produk.php?id=<?= $row['id'] ?>">View</a></div>

              </div>
            </div>
          </div>
        </div>
      </div>

    <?php
    }
    ?>


  </div>
</div>


<!-- ----------------Body----------------- -->

<br>

<!-- ----------------Footer----------------- -->

<?php
include_once ROOT_DIR . "template/footer.php";

?>

<!-- ----------------Footer----------------- -->
