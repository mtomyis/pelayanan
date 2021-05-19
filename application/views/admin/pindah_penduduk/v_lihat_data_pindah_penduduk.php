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
                    <label for="exampleInputEmail1">NIK</label>
                    <p> <?php echo $data_pindah_penduduk-> nik ?>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Desa Baru</label>
                    <p> <?php echo $data_pindah_penduduk-> desa_baru ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan Baru</label>
                    <p> <?php echo $data_pindah_penduduk-> kecamatan_baru ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kabupaten Baru</label>
                    <p> <?php echo $data_pindah_penduduk-> kabupaten_baru ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Provinsi Baru</label>
                    <p> <?php echo $data_pindah_penduduk-> provinsi_baru ?>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <p> <?php echo $data_pindah_penduduk-> tujuan ?>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Pengikut</label>
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat, Tgl Lahir</th>
                        <th>Hubungan Keluarga</th>
                        <th>Pendidikan</th>
                      </tr>
                      </thead>
                      <tbody>

                        <?php
                        $no = 1;
                        foreach ($data_pindah_penduduk_pengikut as $value) {
                        ?>

                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $value->nik_pengikut ?></td> <!-- melihat data lebih lkengkap dengan cara memilih nik -->
                        <td><?php echo $value->nama_penduduk ?></td>
                        <td><?php echo $value->tempat_lahir ?>, <?php echo $value->tgl_lahir ?></td> 
                        <td><?php echo $value->hubungan ?></td>
                        <td><?php echo $value->pendidikan ?></td>
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