<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tidak_mampu extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }

    //load file class M_data_ktp dari folder model
    $this->load->model('M_tidak_mampu');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Keterangan Tidak Mampu"; 

    $data['data_tidak_mampu'] = $this->M_tidak_mampu->tampil_data();

    $this->load->view('admin/tidak_mampu/v_data_tidak_mampu', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Keterangan Tidak Mampu";

    $this->load->view('admin/tidak_mampu/v_tambah_data_tidak_mampu', $data);

  }

  public function simpan()
  {
  # code mengambil data dari inputan user.
    $data['nik'] = $this->input->post('datanik');
    $data['tujuan'] = $this->input->post('tujuan');
    $data['no_surat'] = date("Y.m.d");
    $data['tanggaltidak'] = date("Y-m-d");
    $data['status'] = "Request";

    $this->M_tidak_mampu->inputdata($data);

    redirect('C_tidak_mampu');
  }

  public function lihat($dataid_tidak_mampu)
  {
    $data['namaHalaman']="Detail Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_tidak_mampu->spefisik($dataid_tidak_mampu);

    $this->load->view('admin/tidak_mampu/v_lihat_data_tidak_mampu', $data);
  }

  public function lihatedit($dataid_tidak_mampu)
  {
    $data['namaHalaman']="Edit Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_tidak_mampu->spefisik($dataid_tidak_mampu);

    $this->load->view('admin/tidak_mampu/v_edit_data_tidak_mampu', $data);
  }

    public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_tidak_mampu = $this->input->post('dataid_tidakmampus');
  // data post niok disimpan pada varibael yang berbeda dengan data array, soalnya digunakan untuk kondisi whre di modal
    $data['nik'] = $this->input->post('bg');
    $data['tujuan'] = $this->input->post('cv');

    $this->M_tidak_mampu->edit_data($data, $id_tidak_mampu);

    redirect('C_tidak_mampu');
  }

  public function hapus($dataid_tidak_mampu)
  {
  # code...
    $this->M_tidak_mampu->hapus_data($dataid_tidak_mampu);
    redirect('C_tidak_mampu');
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
    $this->pdf->load_view('admin/tidak_mampu/surat_tidak_mampu', $data);


  }

  public function statusrequest($dataid_tidakmampu)
  {
  # code...
    $this->M_tidak_mampu->statusrequest($dataid_tidakmampu);
    redirect('C_tidak_mampu');
  }

  public function statusvalidasi($dataid_tidakmampu)
  {
  # code...
    $this->M_tidak_mampu->statusvalidasi($dataid_tidakmampu);
    redirect('C_tidak_mampu');
  }

  public function validasi($id_tidak_mampu)
  // setelah dikirimdisiniditerimadengan cara diatas, value 10 disimpan di variabel $id_beda_nama
  {
    # code...
    $data['namaHalaman']="Validasi";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih. 
    // kemudian ambil data dengan memanfaatkan model m beda nama, variable $id_beda_nama yg berisi 10 dikirim ke model tsb untuk mendapatkan data
    $data['data_penduduk'] = $this->M_tidak_mampu->spefisik($id_tidak_mampu);

    $this->load->library('pdf');

    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "tidak_mampu_penduduk.pdf";
    
    $this->pdf->load_view('admin/tidak_mampu/v_tidak_mampu', $data);

    // $this->load->view('admin/tidak_mampu/tidak_mampu', $data);
    // setelah mendaptakan data dari modelsekarangdata dikirimke viewmenggunakan kode diatas

  }
  
}