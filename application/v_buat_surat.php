<html lang="en">
<head>
  <!--  meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo base_url('assets/template/home.css')?>">

  <!-- FONT AWESOME -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


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
            <a class="mx-2" href="#"><img src="<?php echo base_url('assets/gambar/yt.png') ?>" alt="" srcset=""height="20px"></a>
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
      <form action="<?php echo base_url('C_buat_surat/request_surat') ?>" method="POST"> 
      	
      	<!-- fungsi baseurl untuk mempersingkat link, menggunakan tag action untuk memanggil method aksilogin di controller welcome, sedangkan tag method bisa diganti get atau post tergantung situasi, jika melibatkan data ketika transsaksi maka menggunhakan post, contohnya login, dia transaksi menggunakaan data yaitu usernbame dan password, maka methodnya adlaaha post-->

        <div class="form-group">
          <label for="ktp">No. KTP</label>
          <input type="text" class="form-control" id="datanoktp" aria-describedby="emailHelp" name="datanoktp" required>
          
        </div>

        <!-- script -->
        <style>
            .box{
                display: none;
            }
            .bedanama{}
            .kelahiran{}
            .kematian{}
            .penghasilan{}
            .pindahpenduduk{}
            .tidakmampu{}
            .kuasalahan{}
            .kuasaakta{}
        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
          $(document).ready(function(){
            $("select").change(function(){
              $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                  $(".box").not("." + optionValue).hide();
                  $("." + optionValue).show();
                } else{
                  $(".box").hide();
                }
              });
            }).change();
          });
        </script>
        <!-- penutup script -->

        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Surat</label>
          <select class="form-control" id="surat" name="surat">
            <option>Pilih Surat</option>
            <option value="bedanama">Surat Keterangan Beda Nama</option>
            <option value="kelahiran">Surat Keterangan Kelahiran</option>
            <option value="kematian">Surat Keterangan Kematian</option>
            <option value="penghasilan">Surat Keterangan Penghasilan</option>
            <option value="pindahpenduduk">Surat Keterangan Pindah Penduduk</option>
            <option value="tidakmampu">Surat Keterangan Tidak Mampu</option>
            <option value="kuasalahan">Surat Kuasa Lahan</option>
            <option value="kuasaakta">Surat Kuasa Akta</option>
          </select>
        </div>

        <script type="text/javascript">
          $(function(){
            $.ajaxSetup({
              type:"POST",
              url: "<?php echo base_url('C_buat_surat/ambilnama') ?>",
              cache:  false,
            })

            $("#surat").change(function(){
              var datanik = $("#datanoktp").val();
              var value =$(this).val();
              if (value=="bedanama") {
                $.ajax({
                  data:{nik:datanik},
                  success: function(respond){
                    $("#datanamalama").val(respond);
                  }
                })
              }
            })
          })
        </script>

        <!-- form tambahan -->
        <div class="bedanama box">
          <!-- ini kodingana cek nik untukmenampilkan namalama -->
          <div class="form-group">
            <label for="namalama">Nama Lama</label>
            <input type="text" class="form-control" id="datanamalama" name="datanamalama" disabled="">
          </div>
          <div class="form-group">
            <label for="namabaru">Nama Baru</label>
            <input type="text" class="form-control" id="namabaru" name="datanamabaru">
          </div>
          <div class="form-group">
            <label for="maksudpembuatan">Maksud Pembuatan</label>
            <input type="text" class="form-control" id="maksudpembuatan" name="a">
          </div>
        </div>
        <div class="kelahiran box">
          <div class="form-group">
            <label for="hari">Hari</label>
            <input type="text" class="form-control" id="hari" name="hari_kelahiran">
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggalnaila">
          </div>
          <div class="form-group">
            <label for="di">Di</label>
            <input type="text" class="form-control" id="di" name="di">
          </div>
          <div class="form-group">
            <label for="anakke">Anak ke</label>
            <input type="text" class="form-control" id="anakke" name="anakke">
          </div>
          <div class="form-group">
            <label for="jeniskelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jeniskelamin" name="jeniskelaminku">
          </div>
          <div class="form-group">
            <label for="namaanak">Nama Anak</label>
            <input type="text" class="form-control" id="namaanak" name="namaanak">
          </div>
          <div class="form-group">
            <label for="namaibu">Nama Ibu</label>
            <input type="text" class="form-control" id="namaibu" name="ab">
          </div>
          <div class="form-group">
            <label for="istridari">Istri dari</label>
            <input type="text" class="form-control" id="istridari" name="istridari">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="form-group">
            <label for="namapelapor">Nama Pelapor</label>
            <input type="text" class="form-control" id="namapelapor" name="namapelapor">
          </div>
          <div class="form-group">
            <label for="hubungandenganbayi">Hubungan dengan Bayi</label>
            <input type="text" class="form-control" id="hubungandenganbayi" name="hubungandenganbayi">
          </div>
        </div>
        <div class="kematian box">
          <div class="form-group">
            <label for="hari">Hari</label>
            <input type="text" class="form-control" id="hari" name="hari">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal</label>
            <input name="tanggal" type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal">
          </div>
          <div class="form-group">
            <label for="sebab">Sebab</label>
            <input type="text" class="form-control" id="sebab" name="sebab">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Maksud Pembuatan</label>
            <input name="n" type="text" class="form-control" id="exampleInputPassword1" placeholder="Maksud Pembuatan" >
          </div>
        </div>
        <div class="penghasilan box">
          <div class="form-group">
            <label for="penghasilansebulan">Penghasilan Sebulan</label>
            <input type="text" class="form-control" id="penghasilansebulan" name="penghasilansebulan">
          </div>
          <div class="form-group">
            <label for="tujuan">Tujuan Pembuatan</label>
            <input type="text" class="form-control" id="tujuanpembuatan" name="penghasilannaila">
          </div>
        </div>
        <div class="pindahpenduduk box">
          <div class="form-group">
            <label for="exampleInputPassword1">Desa Baru</label>
            <input name="desa_baru" type="text" class="form-control" id="exampleInputPassword1" placeholder="Desa Baru" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kecamatan Baru</label>
            <input name="kecamatan_baru" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kecamatan Baru" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kabupaten Baru</label>
            <input name="kabupaten_baru" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kabupaten Baru" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Provinsi Baru</label>
            <input name="provinsi_baru" type="text" class="form-control" id="exampleInputPassword1" placeholder="Provinsi Baru" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tujuan</label>
            <input name="tujuan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Maksud Pembuatan" >
          </div>

          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

          <div class="form-group">
            <label for="exampleInputPassword1">Pengikut</label>
            <div class="input-group control-group after-add-morepindah">
            <input type="text" name="nik_pengikut[]" class="form-control" placeholder="NIK Pengikut">
            <input type="text" name="hubungan[]" class="form-control" placeholder="Hubungan Keluarga">

              <div class="input-group-btn"> 
                <button class="btn btn-success add-morepindah" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
              </div>
            </div>

             <!-- Copy Fields -->
            <div class="copy hide">
              <div class="control-group input-group" style="margin-top:10px">
                <input type="text" name="nik_pengikut[]" class="form-control" placeholder="Nik Pengikut">
                <input type="text" name="hubungan[]" class="form-control" placeholder="Hubungan Keluarga">
                <div class="input-group-btn"> 
                  <button class="btn btn-danger removepindah" type="button"> Remove</button>
                </div>
              </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                  $(".add-morepindah").click(function(){ 
                      var html = $(".copy").html();
                      $(".after-add-morepindah").after(html);
                  });
                  $("body").on("click",".removepindah",function(){ 
                      $(this).parents(".control-group").remove();
                  });
                });
            </script>

          </div>
        </div>
        <div class="tidakmampu box">
          <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <input type="text" class="form-control" id="tujuan" name="tujuantidakmampu">
          </div>
        </div>
        <div class="kuasalahan box">
          <div class="form-group">
            <label for="exampleInputPassword1">NIK Penerima Kuasa</label>
            <input name="peneerima" type="text" class="form-control" id="exampleInputPassword1" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tujuan</label>
            <input name="ket" type="text" class="form-control" id="exampleInputPassword1" placeholder="" >
          </div>

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
        <div class="kuasaakta box">
          <div class="form-group">
            <label for="exampleInputPassword1">NIK Penerima Kuasa</label>
            <input name="datanik_penerima" type="text" class="form-control" id="exampleInputPassword1" placeholder="" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tujuan</label>
            <input name="tujuan" type="text" class="form-control" id="exampleInputPassword1" placeholder="" >
          </div>
        </div>
        <!-- penutup form tambahan -->

        <button type="submit" class="btn btn-secondary btn-block">Kirim</button>
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
                    <a href="#"><i class="fa fa-youtube"></i></a>
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

          <!-- penutup footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>