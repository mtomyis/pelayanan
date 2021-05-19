<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penghasilan extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }


    $this->load->model('M_penghasilan');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Penghasilan"; 

    $data['data_penghasilan'] = $this->M_penghasilan->tampil_data();

    $this->load->view('admin/penghasilan/v_data_penghasilan', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Penghasilan";

    $this->load->view('admin/penghasilan/v_tambah_data_penghasilan', $data);

  }

  public function simpan()
  {
  # code mengambil data dari inputan user.
    $data['nik'] = $this->input->post('datanik');
    $data['penghasilan_sebulan'] = $this->input->post('penghasilansebulan');
    $data['maksud_pembuatan'] = $this->input->post('maksudpembuatan');
    $data['no_surat'] = date("Y.m.d");
    $data['tanggal'] = date("Y-m-d");
    $data['status'] = "Request";

    $this->M_penghasilan->inputdata($data);

    redirect('C_penghasilan');
  }

  public function lihat($dataid_penghasilan)
  {
    $data['namaHalaman']="Detail Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_penghasilan->spefisik($dataid_penghasilan);

    $this->load->view('admin/penghasilan/v_lihat_data_penghasilan', $data);
  }

  public function lihatedit($dataid_penghasilan)
  {
    $data['namaHalaman']="Edit Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_penghasilan->spefisik($dataid_penghasilan);

    $this->load->view('admin/penghasilan/v_edit_data_penghasilan', $data);
  }

  public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_penghasilan = $this->input->post('dataid_penghasilan');
  // data post niok disimpan pada varibael yang berbeda dengan data array, soalnya digunakan untuk kondisi whre di modal
    $data['nik'] = $this->input->post('datanik');
    $data['penghasilan_sebulan'] = $this->input->post('penghasilansebulan');
    $data['maksud_pembuatan'] = $this->input->post('maksudpembuatan');
    $data['status'] = "Request";

    $this->M_penghasilan->edit_data($data, $id_penghasilan);

    redirect('C_penghasilan');
  }

  public function hapus($dataid_penghasilan)
  {
  # code...
    $this->M_penghasilan->hapus_data($dataid_penghasilan);
    redirect('C_penghasilan');
  }

  public function validasi($id_penghasilan)
  // setelah dikirimdisiniditerimadengan cara diatas, value 10 disimpan di variabel $id_beda_nama
  {
    # code...
    $data['namaHalaman']="Validasi";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih. 
    // kemudian ambil data dengan memanfaatkan model m beda nama, variable $id_beda_nama yg berisi 10 dikirim ke model tsb untuk mendapatkan data
    $data['data_penduduk'] = $this->M_penghasilan->spefisik($id_penghasilan);

    $this->load->library('pdf');

    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "penghasilan_penduduk.pdf";
    
    $this->pdf->load_view('admin/penghasilan/v_penghasilan', $data);

    // $this->load->view('admin/penghasilan/penghasilan', $data);
    // setelah mendaptakan data dari modelsekarangdata dikirimke viewmenggunakan kode diatas

  }

  public function statusrequest($dataid_penghasilan)
  {
  # code...
    $this->M_penghasilan->statusrequest($dataid_penghasilan);
    redirect('C_penghasilan');
  }

  public function statusvalidasi($dataid_penghasilan)
  {
  # code...
    $this->M_penghasilan->statusvalidasi($dataid_penghasilan);
    redirect('C_penghasilan');
  }
  
}

