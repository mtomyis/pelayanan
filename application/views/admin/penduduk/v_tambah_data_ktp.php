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
          <div class="col-sm-6">
            <h6 class="m-0 text-dark" style="text-align: right;"><a href="<?php echo base_url('C_data_ktp/uploadcsv') ?>" class="btn btn-sm btn-primary">Upload File CSV</a></h6> <!-- nanti isi sesuai halaman -->
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
              <form role="form" action="<?php echo base_url('C_data_ktp/simpan') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input name="datanik" type="text" class="form-control" id="exampleInputEmail1" placeholder="NIK" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input name="datanama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input name="datatempat_lahir" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tempat" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Lahir</label>
                    <input name="datatgl_lahir" type="date" class="form-control" id="exampleInputEmail1" placeholder="Tgl Lahir" required>
                  </div>
                  <!-- fullalamat -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input name="datafullalamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Agama</label>
                    <input name="dataagama" required type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <input name="datajenis_kelamin" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Jenis Kelamin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bapak</label>
                    <input name="datanama_bapak" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Bapak">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ibuk</label>
                    <input name="datanama_ibuk" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Ibuk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <input name="datapendidikan" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <input name="datapekerjaan" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status Perkawinan</label>
                    <input name="dataperkawinan" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Status Perkawinan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kewarganegaraan</label>
                    <input name="datakewarganegaraan" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Kewarganegaraan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Golongan Darah</label>
                    <input name="datagolongan_darah" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Golongan Darah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Tlpn</label>
                    <input name="datano_tlpn" required type="text" class="form-control" id="exampleInputEmail1" placeholder="No Tlpn">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url('C_data_ktp') ?>" class="btn btn-danger">Batal</a>

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