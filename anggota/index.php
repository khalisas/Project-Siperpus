<?php
include'../koneksi.php';
$sql="SELECT * FROM anggota";

$res=mysqli_query($kon,$sql);
$anggota=array();
while($data= mysqli_fetch_assoc($res)){
  $anggota[]=$data;
}
include '../aset/header.php';
?>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-edit"></i>Data Anggota</h2>
    </div>
    <div class="card-body">
    <td>
            
      <a href="tambah.php" ><button type="button" class="btn btn-outline-primary" style="width:100%;height:40px">Tambah</button></a>
            
    </td>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
<?php
  $no=1;
  foreach($anggota as $a){
?>
    <tr>
      <th scope="row"><?=$no?></th>
      <td><?=$a['nama']?></td>
      <td><?=$a['kelas']?></td>
      <td>
          <a href="detail.php?id=<?=$a['id_anggota']?>" class="badge badge-success">Detail</a>
          <a href="form-edit.php?id=<?=$a['id_anggota']?>" class="badge badge-warning">Edit</a>
          <a href="hapus.php?id=<?=$a['id_anggota']?>" class="badge badge-danger">Hapus</a>
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