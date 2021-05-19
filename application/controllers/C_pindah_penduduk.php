<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pindah_penduduk extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }


    $this->load->model('M_pindah_penduduk');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Pindah Penduduk"; 

    $data['data_pindah_penduduk'] = $this->M_pindah_penduduk->tampil_data();

    $this->load->view('admin/pindah_penduduk/v_data_pindah_penduduk', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Pindah Penduduk";

    $this->load->view('admin/pindah_penduduk/v_tambah_data_pindah_penduduk', $data);

  }

  public function simpan()
  {
    //untuk mendapatkan no surat yang dulu, kemudian di tambah 1 untuk di pakai surat terbaru, dan no surat terbaru akan disimpan
    $query = $this->db->query("SELECT*FROM `no_surat` ")->row();
    $no_surat_old = $query->no_surat;
    $no_surat_now = $no_surat_old+1;
    $this->db->query("UPDATE `no_surat` SET `no_surat` = {$no_surat_now}");

    $data['nik'] = $this->input->post('datanik');
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
      // $pendidikan = $this->input->post("pendidikan");

      // print_r($nik_pengikut);
    } 
    // diganti hapus aja setelah disimpan
    // DELETE FROM `pengikut_pindah` WHERE nik_pengikut = '' OR nik_pengikut is null
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

    redirect('C_pindah_penduduk');
  }

  public function lihat($dataid_pindah_penduduk)
  {
    $data['namaHalaman']="Detail Data Surat";
    
    $dataid = $this->M_pindah_penduduk->spefisik($dataid_pindah_penduduk);
    $dataid=$dataid->id_pengikut;

    $data['data_pindah_penduduk_pengikut'] = $this->M_pindah_penduduk->spefisik_pengikut($dataid);
  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_pindah_penduduk'] = $this->M_pindah_penduduk->spefisik($dataid_pindah_penduduk);

    $this->load->view('admin/pindah_penduduk/v_lihat_data_pindah_penduduk', $data);
  }

  public function lihatedit($dataid_pindah_penduduk)
  {

    $data['namaHalaman']="Edit Data Surat";
    $dataid = $this->M_pindah_penduduk->spefisik($dataid_pindah_penduduk);
    $dataid=$dataid->id_pengikut;
  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_pindah_penduduk'] = $this->M_pindah_penduduk->spefisik($dataid_pindah_penduduk);
    $data['data_pindah_penduduk_pengikut'] = $this->M_pindah_penduduk->spefisik_pengikut($dataid);

    $this->load->view('admin/pindah_penduduk/v_edit_data_pindah_penduduk', $data);
  }

  public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_pindah_penduduk = $this->input->post('dataid_pindah_penduduk');
    // data post niok disimpan pada varibael yang berbeda dengan data array, soalnya digunakan untuk kondisi whre di modal
    $data['nik'] = $this->input->post('datanik');
    $data['desa_baru'] = $this->input->post('desa_baru');
    $data['kecamatan_baru'] = $this->input->post('kecamatan_baru');
    $data['kabupaten_baru'] = $this->input->post('kabupaten_baru');
    $data['provinsi_baru'] = $this->input->post('provinsi_baru');
    $data['tujuan'] = $this->input->post('tujuan');

    $this->M_pindah_penduduk->edit_data($data, $id_pindah_penduduk);

    if (null !== $this->input->post("id")) {
      $nik_pengikut = $this->input->post("nik_pengikutt");
      $hubungan = $this->input->post("hubungan");
      // $pendidikan = $this->input->post("pendidikant");
      $id = $this->input->post("id");

      // print_r($nik_pengikut);
    } 
    $dataa = array();
    
    //untuk menyimpan di table yg berbeda
    for($i=0;$i<sizeof($id);$i++)
    {
        array_push($dataa, array(
          'id' => $id[$i],
          'nik_pengikut' => $nik_pengikut[$i],
          'hubungan' => $hubungan[$i]
          // 'pendidikan' => $pendidikan[$i]
        ));
    }
    $this->db->update_batch('pengikut_pindah', $dataa, 'id');
    // $this->M_pindah_penduduk->edit_data_pengikut($dataa, $id);
    redirect('C_pindah_penduduk');
  }


  public function hapus($dataid_pindah_penduduk)
  {
    $dataid = $this->M_pindah_penduduk->spefisik($dataid_pindah_penduduk);
  # code...
    $dataid=$dataid->id_pengikut;
    // var_dump($dataid);
    // var_dump($dataid);
    // echo $dataid;
    $this->M_pindah_penduduk->hapus_data_pengikut($dataid);
    $this->M_pindah_penduduk->hapus_data($dataid_pindah_penduduk);

    redirect('C_pindah_penduduk');

  }

  public function statusrequest($dataid_pindah_penduduk)
  {
  # code...
    $this->M_pindah_penduduk->statusrequest($dataid_pindah_penduduk);
    redirect('C_pindah_penduduk');
  }

  public function statusvalidasi($dataid_pindah_penduduk)
  {
  # code...
    $this->M_pindah_penduduk->statusvalidasi($dataid_pindah_penduduk);
    redirect('C_pindah_penduduk');
  }


  public function laporan_pdf(){

    $data = array(
        "dataku" => array(
            "nama" => "Petani Kode",
            "url" => "http://petanikode.com"
        )
    );

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('admin/pindah_penduduk/surat_pindah_penduduk', $data);


  }

  public function validasi($dataid_pindah_penduduk)
  // setelah dikirimdisiniditerimadengan cara diatas, value 10 disimpan di variabel $id_pindah_penduduk
  {
    # code...
    $data['namaHalaman']="Surat Pindah Penduduk";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih. 
    // kemudian ambil data dengan memanfaatkan model m Pindah Penduduk, variable $id_pindah_penduduk yg berisi 10 dikirim ke model tsb untuk mendapatkan data
    $dataid = $this->M_pindah_penduduk->spefisik($dataid_pindah_penduduk);
    $dataid=$dataid->id_pengikut;

    $data['data_pindah_penduduk_pengikut'] = $this->M_pindah_penduduk->spefisik_pengikut($dataid);
  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_pindah_penduduk'] = $this->M_pindah_penduduk->spefisik($dataid_pindah_penduduk);

    $this->load->library('pdf');
    
    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "pindah_penduduk.pdf";
    
    $this->pdf->load_view('admin/pindah_penduduk/v_pindah_penduduk', $data);
    // $this->load->view('admin/pindah_penduduk/v_pindah_penduduk', $data);
    // setelah mendaptakan data dari modelsekarangdata dikirimke viewmenggunakan kode diatas

  }
  
}