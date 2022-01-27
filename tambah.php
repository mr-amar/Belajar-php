<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <?php
        include 'navbar.php';
        ?>

        <h2 style="text-align: center;" class="alert alert-info mt-2"> Tambah Data Jamaah</h2>
        <?php
        require 'setting.php';
        if (isset($_POST['simpan'])) {
            $txtnama_paket = $_POST['txtnama_paket'];
            $txtjenis_paket = $_POST['txtjenis_paket'];
            $txtharga = $_POST['txtharga'];
            $txtgambar = $_POST['txtgambar'];
            $sql = "INSERT INTO tour VALUES (NULL, '$txtnama_paket', '$txtjenis_paket', '$txtharga', '$txtgambar')";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                header('location: utama.php');
            } else {
                echo 'Query Error : ' . mysqli_error($koneksi);
            }
        }

        ?>
        <form action="#" method="POST">
            <div class="mb-3">
                <label>Nama Paket</label>
                <input type="text" name="txtnama_paket" class="form-control">
            </div>

            <div class="mb-3">
                <label>Jenis Paket</label>
                <input type="text" name="txtjenis_paket" class="form-control">
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input name="txtharga" class="form-control"></input>
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="txtgambar" class="form-control"></input>
            </div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary mb-3">
            <a href="index.php" class="btn btn-danger mb-3">Batal</a>
        </form>

        <?php
        include 'footer.php';
        ?>
    </div>


</body>

</html>