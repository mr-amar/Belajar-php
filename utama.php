<!doctype html>
<html>

<head>
    <title>Data Tour & Travel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>


<body>
  
    <div class="container">
    <?php include 'navbar.php'; ?>
        <a style="background-color: orange;"href="tambah.php" class="btn btn-info mt-3">Tambah Data</a>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama paket</th>
                    <th>Jenis paket</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require 'setting.php';
                $query = "SELECT * FROM tour";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>

                    <tr>
                        <td> <?php echo $no++; ?></td>
                        <td> <?php echo $data->nama_paket; ?> </td>
                        <td> <?php echo $data->jenis_paket; ?> </td>
                        <td> <?php echo $data->harga; ?> </td>
                        <td> <?php echo $data->gambar; ?> </td>
                        <td>
                            <a href="edit.php?id=<?= $data->id; ?>">
                                <input type="submit" value="edit" class="btn btn-warning">
                            </a>

                            <a href="hapus.php?id=<?= $data->id ?>">
                                <input type="submit" value="hapus" onclick="confirm('yakin hapus data?')" class="btn btn-danger">
                            </a>
                        <?php
                    }
                        ?>

                        </td>

                    </tr>

            </tbody>
        </table>

        <?php include 'footer.php' ?>
    </div>

</body>

</html>