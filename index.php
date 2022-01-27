<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tour & Travel</title>
</head>

<body>
 
    <div class="container">
    <?php include 'navbar.php'; ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner mt-3">
                <div class="carousel-item active">
                <img src="img/masjid1.PNG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/masjid2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/masjid5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>    
        <h2 style="text-align: center;" class="alert alert-primary mt-3"> Daftar Nama Paket Haji & Umroh</h2>
        <div class="row">
            <?php
            require 'setting.php';
            $query = "SELECT * FROM tour";
            $ql = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_object($ql)) {

            ?>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/masjid1.PNG"<?=$data->gambar?> class="card-img-top" style="heigh: 13rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data->nama_paket; ?></h5>
                            <p class="card-text"><?= $data->jenis_paket; ?></p>
                            <p class="card-text"><?= $data->harga; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php include 'footer.php'; ?>

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>

</html>