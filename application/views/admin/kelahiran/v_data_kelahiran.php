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
              <h3 class="card-title"><a href="<?php echo base_url('C_kelahiran/pindahtambahdata') ?>" type="button" class="btn btn-primary">Tambah Data</a></h3>
              <!-- <a href="<?php echo base_url('C_kelahiran/laporan_pdf') ?>" type="button" class="btn btn-primary">mencoba pdf</a> -->
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Tanggal</th>
                  <th>Anak Ke</th>
                  <th>Jenis Kelamin</th>
                  <th>Nama Anak</th>
                  <!-- <th>Nama Ibu</th>
                  <th>Istri Dari</th>
                  <th>Alamat</th>
                  <th>Nama Pelapor</th>
                  <th>Hubungan Dengan Bayi</th> -->
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  foreach ($data_kelahiran as $value) {
                    # code...
                  ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><a href="<?php echo base_url() ?>C_kelahiran/lihat/<?php echo $value->id_kelahiran?>"><?php echo $value->nik ?></a></td> <!-- melihat data lebih lkengkap dengan cara memilih nik -->
                  <td><?php echo $value->tanggal ?></td>
                  <td><?php echo $value->anak_ke ?></td>
                  <td><?php echo $value->jenis_kelamink ?></td>
                  <td><?php echo $value->nama_anak ?></td>

                  <td>
                  <?php if ($value->status == "Request") {
                    echo '<span class="badge badge-warning"><a style="color: black; text-decoration: none;" href="'.base_url() ?>C_kelahiran/statusrequest/<?php echo $value->id_kelahiran.'">'. $value->status.'</a>
                  </span>';
                  } elseif ($value->status == "Tervalidasi") {
                     echo '<span class="badge badge-success"><a style="color: white; text-decoration: none;" href="'.base_url() ?>C_kelahiran/statusvalidasi/<?php echo $value->id_kelahiran.'">'. $value->status. '</a>
                  </span>';
                  } ?>
                  
                  </td>

                  <td>
                   <a class="btn btn-primary btn-sm " href="<?php echo base_url() ?>C_kelahiran/validasi/<?php echo $value->id_kelahiran?>">Download</a> 
                    <!-- ini mauvalidasi manggil data sesuai idnnya, misal nama ericko ber id 10, maka yg di kirimke funtion validasi adalah id 10 -->
                     <a class="btn btn-info btn-sm" href="<?php echo base_url() ?>C_kelahiran/lihatedit/<?php echo $value->id_kelahiran?>" >Edit</a>
                     
                     <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>C_kelahiran/hapus/<?php echo $value->id_kelahiran?>">Delete</a>
                    </td>

                </tr>

              <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Tanggal</th>
                  <th>Anak Ke</th>
                  <th>Jenis Kelamin</th>
                  <th>Nama Anak</th>
                  <!-- <th>Nama Ibu</th>
                  <th>Istri Dari</th>
                  <th>Alamat</th>
                  <th>Nama Pelapor</th>
                  <th>Hubungan Dengan Bayi</th> -->
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