<?php
require_once '../dbkoneksi.php'
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM kartu WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>
<div class="content-wrapper bg-info"">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid>
        <div class="row mb-2">
          <div class="col-sm-6 mb-2">
            <h1 class="m-0">Detail Pelanggan</h1>
          </div><!-- /.col -->
         </div><!-- /.col -->

<table>
            <tbody>
        <tr>  <td>Kode : </td><td><?=$row['kode']?></td></tr>
        <tr>  <td>Nama Pelanggan : </td><td><?=$row['nama']?></td></tr>
        <tr>  <td>Diskon : </td><td><?=$row['diskon']?></td></tr>
        <tr>  <td>Iuran : </td><td><?=$row['iuran']?></td></tr>
            </tbody>
</table>
</div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>