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
              <form role="form" action="<?php echo base_url('C_data_ktp/simpanedit') ?>" method="POST">

              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
                      <p> <?php echo $data_penduduk->nik ?>
                        <input name="datanik" type="hidden" class="form-control" id="exampleInputPassword1" value="<?php echo $data_penduduk->nik ?>" >
                       <!--  yang halaman edit hanya input nik saja yang diubah jadi p, soalnya data nik digunakan untuk kondisi where update data, jadi gak boleh di edit. -->
                       <!-- input form nik tidak boleh dihapus, soalnya saat menyimpan post ke controller menyertakan datanik, sehingga tidak boleh dihilangkan, namun boleh disembuny8ikan, dengan type hidden -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input name="datanama" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_penduduk->nama_penduduk ?>" disable>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat</label>
                      <input name="datatempat_lahir" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->tempat_lahir ?>" disable>
                    </div>
                    <!-- nanti diteruskan kebawah yang valuenya -> ini samakan dengan yang di tabkle. -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tgl Lahir</label>
                      <input name="datatgl_lahir" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->tgl_lahir ?>" disable>
                    </div>
                    <!-- fullalamat -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input name="dataalamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->fullalamat ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Agama</label>
                      <input name="dataagamaku" disable type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data_penduduk->agama ?>">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <input name="datajenis_kelamin" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->jenis_kelamin ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Bapak</label>
                      <input name="datanama_bapak" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->nama_bapak ?>">
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Ibuk</label>
                      <input name="datanama_ibuk" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->nama_ibuk ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pendidikan</label>
                      <input name="datapendidikanku" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->pendidikan ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pekerjaan</label>
                      <input name="datapekerjaan" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->pekerjaan ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Perkawinan</label>
                      <input name="dataperkawinan" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->status_perkawinan ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kewarganegaraan</label>
                      <input name="datakewarganegaraan" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->kewarganegaraan ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Golongan Darah</label>
                      <input name="datagolongan_darah" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->golongan_darah ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Tlpn</label>
                      <input name="datano_tlpn" disable type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data_penduduk->no_tlpn ?>">
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url('C_data_ktp') ?>" class="btn btn-danger">Batal</a>

              </div>
              </form>

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