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