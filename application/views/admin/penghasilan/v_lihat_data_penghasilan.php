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
                <div class="row">

                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>

                      <p> <?php echo $data_penduduk->nik ?>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Penghasilan Sebulan</label>

                      <p> <?php echo $data_penduduk-> penghasilan_sebulan ?>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Maksud Pembuatan</label>
                      <p> <?php echo $data_penduduk->maksud_pembuatan ?>
                      <!-- nanti tag input diganti tag p yang halaman lihat saja, soalnya kalo input, nanti data nya bisa berubah,  jadi ginati tag p, agar menjadi text saja --> 

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Surat</label>

                      <p> <?php echo $data_penduduk->no_surat ?>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Pembuatan</label>

                      <p> <?php echo $data_penduduk->tanggal ?>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat</label>
                      <p> <?php echo $data_penduduk->tempat_lahir ?>
                    </div>
                    <!-- nanti diteruskan kebawah yang valuenya -> ini samakan dengan yang di tabkle. -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tgl Lahir</label>
                      <p> <?php echo $data_penduduk->tgl_lahir ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Agama</label>
                      <p> <?php echo $data_penduduk->agama ?>
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <p> <?php echo $data_penduduk->fullalamat ?>
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <p> <?php echo $data_penduduk->jenis_kelamin ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Bapak</label>
                      <p> <?php echo $data_penduduk->nama_bapak ?>
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Ibuk</label>
                      <p> <?php echo $data_penduduk->nama_ibuk ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pendidikan</label>
                      <p> <?php echo $data_penduduk->pendidikan ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pekerjaan</label>
                      <p> <?php echo $data_penduduk->pekerjaan ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Perkawinan</label>
                     <p> <?php echo $data_penduduk->status_perkawinan ?> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kewarganegaraan</label>
                      <p> <?php echo $data_penduduk->kewarganegaraan ?> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Golongan Darah</label>
                      <p> <?php echo $data_penduduk->golongan_darah ?> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Tlpn</label>
                      <p> <?php echo $data_penduduk->no_tlpn ?> 
                    </div>

                  </div>
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