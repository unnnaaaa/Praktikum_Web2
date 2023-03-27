<?php
include_once 'pages/header.php';
include_once 'pages/navbar.php';
include_once 'pages/sidebar.php';

?>
<?php 
require_once 'dbkoneksi.php';

?>
  <!-- /.container-fluid -->
<main>
<div class="content-wrapper bg-info"">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Silakan Isi Form Pendaftaran!</h1>
          </div><!-- /.col -->
          </div><!-- /.col -->
  <div class="col-sm-6">         
<form method="POST" action="proses_pelanggan.php">
  <div class="form-group row mt-3">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-7">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div>
        <input id="jk" name="jk" 
        value="L" type="radio" class="form-control"> <label for="lakilaki" class="mt-2">Laki - laki</label>
        <input id="jk" name="jk" 
        value="P" type="radio" class="form-control"> <label for="Perempuan" class="mt-2">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" 
        value=""
        type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="email" name="email" 
        value=""
        type="email" class="form-control">
      </div>
    </div>
  <div class="form-group row mt-4 ml-1 mr-4">
    <label for="jenis" class="col-4 col-form-label">Kartu</label> 
  </div>
    <div class="col-6 m-auto">
        <?php 
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="kartu_id" name="kartu_id" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8 mt-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Simpan
</button>
    </div>
  </div>
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <h2 style="color:black;"> Daftar Berhasil!</h2></i>
      </div>
      <div class="modal-footer">
        <input type="submit" name="proses" type="submit" 
      class="btn btn-success" value="Simpan"/>
      </div>
    </div>
  </div>
</div>
        </form>
          </div>
        </div><!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


</main>

  

<?php
include_once 'pages/footer.php';