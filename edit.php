<!doctype html>
<html>
<head>
    <title>Tambah Data Artikel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="alert alert-info">Edit Data Jamaah</h2>

    <?php
    require 'setting.php';
    if (isset($_POST['simpan'])) {
        $id=$_POST['id'];
        $txtnama_paket = $_POST['txtnama_paket'];
        $txtjenis_paket = $_POST['txtjenis_paket'];
        $txtharga = $_POST['txtharga']; 
        $txtfile = $_POST['txtfile'];

        $sql = "UPDATE tour SET 
        nama_paket='$txtnama_paket',jenis_paket='$txtjenis_paket',harga='$txtharga',gambar='$txtfile'  WHERE id=$id";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: utama.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }else{
        $id=$_GET['id'];
        $query="SELECT * FROM tour WHERE id=$id";
        $sql=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_object($sql);

    }

    ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="mb-3">
            <label>Nama Paket</label>
            <input required type="text" name="txtnama_paket" class="form-control" value="<?=$data->nama_paket;?>">
        </div>

        <div class="mb-3">
            <label>Jenis Paket</label>
            <input type="text" name="txtjenis_paket" class="form-control" value="<?=$data->jenis_paket;?>">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="txtharga" class="form-control" value="<?=$data->harga;?>">
        </div>

        <div class="mb-3">
            <label>gambar</label>
            <input type="file" name="txtfile" class="form-control" value="<?=$data->file;?>">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

</div>
</body>
</html>