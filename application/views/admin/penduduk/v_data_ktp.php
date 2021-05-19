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
        <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url('C_data_ktp/pindahtambahdata') ?>" type="button" class="btn btn-primary">Tambah Data</a></h3>
            </div>
            <div class="card-body">
              <table width="50 px" id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Tempat</th>
                  <th>Tgl Lahir</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  foreach ($data_penduduk as $value) {
                    # code...
                  ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><a href="<?php echo base_url() ?>C_data_ktp/lihat/<?php echo $value->nik?>"><?php echo $value->nik ?></a></td> <!-- melihat data lebih lkengkap dengan cara memilih nik -->
                  <td><?php echo $value->nama_penduduk ?></td>
                  <td><?php echo $value->tempat_lahir ?></td> 
                  <td><?php echo $value->tgl_lahir ?></td>
                  <td><?php echo $value->agama ?></td>
                  <td><a class="btn btn-info btn-sm" href="<?php echo base_url() ?>C_data_ktp/lihatedit/<?php echo $value->nik?>" >Edit</a>
                     
                     <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>C_data_ktp/hapus/<?php echo $value->nik?>">Delete</a></td>
                </tr>

              <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Tempat</th>
                  <th>Tgl Lahir</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              </table>
            </div>
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
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
</body>
</html>