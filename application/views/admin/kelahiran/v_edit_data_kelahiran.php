<!DOCTYPE html>
<html>

<?php $this->load->view("admin/template/header.php") ?>
<!-- fungsi dari This-load view itu untukj memasukkan bagian yang belum ada atau terpisah dari halaman ini, kemarin kan di pisah di folder template, dibagi jadi footer, header menubar, fungsi dibagi tersebut agar kodingan terlihat lebih rapi, dan berguna untuk maintenace link dari menu bar,isal kalo terjadi kesalahan menu link surat beda nama, maka cukup yang diganti pada template menu bar,, jika tidak terpisah dari halaman ini, maka halaman yang lain juga haruis diganti, soalnya yang di edit linkj beda nama hanya halaman ini saja (jika tidak dipisah).  -->

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
              <form role="form" action="<?php echo base_url('C_kelahiran/simpanedit') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input name="dataid_kelahiran" type="hidden" class="form-control" id="exampleInputPassword1" value="<?php echo $data_penduduk->id_kelahiran ?>" >
                    <input name="datanik" type="text" class="form-control" id="exampleInputEmail1" placeholder="NIK" required value="<?php echo $data_penduduk->nik ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hari</label>
                    <input name="hari" type="text" class="form-control" id="exampleInputPassword1" placeholder="Hari" required value="<?php echo $data_penduduk->hari ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input name="tanggal" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" required value="<?php echo $data_penduduk->tanggal ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Di</label>
                    <input name="di" type="text" class="form-control" id="exampleInputPassword1" placeholder="Di" required value="<?php echo $data_penduduk->di ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anak Ke</label>
                    <input name="anakke" type="text" class="form-control" id="exampleInputPassword1" placeholder="Anak Ke" required value="<?php echo $data_penduduk->anak_ke ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <input name="jeniskelamink" type="text" class="form-control" id="exampleInputPassword1" required value="<?php echo $data_penduduk->jenis_kelamink ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Anak</label>
                    <input name="namaanak" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Anak" required value="<?php echo $data_penduduk->nama_anak ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Ibuk</label>
                    <input name="av" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Ibuk" required value="<?php echo $data_penduduk->nama_ibuk_lahir ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Istri Dari</label>
                    <input name="istridari" type="text" class="form-control" id="exampleInputPassword1" placeholder="Istri Dari" required value="<?php echo $data_penduduk->istri_dari ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat" required value="<?php echo $data_penduduk->alamat ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pelapor</label>
                    <input name="namapelapor" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Pelapor" required value="<?php echo $data_penduduk->nama_pelapor ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hubungan Dengan Bayi</label>
                    <input name="hubungandenganbayi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Hubungan Dengan Bayi" required value="<?php echo $data_penduduk->hubungan_dengan_bayi ?>">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url('C_kelahiran') ?>" class="btn btn-danger">Batal</a>

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