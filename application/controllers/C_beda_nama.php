<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beda_nama extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }

     //load file class M_data_ktp dari folder model
    // $this->load->model('M_data_ktp');
    $this->load->model('M_beda_nama');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Beda Nama"; 

    $data['data_beda_nama'] = $this->M_beda_nama->tampil_data();
    // $dt["data"] = $this->M_beda_nama->tampil_data();

    $this->load->view('admin/beda_nama/v_data_beda_nama', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Beda Nama";

    $this->load->view('admin/beda_nama/v_tambah_data_beda_nama', $data);

  }

  public function simpan()
  {
  # code mengambil data dari inputan user.
    $data['nik'] = $this->input->post('datanik');
    $data['nama_baru'] = $this->input->post('datanama');
    $data['no_surat'] = date("Y.m.d");
    $data['tanggal'] = date("Y-m-d");
    $data['maksud_pembuatan'] = $this->input->post("a");
    $data['status'] = "Request";

    $this->M_beda_nama->inputdata($data);

    redirect('C_beda_nama');
  }

  public function lihat($dataid_beda_nama)
  {
    $data['namaHalaman']="Detail Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_beda_nama->spefisik($dataid_beda_nama);

    $this->load->view('admin/beda_nama/v_lihat_data_beda_nama', $data);
  }

  public function lihatedit($dataid_beda_nama)
  {
    $data['namaHalaman']="Edit Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_beda_nama->spefisik($dataid_beda_nama);

    $this->load->view('admin/beda_nama/v_edit_data_beda_nama', $data);
  }

  public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_beda_nama = $this->input->post('dataid_beda_nama');
  // data post niok disimpan pada varibael yang berbeda dengan data array, soalnya digunakan untuk kondisi whre di modal
    $data['nik'] = $this->input->post('datanik');
    $data['nama_baru'] = $this->input->post('datanama');
    $data['maksud_pembuatan'] = $this->input->post("maksudpembuatan");

    $this->M_beda_nama->edit_data($data, $id_beda_nama);

    redirect('C_beda_nama');
  }

  public function hapus($dataid_beda_nama)
  {
  # code...
    $this->M_beda_nama->hapus_data($dataid_beda_nama);
    redirect('C_beda_nama');
  }

  public function statusrequest($dataid_beda_nama)
  {
  # code...
    $this->M_beda_nama->statusrequest($dataid_beda_nama);
    redirect('C_beda_nama');
  }

  public function statusvalidasi($dataid_beda_nama)
  {
  # code...
    $this->M_beda_nama->statusvalidasi($dataid_beda_nama);
    redirect('C_beda_nama');
  }
  
  public function validasi($id_beda_nama)
  // setelah dikirimdisiniditerimadengan cara diatas, value 4 disimpan di variabel $id_beda_nama
  {
    # code...
    $data['namaHalaman']="Validasi";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih. 
    // kemudian ambil data dengan memanfaatkan model m beda nama, variable $id_beda_nama yg berisi 10 dikirim ke model tsb untuk mendapatkan data
    $data['data_penduduk'] = $this->M_beda_nama->spefisik($id_beda_nama);

    $this->load->library('pdf');

    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "beda_nama_penduduk.pdf";
    
    $this->pdf->load_view('admin/beda_nama/v_beda_nama', $data);
    // $this->load->view('admin/beda_nama/v_beda_nama', $data);
    
    // setelah mendaptakan data dari modelsekarangdata dikirimke viewmenggunakan kode diatas

  }
  
}
