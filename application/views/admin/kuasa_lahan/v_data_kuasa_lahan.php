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
              <h3 class="card-title"><a href="<?php echo base_url('C_kuasa_lahan/pindahtambahdata') ?>" type="button" class="btn btn-primary">Tambah Data</a></h3>
              <!-- <a href="<?php echo base_url('C_kuasa_lahan/laporan_pdf') ?>" type="button" class="btn btn-primary">mencoba pdf</a> -->
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK Pemberi Kuasa</th>
                  <th>Nama</th>
                  <th>Tujuan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  foreach ($data_pemberi_kuasa_lahan as $value) {
                    # code...
                  ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><a href="<?php echo base_url() ?>C_kuasa_lahan/lihat/<?php echo $value->id_kuasa_lahan?>"><?php echo $value->nik_pemberi_kuasa ?></a></td> <!-- melihat data lebih lkengkap dengan cara memilih nik -->
                  <td><?php echo $value->nama_penduduk ?></td>
                  <td><?php echo $value->keterangan_kuasa ?></td>
                  <td>
                  <?php if ($value->status == "Request") {
                    echo '<span class="badge badge-warning"><a style="color: black; text-decoration: none;" href="'.base_url() ?>C_kuasa_lahan/statusrequest/<?php echo $value->id_kuasa_lahan.'">'. $value->status.'</a>
                  </span>';
                  } elseif ($value->status == "Tervalidasi") {
                     echo '<span class="badge badge-success"><a style="color: white; text-decoration: none;" href="'.base_url() ?>C_kuasa_lahan/statusvalidasi/<?php echo $value->id_kuasa_lahan.'">'. $value->status. '</a>
                  </span>';
                  } ?>
                  
                  </td>

                  <td>
                   <a class="btn btn-primary btn-sm " href="<?php echo base_url() ?>C_kuasa_lahan/validasi/<?php echo $value->id_kuasa_lahan?>">Download</a> 
                    <!-- ini mauvalidasi manggil data sesuai idnnya, misal nama ericko ber id 10, maka yg di kirimke funtion validasi adalah id 10 -->
                     <a class="btn btn-info btn-sm" href="<?php echo base_url() ?>C_kuasa_lahan/lihatedit/<?php echo $value->id_kuasa_lahan?>" >Edit</a>
                     
                     <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>C_kuasa_lahan/hapus/<?php echo $value->id_kuasa_lahan?>">Delete</a>
                    </td>
                </tr>

              <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>NIK Pemberi Kuasa</th>
                  <th>Nama</th>
                  <th>Tujuan</th>
                  <th>Status</th>
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