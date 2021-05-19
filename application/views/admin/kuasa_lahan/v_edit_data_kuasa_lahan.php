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
              <form role="form" action="<?php echo base_url('C_kuasa_lahan/simpanedit') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <input name="id_kuasa_lahan" type="hidden" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pemberi_kuasa_lahan->id_kuasa_lahan ?>" required>

                    <label for="exampleInputEmail1">NIK Pemberi Kuasa</label>
                    <input name="datanik_pemberi_kuasa" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_pemberi_kuasa_lahan->nik_pemberi_kuasa ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK Penerima Kuasa</label>
                    <input name="datanik_penerima_kuasa" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_pemberi_kuasa_lahan->nik_penerima_kuasa ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <input name="tujuan" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pemberi_kuasa_lahan->keterangan_kuasa ?>" required>
                  </div>
                  
                  <div class="form-group">
                    <?php
                        $no = 1;
                        foreach ($data_kuasa_lahan_pengikut as $value) {
                        ?>
                    <label for="exampleInputPassword1">Pengikut <?= $no++; ?></label>

                    <div class="form-group" style="padding-left: 20px">
                    <input type="hidden" name="id[]" class="form-control" value="<?php echo $value->id ?>">
                    <label for="exampleInputPassword1">Nama Saksi</label>
                    <input type="text" name="nama_saksi[]" class="form-control" value="<?php echo $value->nama_saksi ?>">
                    </div>
                    <?php } ?>

                  </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="<?php echo base_url('C_kuasa_lahan') ?>" class="btn btn-danger">Batal</a>

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