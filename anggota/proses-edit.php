<?php
// setiap form ada prosses
//query dibawah pahami dan query update hafali
//aksi dari action ada di form prosess
include '../koneksi.php';
if(isset($_POST['btnPinjam']))
{
    $id=$_POST["id"];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_level=$_POST["id_level"];

    $sql="UPDATE anggota SET nama='$nama',kelas='$kelas',telp='$telp',username='$username', password='$password'
    ,id_level=$id_level where id_anggota=$id";
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
