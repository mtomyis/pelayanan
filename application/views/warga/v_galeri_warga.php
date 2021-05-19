<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- FONT SAYA -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- CSS SAYA -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/home.css')?>">

    <title>Aplikasi Pelayanan Surat Pengantar Desa Bulusari</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-lg">
          <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/gambar/logo1.png') ?>" alt="logo" height="30px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="<?php echo base_url('home')?>">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="<?php echo base_url('profil')?>">Profil</a>
              <a class="nav-item nav-link" href="<?php echo base_url('C_galeri_warga')?>">Galeri</a>
              <a class="nav-item nav-link" href="#">Tentang Aplikasi</a>
              <a class="nav-link" href="<?php echo base_url('welcome')?>">Login Admin <span class="sr-only">(current)</span></a>
            </div>
          </div>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto ">
            <a class="mx-2" href="https://www.instagram.com/desabulusari/?hl=id"><img src="<?php echo base_url('assets/gambar/ig.png') ?>" alt="" srcset="" height="20px"></a>
            <a class="mx-2" href="#"><img src="<?php echo base_url('assets/gambar/yt.png') ?>" alt="" srcset=""height="20px"></a>
              <a class="mx-2" href="https://www.facebook.com/bulusari.maju.9"><img src="<?php echo base_url('assets/gambar/fb.png') ?>" alt="" srcset=""height="20px"></a>
              <a class="mx-2" href="#"><img src="<?php echo base_url('assets/gambar/wa.png') ?>" alt="" srcset=""height="20px"></a>
            </div>
          </div>
          
      </div>
    </nav>
    
    

    <!-- Akhir Navbar -->

    <!-- jumbotron -->

    <div class="jumbotron jumbotron-fluid" style="background-image: url('assets/gambar/jumbo.png')">
      <div class="container" style="margin-top: 100px;">

        <div class="container">
          <div style="text-align: center; width: 100%">
          <form action="<?=base_url()?>/C_galeri_warga/index" method="get">
            <div  class="col-md-6">
              <input type="text" name="cari" class="form-control">
              <input type="submit" value="Cari" class="btn btn-primary">
            </div>
          </form>
          </div>
          <br>
          <div class="row">
            <?php foreach ($data as $data): ?>
              <div class="col-sm-6 col-md-3">
              <div class="card">
              <div class="card-body">
                <img style="height: 200px; width: 200px; object-fit: cover;" id="myImg" src="<?=base_url()?>assets/galeri/<?=$data->foto?>" alt="foto">

                  <div class="caption">
                    <h5 align="center"><?php echo $data->judul?></h5>
                    <p><?php echo $data->keterangan ?></p>
                  </div>
                </div>
              </div>
            </div>
                <!-- Trigger the Modal -->
                
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
        
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>