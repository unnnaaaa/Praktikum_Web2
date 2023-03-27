<?php
include_once 'pages/header.php';
include_once 'pages/navbar.php';
include_once 'pages/sidebar.php';

?>
<div class="content-wrapper bg-info"">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List Pelanggan</h1>
          </div><!-- /.col -->
         </div><!-- /.col -->
<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>
 <div class="mt-3">
    <div class="mb-2">
      <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a>
      </div>
        <table class="table table-bordered" width="100%"  cellspacing="4" cellpadding="2">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['jk']?></td>
                        <td><?=$row['tmp_lahir']?></td>
                        <td><?=$row['tgl_lahir']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['kartu_id']?></td>
                        <td>
<div class="mr-1">
<a class="btn btn-primary btn-sm mb-2 mr-1" href="view_pelanggan.php?id=<?=$row['id']?>">View</a><br>
<a class="btn btn-warning btn-sm mb-2 " href="editt_pelanggan.php?idedit=<?=$row['id']?>">Edit</a><br>
<a class="btn btn-danger btn-sm " href="delete_pelanggan.php?iddel=<?=$row['id']?>"onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?=$row['nama']?>?')) {return false}">Delete</a>
         
</td>
</tr>
        
        <?php 
                $nomor++;   
            } 
            ?>
                 </form>
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

</main>
<?php
include_once 'pages/footer.php';
