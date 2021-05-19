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
            <h1 class="m-0 text-dark">Galeri</h1> <!-- nanti isi sesuai halaman -->
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
              <h3 class="card-title"><a href="<?php echo base_url('C_galeri/tambah') ?>" type="button" class="btn btn-primary">Tambah Data</a></h3>
              <!-- <a href="<?php echo base_url('C_kelahiran/laporan_pdf') ?>" type="button" class="btn btn-primary">mencoba pdf</a> -->
            </div>
            <div class="card-body">
              <div class="container">
      <h2>Cari</h2>
      <form action="<?=base_url()?>/C_galeri/index" method="get">
        <input type="text" name="cari">
        <input type="submit" value="Cari" class="btn btn-default">
      </form>
      
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <!-- Trigger the Modal -->
          <img id="myImg" src="<?=base_url()?>assets/galeri/<?=$data->foto?>" alt="foto" style="width:100%;max-width:300px">

            <div class="caption">
              <h5 align="center"><?php echo $data->judul?></h5>
              <p><?php echo $data->keterangan ?></p>
              <p>
                <a href="<?=base_url()?>C_galeri/edit/<?=$data->id?>" class="btn btn-info" role="button">Edit</a>
                <a href="<?=base_url()?>C_galeri/deletedata/<?=$data->id?>/<?=$data->foto?>" class="btn btn-danger" role="button">Hapus</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
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