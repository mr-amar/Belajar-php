<?php
include 'setting.php';
$id = $_GET['id'];
$query="DELETE FROM tour WHERE id=$id";
$sql= mysqli_query($koneksi,$query);
if($sql){
    echo "data berhasil di hapus";
    header('location:utama.php');
}else{
    echo "data gagal terhapus";
    
}