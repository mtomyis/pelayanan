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
              <h3 class="card-title"><a href="<?php echo base_url('C_tidak_mampu/pindahtambahdata') ?>" type="button" class="btn btn-primary">Tambah Data</a></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Tujuan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  foreach ($data_tidak_mampu as $value) {
                    # code...
                  ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><a href="<?php echo base_url() ?>C_tidak_mampu/lihat/<?php echo $value->id_tidak_mampu?>"><?php echo $value->nik ?></a></td> <!-- melihat data lebih lkengkap dengan cara memilih nik -->
                  <td><?php echo $value->tujuan ?></td>
                  
                  <td>
                  <?php if ($value->status == "Request") {
                    echo '<span class="badge badge-warning"><a style="color: black; text-decoration: none;" href="'.base_url() ?>C_tidak_mampu/statusrequest/<?php echo $value->id_tidak_mampu.'">'. $value->status.'</a>
                  </span>';
                  } elseif ($value->status == "Tervalidasi") {
                     echo '<span class="badge badge-success"><a style="color: white; text-decoration: none;" href="'.base_url() ?>C_tidak_mampu/statusvalidasi/<?php echo $value->id_tidak_mampu.'">'. $value->status. '</a>
                  </span>';
                  } ?>
                  
                  </td>

                  <td>
                   <a class="btn btn-primary btn-sm " href="<?php echo base_url() ?>C_tidak_mampu/validasi/<?php echo $value->id_tidak_mampu?>">Download</a> 
                    <!-- ini mauvalidasi manggil data sesuai idnnya, misal nama ericko ber id 10, maka yg di kirimke funtion validasi adalah id 10 -->
                     <a class="btn btn-info btn-sm" href="<?php echo base_url() ?>C_tidak_mampu/lihatedit/<?php echo $value->id_tidak_mampu?>" >Edit</a>
                     
                     <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>C_tidak_mampu/hapus/<?php echo $value->id_tidak_mampu?>">Delete</a>
                    </td>

                </tr>

              <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Tujuan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              </table>
            </div>
          </div>
          <!-- /.card -->
        <!-- ini akhir sisi konten dari halaman -->kem
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