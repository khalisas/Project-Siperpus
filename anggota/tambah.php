<?php
include'../koneksi.php';
include'../aset/header.php';

$query=mysqli_query($kon,"SELECT * FROM id_level");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Anggota</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-tambah.php">
                    <table class="table">
                       
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
                        </tr>

                        <tr>
                            <td>Kelas</td>
                            <td><input type="text" name="kelas" placeholder="Masukkan Kelas"></td>
                        </tr>

                        <tr>
                        <td>Telphone</td>
                        <td><input type="number" name="telp"></td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username"></td>
                        </tr>

                    
                        <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                        </tr>

                        <tr>
                        <td>Id Level</td>
                        <td>
                        
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
include '../aset/footer.php';
?>