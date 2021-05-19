<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- FONT AWESOME -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo base_url('assets/template/home.css')?>">

  <title>Aplikasi Pelayanan Surat Pengantar Desa Bulusari</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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

  <!-- isi -->
  <div class="card container col-xs-12 col-md-3" style="margin-top: 50px;">
    <div class="card-body">
      <h4 class="card-title" style="text-align: center;">APLIKASI PELAYANAN SURAT PENGANTAR DESA BULUSARI</h4>
      <form action="<?php echo base_url('Welcome/aksi_login') ?>" method="POST"> 
      	
      	<!-- fungsi baseurl untuk mempersingkat link, menggunakan tag action untuk memanggil method aksilogin di controller welcome, sedangkan tag method bisa diganti get atau post tergantung situasi, jika melibatkan data ketika transsaksi maka menggunhakan post, contohnya login, dia transaksi menggunakaan data yaitu usernbame dan password, maka methodnya adlaaha post-->

        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="datausername">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="datapassword"> <!-- fungsinya name nanti untuk ketika press button submit login. nanti data yang diinputkan di kirim ke controller buat diolah -->
        </div>
        <button type="submit" class="btn btn-secondary btn-block">LOGIN</button>
      </form>
    </div>
  </div>
  <!-- penutup isi -->

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
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
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


<!--   <div class="container">
    <h4 class="text-center">
    APLIKASI PELAYANAN SURAT PENGANTAR DESA BULUSARI</h4>
    <form>

      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </form>
  </div> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>