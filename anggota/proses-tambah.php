<?php
include'../koneksi.php';
if(isset($_POST['simpan']))
{
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_level=$_POST['id_level'];

    $sql="INSERT INTO anggota VALUES ('','$nama','$kelas','$telp','$username','$password','$id_level')";
    $res=mysqli_query($kon,$sql);
    $count=mysqli_affected_rows($kon);
    if($count==1)
    {
        header("Location:index.php");
    }
    else
    {
    header("Location: tambah.php");
    }
}
?>