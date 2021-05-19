<!DOCTYPE html>
<html>

<?php $this->load->view("admin/template/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view("admin/template/menubar.php") ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $namaHalaman; ?></h1> <!-- nanti isi sesuai halaman -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        <!-- ini sisi konten dari halaman -->
        <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" action="<?php echo base_url('C_kelahiran/simpan') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input name="datanik" type="text" class="form-control" id="exampleInputEmail1" placeholder="NIK" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hari</label>
                    <input name="hari" type="text" class="form-control" id="exampleInputPassword1" placeholder="HARI" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input name="tanggal" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Di</label>
                    <input name="di" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anak Ke</label>
                    <input name="anakke" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="a">Jenis Kelamin</label>
                    <input name="jeniskelaminku" type="text" class="form-control" id="a" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Anak</label>
                    <input name="namaanak" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="d">Nama Ibu</label>
                    <input name="av" type="text" class="form-control" id="d" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Istri Dari</label>
                    <input name="istridari" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pelapor</label>
                    <input name="namapelapor" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hubungan Dengan Bayi</label>
                    <input name="hubungandenganbayi" type="text" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url('C_kelahiran') ?>" class="btn btn-danger">Batal</a>

                </div>
              </form>
            </div>
            <!-- /.card -->
        <!-- ini akhir sisi konten dari halaman -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("admin/template/footer.php") ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>