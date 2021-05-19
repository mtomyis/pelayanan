<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_buat_surat extends CI_Controller {

  function __construct(){
    parent::__construct();
  
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu welcome atau halaman login
    // if($this->session->userdata('status') != "login"){
    //   redirect(base_url("Welcome"));
    // }
    // dikomen karena semua warga bisa melihat halaman home tanpa login sebagaio admin

    //load file class M_data_ktp dari folder model
    $this->load->model('M_data_ktp');
    $this->load->model('M_beda_nama');
    $this->load->model('M_kelahiran');
    $this->load->model('M_kematian');
    $this->load->model('M_penghasilan');
    $this->load->model('M_kuasa_akta');
    $this->load->model('M_kuasa_lahan');
    $this->load->model('M_pindah_penduduk');
    $this->load->model('M_tidak_mampu');


  }

  public function index()
  {
    $this->load->view('warga/v_buat_surat');
  }

  public function ambilnama()
  {
    $nik=$this->input->post('nik');
    echo $this->M_beda_nama->namalama($nik);
  }

  public function request_surat()
  {
    # fungsi ini untuk menyimpan / request surat dari warga

    // defini surat
    $bedanama = "bedanama";
    $kelahiran = "kelahiran";
    $kematian = "kematian";
    $penghasilan = "penghasilan";
    $pindahpenduduk = "pindahpenduduk";
    $tidakmampu = "tidakmampu";
    $kuasalahan = "kuasalahan";
    $kuasaakta = "kuasaakta";

    // dan strusnya
    $nikk = $this->input->post('datanoktp');
    $where = array(
      'nik' => $nikk
    );
    $cek = $this->M_data_ktp->cek_nik("penduduk", $where)->num_rows();
    // variabel $cek akan berisi data yaitu $this-mdataktp memnggil funtion cekknik, dengan
    // membawa value "penduduk" yaitu tablenya, dan array where liat line 50-52, berisi datanik yang diinputkan warga, kemudian numrows untuk mencetak jumlah number rows baris hasil query di ceknik
    if ($cek == 1) {
      # code...


    if ($this->input->post('surat') == $bedanama) {
      # jika warga memilih dropdown surat beda nama,maka akan mengeksekusi kode dibawah ini
      $data['nik'] = $this->input->post('datanoktp');
      // $data['nama_lama'] = $this->input->post('datanamalama');
      $data['nama_baru'] = $this->input->post('datanamabaru');
      $data['no_surat'] = date("Y.m.d");
      $data['tanggal'] = date("d-m-Y");
      $data['maksud_pembuatan'] = $this->input->post("a");
      $data['status'] = "Request";

      $this->M_beda_nama->inputdata($data);
      //  proses simpan data, metodenyasama seperti yg diadmin,maknya include model ygsamapunyaadmin

    }
    
    if ($this->input->post('surat') == $kelahiran) {
      # jika warga memilih dropdown surat beda nama,maka akan mengeksekusi kode dibawah ini
      $data['nik'] = $this->input->post('datanoktp');
      $data['hari'] = $this->input->post('hari_kelahiran');
      $data['no_surat'] = date("Y.m.d");
      $data['tanggalsurat'] = date("Y-m-d");
      $data['tanggal'] = $this->input->post('tanggalnaila');
      $data['di'] = $this->input->post("di");
      $data['anak_ke'] = $this->input->post("anakke");
      $data['jenis_kelamink'] = $this->input->post("jeniskelaminku");
      $data['nama_anak'] = $this->input->post("namaanak");
      $data['nama_ibuk_lahir'] = $this->input->post("ab");
      $data['istri_dari'] = $this->input->post("istridari");
      $data['alamat'] = $this->input->post("alamat");
      $data['nama_pelapor'] = $this->input->post("namapelapor");
      $data['hubungan_dengan_bayi'] = $this->input->post("hubungandenganbayi");
      $data['status'] = "Request";

      $this->M_kelahiran->inputdata($data);
      // ini proses simpan data, metodenyasama seperti yg diadmin,maknya include model ygsamapunyaadmin

    }

    if ($this->input->post('surat') == $kematian) {
      # jika warga memilih dropdown surat beda nama,maka akan mengeksekusi kode dibawah ini
      $data['nik'] = $this->input->post('datanoktp');
      $data['hari'] = $this->input->post('hari');
      $data['maksud_pembuatan'] = $this->input->post("n");
      $data['tanggal'] = $this->input->post('tanggal');
      $data['sebab'] = $this->input->post('sebab');
      $data['no_surat'] = date("Y.m.d");
      // $data['tanggal'] = date("Y-m-d");
      $data['status'] = "Request";

      $this->M_kematian->inputdata($data);
      // ini proses simpan data, metodenyasama seperti yg diadmin,maknya include model ygsamapunyaadmin

    }

    if ($this->input->post('surat') == $penghasilan) {
      # jika warga memilih dropdown surat beda nama,maka akan mengeksekusi kode dibawah ini
      $data['nik'] = $this->input->post('datanoktp');
      $data['penghasilan_sebulan'] = $this->input->post('penghasilansebulan');
      $data['maksud_pembuatan'] = $this->input->post('penghasilannaila');
      $data['no_surat'] = date("Y.m.d");
      $data['tanggal'] = date("Y-m-d");
      $data['status'] = "Request";


      $this->M_penghasilan->inputdata($data);
      // ini proses simpan data, metodenyasama seperti yg diadmin,maknya include model ygsamapunyaadmin

    }

    if ($this->input->post('surat') == $pindahpenduduk) {
      $data['nik'] = $this->input->post('datanoktp');
      $query = $this->db->query("SELECT*FROM `no_surat` ")->row();
      $no_surat_old = $query->no_surat;
      $no_surat_now = $no_surat_old+1;
      $this->db->query("UPDATE `no_surat` SET `no_surat` = {$no_surat_now}");
      $data['desa_baru'] = $this->input->post('desa_baru');
      $data['kecamatan_baru'] = $this->input->post('kecamatan_baru');
      $data['kabupaten_baru'] = $this->input->post('kabupaten_baru');
      $data['provinsi_baru'] = $this->input->post('provinsi_baru');
      $data['tujuan'] = $this->input->post('tujuan');
      $data['tgl'] = date("Y-m-d");
      $data['no_surat'] = $no_surat_now;

      $id_pengikut = date("Y.m.d.H.i.s");
      $data['id_pengikut'] = $id_pengikut;

      if (null !== $this->input->post("nik_pengikut")) {
        $nik_pengikut = $this->input->post("nik_pengikut");
        $hubungan = $this->input->post("hubungan");
      }
      $dataa = array();

      $data['status'] = "Request";

      $this->M_pindah_penduduk->inputdata($data);
      // $this->M_pindah_penduduk->hapusdatakosong();
      
      //untuk menyimpan di table yg berbeda
      for($i=0;$i<sizeof($nik_pengikut);$i++)
      {
          array_push($dataa, array(
            'fk_id_pengikut' => $id_pengikut,
            'nik_pengikut' => $nik_pengikut[$i],
            'hubungan' => $hubungan[$i]
            // 'pendidikan' => $pendidikan[$i]
          ));
      }
      $this->M_pindah_penduduk->inputdata_pengikut($dataa);
      $this->db->query("DELETE FROM `pengikut_pindah` WHERE nik_pengikut = '' OR nik_pengikut is null");

    }

    if ($this->input->post('surat') == $tidakmampu) {
      $data['nik'] = $this->input->post('datanoktp');

      $data['tujuan'] = $this->input->post('tujuantidakmampu');
      $data['no_surat'] = date("Y.m.d");
      $data['tanggaltidak'] = date("Y-m-d");
      $data['status'] = "Request";

    $this->M_tidak_mampu->inputdata($data);
    }

    if ($this->input->post('surat') == $kuasalahan) {
      $data['nik_pemberi_kuasa'] = $this->input->post('datanoktp');
      $query = $this->db->query("SELECT*FROM `no_surat` ")->row();
      $no_surat_old = $query->no_surat;
      $no_surat_now = $no_surat_old+1;
      $this->db->query("UPDATE `no_surat` SET `no_surat` = {$no_surat_now}");

      $data['nik_penerima_kuasa'] = $this->input->post('peneerima');
      $data['keterangan_kuasa'] = $this->input->post('ket');
      $data['tanggal'] = date("Y-m-d");
      $data['no_surat'] = $no_surat_now;

      $id_pengikut = date("Y.m.d.H.i.s");
      $data['fk_id_lahan'] = $id_pengikut;

      if (null !== $this->input->post("nama_saksi")) {
        $nama_saksi = $this->input->post("nama_saksi");
        // $pendidikan = $this->input->post("pendidikan");

        // print_r($nama_saksi);
      } 
      // diganti hapus aja setelah disimpan
      // DELETE FROM `pengikut_pindah` WHERE nama_saksi = '' OR nama_saksi is null
      $dataa = array();

      $data['status'] = "Request";

      $this->M_kuasa_lahan->inputdata($data);
      // $this->M_kuasa_lahan->hapusdatakosong();
      
      //untuk menyimpan di table yg berbeda
      for($i=0;$i<sizeof($nama_saksi);$i++)
      {
          array_push($dataa, array(
            'id_lahan' => $id_pengikut,
            'nama_saksi' => $nama_saksi[$i]
            // 'pendidikan' => $pendidikan[$i]
          ));
      }
      $this->M_kuasa_lahan->inputdata_saksi($dataa);
      $this->db->query("DELETE FROM `lahan` WHERE nama_saksi = '' OR nama_saksi is null");

    }

    if ($this->input->post('surat') == $kuasaakta) {
      $data['nik_pemberi_kuasa'] = $this->input->post('datanoktp');
      $query = $this->db->query("SELECT*FROM `no_surat` ")->row();
      $no_surat_old = $query->no_surat;
      $no_surat_now = $no_surat_old+1;
      $this->db->query("UPDATE `no_surat` SET `no_surat` = {$no_surat_now}");

      $data['nik_penerima_kuasa'] = $this->input->post('datanik_penerima');
      $data['keterangan_kuasa'] = $this->input->post('tujuan');
      $data['tanggal'] = date("Y-m-d");
      $data['no_surat'] = $no_surat_now;

      $data['status'] = "Request";

      $this->M_kuasa_akta->inputdata($data);
    }


  // dan else if setersunya

    // setelah selesai buat surat warga akan diarahkan ke halaman berikutnya. ini opsional bisa dipakai atau enggak, misal setelah klik tombol kirim gk menujuke halaman lain,melainkan tetap disitu di index v_buat_surat

    $data["status"] = "Data Sudah Terkirim. Mohon ambil surat di pelayan kantor desa bulusari dengan membawa bukti ktp atau kartu keluarga yang sesuai";
    $this->load->view('warga/v_selesai_buat_surat', $data);
    // redirect('C_buat_surat');
    }else{
      $data["status"] = "Nomor Nik Tidak Tersedia di Database. Cek kembali nomor KTP anda";
      $this->load->view('warga/v_selesai_buat_surat', $data);
    }
  }
  
}