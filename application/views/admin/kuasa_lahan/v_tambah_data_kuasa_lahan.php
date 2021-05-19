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
              <form role="form" action="<?php echo base_url('C_kuasa_lahan/simpan') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK Pemberi Kuasa</label>
                    <input name="datanik_pemberi" type="text" class="form-control" id="exampleInputEmail1" placeholder="NIK" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIK Penerima Kuasa</label>
                    <input name="datanik_penerima" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <input name="tujuan" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required>
                  </div>

                  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Saksi</label>
                    <div class="input-group control-group after-add-more">
                    <input type="text" name="nama_saksi[]" class="form-control" placeholder="Nama Saksi">

                      <div class="input-group-btn"> 
                        <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                      </div>
                    </div>

                     <!-- Copy Fields -->
                    <div class="copy hide">
                      <div class="control-group input-group" style="margin-top:10px">
                        <input type="text" name="nama_saksi[]" class="form-control" placeholder="Nama Saksi">
                        <div class="input-group-btn"> 
                          <button class="btn btn-danger remove" type="button"> Remove</button>
                        </div>
                      </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function() {
                          $(".add-more").click(function(){ 
                              var html = $(".copy").html();
                              $(".after-add-more").after(html);
                          });
                          $("body").on("click",".remove",function(){ 
                              $(this).parents(".control-group").remove();
                          });
                        });
                    </script>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url('C_kuasa_lahan') ?>" class="btn btn-danger">Batal</a>

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