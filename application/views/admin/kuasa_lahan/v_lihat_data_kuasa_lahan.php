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
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK Pemberi Kuasa</label>
                    <p> <?php echo $data_pemberi_kuasa_lahan->nik_pemberi_kuasa ?>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemberi Kuasa</label>
                    <p> <?php echo $data_pemberi_kuasa_lahan->nama_penduduk ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nik Penerima Kuasa</label>
                    <p> <?php echo $data_penerima_kuasa_lahan->nik_penerima_kuasa ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Penerima</label>
                    <p> <?php echo $data_penerima_kuasa_lahan->nama_penduduk ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <p> <?php echo $data_penerima_kuasa_lahan->keterangan_kuasa ?>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <p> <?php echo $data_penerima_kuasa_lahan->tanggal ?>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Saksi</label>
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama saksi</th>
                      </tr>
                      </thead>
                      <tbody>

                        <?php
                        $no = 1;
                        foreach ($data_kuasa_lahan_pengikut as $value) {
                        ?>

                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $value->nama_saksi ?></td>
                      </tr>

                    <?php } ?>
                    </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card-body -->
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