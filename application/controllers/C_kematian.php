<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kematian extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }


    $this->load->model('M_kematian');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Kematian"; 

    $data['data_kematian'] = $this->M_kematian->tampil_data();

    $this->load->view('admin/kematian/v_data_kematian', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Kematian";

    $this->load->view('admin/kematian/v_tambah_data_kematian', $data);

  }

  public function simpan()
  {
  # code mengambil data dari inputan user.
    $data['nik'] = $this->input->post('datanik');
    $data['hari'] = $this->input->post('hari');
    $data['maksud_pembuatan'] = $this->input->post("maksudpembuatan");
    $data['tanggal'] = $this->input->post('tanggal');
    $data['sebab'] = $this->input->post('sebab');
    $data['no_surat'] = date("Y.m.d");
    // $data['tanggal'] = date("Y-m-d");
    $data['status'] = "Request";

    $this->M_kematian->inputdata($data);

    redirect('C_kematian');
  }

  public function lihat($dataid_kematian)
  {
    $data['namaHalaman']="Detail Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_kematian->spefisik($dataid_kematian);

    $this->load->view('admin/kematian/v_lihat_data_kematian', $data);
  }

  public function lihatedit($dataid_kematian)
  {
    $data['namaHalaman']="Edit Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_kematian->spefisik($dataid_kematian);

    $this->load->view('admin/kematian/v_edit_data_kematian', $data);
  }

  public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_kematian = $this->input->post('dataid_kematian');
  // data post niok disimpan pada varibael yang berbeda dengan data array, soalnya digunakan untuk kondisi whre di modal
    $data['nik'] = $this->input->post('datanik');
    $data['maksud_pembuatan'] = $this->input->post("maksudpembuatan");
    $data['hari'] = $this->input->post('hari');
    $data['tanggal'] = $this->input->post('tanggal');
    $data['sebab'] = $this->input->post('sebab');
    $data['status'] = "Request";

    $this->M_kematian->edit_data($data, $id_kematian);

    redirect('C_kematian');
  }

  public function hapus($dataid_kematian)
  {
  # code...
    $this->M_kematian->hapus_data($dataid_kematian);
    redirect('C_kematian');
  }

  public function statusrequest($dataid_kematian)
  {
  # code...
    $this->M_kematian->statusrequest($dataid_kematian);
    redirect('C_kematian');
  }

  public function statusvalidasi($dataid_kematian)
  {
  # code...
    $this->M_kematian->statusvalidasi($dataid_kematian);
    redirect('C_kematian');
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
    $this->pdf->load_view('admin/kematian/surat_kematian', $data);


  }

  public function validasi($id_kematian)
  // setelah dikirimdisiniditerimadengan cara diatas, value 10 disimpan di variabel $id_beda_nama
  {
    # code...
    $data['namaHalaman']="Validasi";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih. 
    // kemudian ambil data dengan memanfaatkan model m beda nama, variable $id_beda_nama yg berisi 10 dikirim ke model tsb untuk mendapatkan data
    $data['data_penduduk'] = $this->M_kematian->spefisik($id_kematian);

    $this->load->library('pdf');

    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "kematian_penduduk.pdf";
    
    $this->pdf->load_view('admin/kematian/v_kematian', $data);

    // $this->load->view('admin/kematian/kematian', $data);
    // setelah mendaptakan data dari modelsekarangdata dikirimke viewmenggunakan kode diatas

  }
  
}