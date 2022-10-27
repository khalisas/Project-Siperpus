<?php
include'../aset/header.php';
include'../koneksi.php';

$id=$_GET["id"];
$sql="SELECT *FROM anggota where id_anggota='$id' ";
$res=mysqli_query($kon,$sql);
$detail=mysqli_fetch_assoc($res);
$id_level=$detail["id_level"];
//$sql1=mysqli_query($kon,"SELECT * FROM id_level where id_level='$id_level' "); ini untuk ngambil data dari tabel id_level
$sql1=mysqli_query($kon,"SELECT * FROM id_level where id_level='$id_level' ");
//$level=mysqli_fetch_assoc($sql1); ini untuk naruh data isitilah nya ke dalam keranjang 
$level=mysqli_fetch_assoc($sql1);
?>
<!-- aku bingung e user,trs opo iu admin kan level gdu id_level kok de $sql1=mysqli_query($kon,"SELECT * FROM id_level where id_level='$id_level' "); iki $id_level
bli? 
$id=$_GET["id"]; iki kan sesuai id siswa dari tabel anggota iku mang contoh id=678
nah setiap id siswa pasti enek keterangan ne nde perpus 
misal e awm ke perpus iku pasti enek admin operator user,nah awm iku user tapi lek anggota perpus iku operatorr
carane gae status teko id_level
iku lek awm milih edit atau tambahh,iku kan muncul e isi dari tabel id_level tapi seng diambil iku id_level -->
<div class="container"> 
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Detail Anggota</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                <tr>
                    <td><strong>Id Anggota</strong></td>
                    <td><?=$detail['id_anggota']?></td>
                </tr>

                <tr>
                    <td><strong>Nama</strong></td>
                    <td><?=$detail['nama']?></td>   
                </tr>

                <tr>
                    <td><strong>Kelas</strong></td>
                    <td><?=$detail['kelas']?></td>
                </tr>


                <tr>
                    <td><strong>Telphone</strong></td>
                    <td><?=$detail['telp']?></td>
                </tr>

                <tr>
                    <td><strong>Username</strong></td>
                    <td><?=$detail['username']?></td>
                    
                </tr>
                <tr>
                    <td><strong>Password</strong></td>
                    <td><?=$detail['password']?></td>
                </tr>

                <tr>
                    <td><strong>Id Level</strong></td>
                    <td><?=$level['level']?></td>
                </tr>

                <tr>
                    <td class="text-right" colspan="2">
                            <a href="index.php" class="btn btn-success">
                            <i class="fas fa-angle-double-left"></i>Kembali</a>
                    </td>
                </tr>
                
                </table>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>

    
