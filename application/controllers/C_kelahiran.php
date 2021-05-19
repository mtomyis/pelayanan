<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelahiran extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }

 
    $this->load->model('M_kelahiran');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Kelahiran"; 

    $data['data_kelahiran'] = $this->M_kelahiran->tampil_data();

    $this->load->view('admin/kelahiran/v_data_kelahiran', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Kelahiran";

    $this->load->view('admin/kelahiran/v_tambah_data_kelahiran', $data);

  }

  public function simpan()
  {
  # code mengambil data dari inputan user.
    $data['nik'] = $this->input->post('datanik');
    $data['hari'] = $this->input->post('hari');
    $data['no_surat'] = date("Y.m.d");
    $data['tanggalsurat'] = date("Y-m-d");
    $data['tanggal'] = $this->input->post('tanggal');
    $data['di'] = $this->input->post("di");
    $data['anak_ke'] = $this->input->post("anakke");
    $data['jenis_kelamink'] = $this->input->post("jeniskelaminku");
    $data['nama_anak'] = $this->input->post("namaanak");
    $data['nama_ibuk_lahir'] = $this->input->post("av");
    $data['istri_dari'] = $this->input->post("istridari");
    $data['alamat'] = $this->input->post("alamat");
    $data['nama_pelapor'] = $this->input->post("namapelapor");
    $data['hubungan_dengan_bayi'] = $this->input->post("hubungandenganbayi");
    $data['status'] = "Request";

    $this->M_kelahiran->inputdata($data);

    redirect('C_kelahiran');
  }

  public function lihat($dataid_kelahiran)
  {
    $data['namaHalaman']="Detail Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_kelahiran->spefisik($dataid_kelahiran);

    $this->load->view('admin/kelahiran/v_lihat_data_kelahiran', $data);
  }

  public function lihatedit($dataid_kelahiran)
  {
    $data['namaHalaman']="Edit Data Surat";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_penduduk'] = $this->M_kelahiran->spefisik($dataid_kelahiran);

    $this->load->view('admin/kelahiran/v_edit_data_kelahiran', $data);
  }

  public function statusrequest($dataid_kelahiran)
  {
  # code...
    $this->M_kelahiran->statusrequest($dataid_kelahiran);
    redirect('C_kelahiran');
  }

  public function statusvalidasi($dataid_kelahiran)
  {
  # code...
    $this->M_kelahiran->statusvalidasi($dataid_kelahiran);
    redirect('C_kelahiran');
  }

  public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_kelahiran = $this->input->post('dataid_kelahiran');
  // data post niok disimpan pada varibael yang berbeda dengan data array, soalnya digunakan untuk kondisi whre di modal
    $data['nik'] = $this->input->post('datanik');
    $data['hari'] = $this->input->post('hari');
    $data['tanggal'] = $this->input->post('tanggal');
    $data['di'] = $this->input->post("di");
    $data['anak_ke'] = $this->input->post("anakke");
    $data['jenis_kelamink'] = $this->input->post("jeniskelamink");
    $data['nama_anak'] = $this->input->post("namaanak");
    $data['nama_ibuk_lahir'] = $this->input->post("av");
    $data['istri_dari'] = $this->input->post("istridari");
    $data['alamat'] = $this->input->post("alamat");
    $data['nama_pelapor'] = $this->input->post("namapelapor");
    $data['hubungan_dengan_bayi'] = $this->input->post("hubungandenganbayi");
    $data['status'] = "Request";

    $this->M_kelahiran->edit_data($data, $id_kelahiran);

    redirect('C_kelahiran');
  }

  public function hapus($dataid_kelahiran)
  {
  # code...
    $this->M_kelahiran->hapus_data($dataid_kelahiran);
    redirect('C_kelahiran');
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
    $this->pdf->load_view('admin/kelahiran/surat_kelahiran', $data);


  }

  public function validasi($id_kelahiran)
  // setelah dikirimdisiniditerimadengan cara diatas, value 10 disimpan di variabel $id_beda_nama
  {
    # code...
    $data['namaHalaman']="Validasi";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih. 
    // kemudian ambil data dengan memanfaatkan model m beda nama, variable $id_beda_nama yg berisi 10 dikirim ke model tsb untuk mendapatkan data
    $data['data_penduduk'] = $this->M_kelahiran->spefisik($id_kelahiran);

    $this->load->library('pdf');

    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "kelahiran.pdf";
    
    // $this->load->view('admin/kelahiran/v_kelahiran', $data);

    $this->pdf->load_view('admin/kelahiran/v_kelahiran', $data);


  }
  
}
