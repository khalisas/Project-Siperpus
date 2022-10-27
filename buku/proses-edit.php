<?php
// setiap form ada prosses
//query dibawah pahami dan query update hafali
//aksi dari action ada di form prosess
include '../koneksi.php';
if(isset($_POST['btnPinjam']))
{
    $id=$_POST["id"];
    $judul=$_POST['judul'];
    $penerbit=$_POST['penerbit'];
    $pengarang=$_POST['pengarang'];
    $ringkasan=$_POST['ringkasan'];
    $cover=$_POST['cover'];
    $stok=$_POST['stok'];
    $id_kategori=$_POST["id_kategori"];

    $sql="UPDATE buku SET judul='$judul', penerbit='$penerbit',pengarang='$pengarang',ringkasan='$ringkasan',cover='$cover'
    ,stok='$stok',id_kategori=$id_kategori where id_buku=$id";
    $res=mysqli_query($kon,$sql);
    $count=mysqli_affected_rows($kon);
    
    if($count==1)
    {
        header("Location:index.php");
    }
    else
    {
    header("Location: form-edit.php");
    }
}
?>
