<?php
include'../koneksi.php';
$sql="SELECT * FROM buku";

$res=mysqli_query($kon,$sql);
$buku=array();
while($data= mysqli_fetch_assoc($res)){
  $buku[]=$data;
}
include '../aset/header.php';
?>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-edit"></i>Data Buku</h2>
    </div>
    <div class="card-body">
    <td>
            
      <a href="tambah.php" ><button type="button" class="btn btn-outline-primary" style="width:100%;height:40px">Tambah</button></a>
            
    </td>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
<?php
  $no=1;
  foreach($buku as $b){
?>
    <tr>
      <th scope="row"><?=$no?></th>
      <td><?=$b['judul']?></td>
      <td><?=$b['pengarang']?></td>
      <td><?=$b['stok']?></td>
      <td>
          <a href="detail.php?id=<?=$b['id_buku']?>" class="badge badge-success">Detail</a>
          <a href="form-edit.php?id=<?=$b['id_buku']?>" class="badge badge-warning">Edit</a>
          <a href="hapus.php?id=<?=$b['id_buku']?>" class="badge badge-danger">Hapus</a>
      </td>
    </tr>
  <?php 
  $no++;
  }
  ?>
    </tr>
  </tbody>
</table>
  </div>
</div>
  </div>
</div>
<?php
include '../aset/footer.php';
?>