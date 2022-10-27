<?php
include '../aset/header.php';
include '../koneksi.php';

$id=$_GET["id"];
$sql="SELECT * FROM buku where id_buku='$id' ";
$res=mysqli_query($kon,$sql);
$detail=mysqli_fetch_assoc($res);
$id=$detail["id_kategori"];
$query1=mysqli_query($kon, "SELECT * FROM kategori where id_kategori='$id'");
$katagori=mysqli_fetch_assoc($query1);

?>


<div class="container"> 
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Detail Buku</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                <tr>
                    <td><strong>Id Buku</strong></td>
                    <td><?=$detail['id_buku']?></td>
                </tr>

                <tr>
                    <td><strong>Judul</strong></td>
                    <td><?=$detail['judul']?></td>   
                </tr>

                <tr>
                    <td><strong>Penerbit</strong></td>
                    <td><?=$detail['penerbit']?></td>
                </tr>

                <tr>
                    <td><strong>pengarang</strong></td>
                    <td><?=$detail['pengarang']?></td>
                </tr>

                <tr>
                    <td><strong>ringkasan</strong></td>
                    
                    <td>
                    
                        <?=$detail['ringkasan']?>
                  
                    </td>
                </tr>
                <tr>
                    <td><strong>Cover</strong></td>
                    <td><img src="foto/<?=$detail['cover']?>" alt=""></td>
                </tr>
               

                <tr>
                    <td><strong>Kategori</strong></td>
                    <td><?=$katagori['kategori']?></td> 
                </tr>

                <tr>
                    <td><strong>stok</strong></td>
                    <td><?=$detail['stok']?></td>
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

    
