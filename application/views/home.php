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
            <a class="mx-2" href="https://www.youtube.com/channel/UCnwH1vi0n8z9LXSwP8hNgUQ?view_as=subscriber"><img src="<?php echo base_url('assets/gambar/yt.png') ?>" alt="" srcset=""height="20px"></a>
              <a class="mx-2" href="https://www.facebook.com/bulusari.maju.9"><img src="<?php echo base_url('assets/gambar/fb.png') ?>" alt="" srcset=""height="20px"></a>
              <a class="mx-2" href="#"><img src="<?php echo base_url('assets/gambar/wa.png') ?>" alt="" srcset=""height="20px"></a>
            </div>
          </div>
          
      </div>
    </nav>
    
    

    <!-- Akhir Navbar -->

    <!-- jumbotron -->

    <div class="jumbotron jumbotron-fluid" style="background-image: url('assets/gambar/jumbo.png')">
      <div class="container">
        <h1 class="display-4">Pelayanan <span>Surat</span> <br> Lebih <span> Cepat</span> Bersama Kami</h1>

        <a href="c_buat_surat" class="btn btn-success tombol " >BUAT SURAT</a>
        <a href="c_persyaratan_surat" class="btn btn-success tombol " >PERSYARATAN SURAT</a>
        
      </div>
    </div>


    <!-- akhir jumbotron -->

    <!-- Panel keterangan -->
      <div class="container">
        <!-- info panel -->
          <div class="row justify-content-center">
            <div class="col-10 info-panel">
              <div class="row">
                <div class="col-lg">
                  <img src="assets/gambar/tulis.png" alt="employe" class="float-left">
                  <h4>Tulis Surat</h4>
                  <p>pilih surat dan input data diri</p>
                </div>
                <div class="col-lg">
                  <img src="assets/gambar/kirim.png" alt="hire" class="float-left">
                  <h4>Kirim Surat</h4>
                  <p>Cek kembali dan kirimkan</p>
                </div>
                <div class="col-lg">
                  <img src="assets/gambar/jadi.png" alt="security" class="float-left">
                  <h4>Ambil Surat</h4>
                  <p>datang ke kantor desa dan ambil surat</p>
                </div>
              </div>
            </div>
            </div>
      </div>
            
        <!-- akhir info panel -->

        <!-- gallery bro -->
      <!-- <div class="container">
        <div class="row download">
          <div class="col-lg">
            <img src="assets/gambar/d.png" alt="workingspace" class="img-fluid">
          </div>
          <div class="col-lg">
            <h3>Download <span>Aplikasi</span> untuk <span>smarthphone</span></h3>
            <p>Pelayanan Publik Desa Bulusari sudah tersedia dalam bentuk Aplikasi android, download untuk memudahkan pelayanan </p>
            <a href="" class="btn btn-success tombol">Download Aplikasi</a>
          </div>
        </div>
      </div> -->

      <!-- aplikasi download -->

      <div class="container">
        <div class="row galery">
          
          <div class="col-lg">
            <h3>Ikuti <span>foto</span> kami <span>disini</span> yuk</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, officiis.</p>
            <a href="<?php echo base_url('C_galeri_warga')?>" class="btn btn-success tombol">Galeri Desa</a>
          </div>
          <div class="col-lg">
            <img src="assets/gambar/g.png" alt="workingspace" class="img-fluid">
          </div>


      <!-- akhir aplikasi download
        akhir galery -->

        <!-- footer -->


        <div class="footer-top">

          <div class="container">
            
              <div class="row">

                  <div class="col-md-3 col-sm-6-xs-12 segment-one">
                    <img src="assets/gambar/logo1.png" alt="" height="40px">
                    <p><span>Pemerintah Desa Bulusari</span> <br> Jalan Raya Bulusari No. 1<br>Desa Bulusari Kec. Kalipuro<br>Kabupaten Banyuwangi </p>
                  </div>
                  <div class="col-md-3 col-sm-6-xs-12 segment-two">
                    <h2>Jalan Pintas</h2>
                    <ul>
                      <li><a href="<?php echo base_url('home')?>">home</a></li>
                      <li><a href="<?php echo base_url('profil')?>">Profil</a></li>
                      <li><a href="<?php echo base_url('c_buat_surat')?>">surat</a></li>
                      <li><a href="#">persyaratan surat</a></li>
                      <li><a href="#">Tentang Aplikasi</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-6-xs-12 segment-three">
                    <h2>Ikuti Kami</h2>
                    <p>Ayo ikuti kami di media social teman-teman.</p>
                    <a href="https://www.facebook.com/bulusari.maju.9"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/desabulusari/?hl=id"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCnwH1vi0n8z9LXSwP8hNgUQ?view_as=subscriber"><i class="fa fa-youtube"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=6281252450420&text=Saya%20Mau%20Bertanya"><i class="fa fa-whatsapp"></i></a>
                  </div>
                  <div class="col-md-3 col-sm-6-xs-12 segment-four">
                    <h2>Tentang Aplikasi</h2>
                    <p>Aplikasi ini digunakan untuk membantu masyarakat membuat surat pengantar sehingga lebih mudah cepat dan dapat digunakan dimanapun.</p>
                    
                  </div>


              </div>

          </div>
          
        </div>

        <div class="footer-bottom">All Right Reserved &copy;Lare Angkrik
         
          </div>


        <!-- akhir footer -->

  <!-- penutup navbar -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>