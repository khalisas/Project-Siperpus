<?php
include '../koneksi.php';
session_start();

$id= $_GET["id"];

$query = mysqli_query($kon,"DELETE FROM buku where id_buku='$id'");

// var_dump($query);

if($query>0)
{
    echo
    "
    <script>
    alert('data berhasil dihapus');
    document.location.href ='index.php';
    </script>
    ";
}
?>