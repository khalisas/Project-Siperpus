<?php
include '../koneksi.php';
include '../aset/header.php';

$id=$_GET['id'];
$query=mysqli_query($kon,"SELECT * FROM kategori");
$sql="SELECT *FROM buku where id_buku='$id' ";
$res=mysqli_query($kon,$sql);
$edit=mysqli_fetch_assoc($res);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Buku</h3>
                </div>
                <div class="card-body">
                <!-- //action = ngirim isi form sesuai method post/get -->
                    <form action="proses-edit.php" method="post"> 
                        <div class="form-group">
                            <label for="buku"></label>
                            <input type="text" value="<?=$edit['id_buku']?>" name="id" class="form-control" hidden>
                            <!-- //iki ga oleh ganti -->
                        </div>
                        <div class="form-group">
                            <label for="buku">Judul Buku</label>
                            <input type="text" value="<?=$edit['judul']?>"class="form-control"name="judul" >
                        </div>
                        <div class="form-group">
                            <h6>Cover</h6>
                           <img src="foto/<?=$edit['cover']?>" alt="" width="50px">
                           <label for="buku">Choose..</label>
                            <input type="file" name="cover" value="<?=$edit['cover']?>" id="buku" hidden>
                        </div>
                        <div class="form-group">
                            <label for="buku">Penerbit</label>
                            <input type="text" name="penerbit" value="<?=$edit['penerbit']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="buku">Pengarang</label>
                            <input type="text" name="pengarang" value="<?=$edit['pengarang']?>" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <label for="buku">Ringkasan</label>
                            <input type="text-area" name="ringkasan" value="<?=$edit['ringkasan']?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <!-- // value = menghasilkan nilai tetap -->
                        <!-- // name = bagian dari method post/get 
                        bli,la kok  di tambah data ku kok nilai yo gdu $_POST(kategori); -->
                            <label for="buku">Katagori</label>
                            <select style="width: 100%" name="id_kategori">
                                <option value="">---Pilih Kategori---</option>
                                <?php

                                    while($kategori = mysqli_fetch_assoc($query)):

                                ?>
                                <option value="<?php echo $kategori['id_kategori'];
                                ?>"><?php echo $kategori['kategori'];?></option>
                                <?php
                                    endwhile;
                                ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="buku">stok</label>
                            <input type="number" name="stok" value="<?=$edit['stok']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnPinjam" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../aset/footer.php';
?>
