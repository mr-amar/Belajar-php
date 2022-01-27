<?php
session_start();

require 'setting.php';

if (isset($_GET['login'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password  = '$password'");

    if (mysqli_num_rows($query) === 1) {
        header('location:index.php');
        $data = mysqli_fetch_object($query);

        $_SESSION['login'] = true;
        $_SESSION['hak_akses'] = $data->hak_akses;
    }
    //    echo $error = 'Username atau password yang anda masukan salah';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tour & Travel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://parsleyjs.org/src/parsley.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="https://parsleyjs.org/dist/i18n/id.js"></script>
</head>

<body background="img/masjid3.jpg">

    <div class="container">
        <div class="row mt-8">
            <div class="col-12">
                <div style="box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);border-radius: 15px; height: 280px;margin: 20rem auto 8.1rem auto;width: 329px; background-color: darkturquoise;" class="card card-body">
                    <h3 style="text-align: center; color: white; font-weight: bold; ">Login</h3>
                    <br />
                    <Form method="GET" id="form" data-parsley-validate>
                        <input type="text" name="username" class="form-control mb-3" placeholder="Masukan Username" required autofocus>
                        <input type="password" name="password" class="form-control mb-3" required data-parsley-trigger="keyup" placeholder="Masukan Password" required autofocus>
                        <p> </p>
                        <button type="submit" value="login" name="login" class="btn btn-primary">Login</button>
                        <!-- <a type="submit" value="registrasi" name="registrasi" class="btn btn-success" href="registrasi.php">Registrasi</a>
                        <p> </p>
                        <p style="color: whitesmoke; font-size: 12px;">Belum memiliki akun ?
                            Silahkan Registrasi</p> -->
                    </form>

                </div>

            </div>
        </div>

    </div>
</body>
<script>
    $('#form').parsley();
</script>

</html>