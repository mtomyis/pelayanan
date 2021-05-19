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
              <form role="form" action="<?php echo base_url('C_pindah_penduduk/simpanedit') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <input name="dataid_pindah_penduduk" type="hidden" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pindah_penduduk->id_pindah_penduduk ?>" required>

                    <label for="exampleInputEmail1">NIK</label>
                    <input name="datanik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_pindah_penduduk->nik ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Desa Baru</label>
                    <input name="desa_baru" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pindah_penduduk->desa_baru ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan Baru</label>
                    <input name="kecamatan_baru" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pindah_penduduk->kecamatan_baru ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kabupaten Baru</label>
                    <input name="kabupaten_baru" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pindah_penduduk->kabupaten_baru?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Provinsi Baru</label>
                    <input name="provinsi_baru" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pindah_penduduk->kabupaten_baru?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <input name="tujuan" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_pindah_penduduk->tujuan?>" required>
                  </div>
                 
                  <div class="form-group">
                    <?php
                        $no = 1;
                        foreach ($data_pindah_penduduk_pengikut as $value) {
                        ?>
                    <label for="exampleInputPassword1">Pengikut <?= $no++; ?></label>

                    <div class="form-group" style="padding-left: 20px">
                    <input type="hidden" name="id[]" class="form-control" value="<?php echo $value->id ?>">
                    <label for="exampleInputPassword1">NIK</label>
                    <input type="text" name="nik_pengikutt[]" class="form-control" value="<?php echo $value->nik ?>">
                    <label for="exampleInputPassword1">Hubungan Keluarga</label>
                    <input type="text" name="hubungan[]" class="form-control" value="<?php echo $value->hubungan ?>">
                    </div>
                    <?php } ?>

                  </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="<?php echo base_url('C_pindah_penduduk') ?>" class="btn btn-danger">Batal</a>

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