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
            <!-- <h1 class="m-0 text-dark"><?php echo $namaHalaman; ?></h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <h6 class="m-0 text-dark" style="text-align: right;"><a href="<?php echo base_url('C_data_ktp/pindahtambahdata') ?>" class="btn btn-sm btn-primary">Kembali</a></h6> <!-- nanti isi sesuai halaman -->
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
              <form role="form" action="<?php echo base_url('C_data_ktp/aksi_upload') ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <br>
                    <?php 
                     // Message
                     if(isset($response)){
                       echo $response;
                     }
                     ?>
                    <div class="input-group">
                      <div class="custom-file">
                        <!-- <input type='file' name='file' > -->
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input class="btn btn-primary" type='submit' value='Upload' name='upload'>
                  <!-- <button type="submit" value='Upload' class="btn btn-primary">Simpan</button> -->
                  <a href="<?php echo base_url('C_data_ktp/pindahtambahdata') ?>" class="btn btn-danger">Batal</a>

                </div>
              </form>
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