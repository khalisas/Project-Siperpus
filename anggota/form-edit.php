<?php
include '../koneksi.php';
include '../aset/header.php';

$id=$_GET['id'];
$query=mysqli_query($kon,"SELECT * FROM id_level");
$sql="SELECT *FROM anggota where id_anggota='$id' ";
$res=mysqli_query($kon,$sql);
$edit=mysqli_fetch_assoc($res);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Anggota</h3>
                </div>
                <div class="card-body">
                <!-- //action = ngirim isi form sesuai method post/get -->
                    <form action="proses-edit.php" method="post"> 
                        <div class="form-group">
                            <label for="anggota"></label>
                            <input type="text" value="<?=$edit['id_anggota']?>" name="id" class="form-control" hidden>
                            <!-- //iki ga oleh ganti -->
                        </div>
                        <div class="form-group">
                            <label for="anggota">Nama</label>
                            <input type="text" value="<?=$edit['nama']?>"class="form-control"name="nama" >
                        </div>

                        <div class="form-group">
                            <label for="anggota">Kelas</label>
                            <input type="text" name="kelas" value="<?=$edit['kelas']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="anggota">Telp</label>
                            <input type="text" name="telp" value="<?=$edit['telp']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="anggota">Username</label>
                            <input type="text" name="username" value="<?=$edit['username']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="anggota">Password</label>
                            <input type="password" name="password" value="<?=$edit['password']?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <!-- // value = menghasilkan nilai tetap -->
                        <!-- // name = bagian dari method post/get 
                        bli,la kok  di tambah data ku kok nilai yo gdu $_POST(kategori); -->
                            <label for="anggota">Id Level</label>
                            <select style="width: 100%" name="id_level">
                                <option value="">---Pilih---</option>
                                <?php

                                    while($id_level = mysqli_fetch_assoc($query)):

                                ?>
                                <option value="<?php echo $id_level['id_level'];
                                ?>"><?php echo $id_level['level'];?></option>
                                <?php
                                    endwhile;
                                ?>
                                
                            </select>
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
