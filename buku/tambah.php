<?php
include'../koneksi.php';
include'../aset/header.php';

$query=mysqli_query($kon,"SELECT * FROM kategori");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-tambah.php">
                    <table class="table">
                       
                        <tr>
                            <td>Judul Buku</td>
                            <td><input type="text" name="judul" placeholder="Masukkan Judul Buku"></td>
                        </tr>

                        <tr>
                            <td>Penerbit</td>
                            <td><input type="text" name="penerbit" placeholder="Masukkan Penerbit Buku"></td>
                        </tr>

                        <tr>
                        <td>Pengarang</td>
                        <td><input type="text" name="pengarang" placeholder="Masukkan Pengarang"></td>
                        </tr>

                        <tr>
                        <td>Ringkasan</td>
                        <td>
                            <textarea name="ringkasan">

                            </textarea>
                        </td>
                        </tr>

                        <tr>
                        <td>Cover</td>
                        <td><input type="file" name="cover"></td>
                        </tr>

                        <tr>
                        <td>Stok</td>
                        <td><input type="number" name="stok"></td>
                        </tr>

                        <tr>
                        <td>Kategori</td>
                        <td>
                        
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
                        
                        </td>
                        </tr>

                        <tr>
                            <th><input type="submit" class= "btn btn-primary" name="simpan" value="simpan"></th>
                        </tr>
                        
                        </div>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
include'../aset/footer.php';
?>