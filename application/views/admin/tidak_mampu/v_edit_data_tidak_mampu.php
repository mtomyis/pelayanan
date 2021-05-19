<!DOCTYPE html>
<html>

<?php $this->load->view("admin/template/header.php") ?>
<!-- fungsi dari This-load view itu untukj memasukkan bagian yang belum ada atau terpisah dari halaman ini, kemarin kan di pisah di folder template, dibagi jadi footer, header menubar, fungsi dibagi tersebut agar kodingan terlihat lebih rapi, dan berguna untuk maintenace link dari menu bar,isal kalo terjadi kesalahan menu link surat , maka cukup yang diganti pada template menu bar,, jika tidak terpisah dari halaman ini, maka halaman yang lain juga haruis diganti, soalnya yang di edit linkj  hanya halaman ini saja (jika tidak dipisah).  -->

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
              <form role="form" action="<?php echo base_url('C_tidak_mampu/simpanedit') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input name="dataid_tidakmampus" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_penduduk->id_tidak_mampu ?>" >
                    <input name="bg" type="text" class="form-control" id="exampleInputEmail1" placeholder="NIK" required value="<?php echo $data_penduduk->nik ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <input name="cv" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tujuan" required value="<?php echo $data_penduduk->tujuan ?>">
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url('C_tidak_mampu') ?>" class="btn btn-danger">Batal</a>

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