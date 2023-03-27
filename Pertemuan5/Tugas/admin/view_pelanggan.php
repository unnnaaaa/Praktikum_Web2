<?php 
require_once 'dbkoneksi.php';

?>

<?php
include_once 'pages/header.php';
include_once 'pages/navbar.php';
include_once 'pages/sidebar.php';
?>

<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
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

<table class="table table-striped">
    <tbody>
        <tr>  <td>Kode : </td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama Pelanggan : </td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Jenis Kelamin : </td><td><?=$row['jk']?></td></tr>
        <tr>   <td>Tempat Lahir : </td><td><?=$row['tmp_lahir']?></td></tr>
        <tr>   <td>Tanggal Lahir : </td><td><?=$row['tgl_lahir']?></td></tr>
        <tr>   <td>Email : </td><td><?=$row['email']?></td></tr>
        <tr>   <td>Kartu : </td><td><?=$row['kartu_id']?></td></tr>
    </tbody>
</table>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
    <!-- membuat tombol dengan ukuran small berwarna biru  -->
        <!-- data-target setiap modal harus berbeda, karena akan menampilkan data yang berbeda pula
        caranya membedakannya, gunakan id_barang sebagai pembeda data-target di setiap modal -->
       
        
        <!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
        <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
      
        
</div>
</div>
<?php
include_once 'pages/footer.php';