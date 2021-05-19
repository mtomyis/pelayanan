<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kuasa_akta extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }


    $this->load->model('M_kuasa_akta');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Kuasa Akta"; 

    $data['data_pemberi_kuasa_akta'] = $this->M_kuasa_akta->tampil_data_pemberi();
    $data['data_penerima_kuasa_akta'] = $this->M_kuasa_akta->tampil_data_penerima();

    $this->load->view('admin/kuasa_akta/v_data_kuasa_akta', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Kuasa Akta";

    $this->load->view('admin/kuasa_akta/v_tambah_data_kuasa_akta', $data);

  }

  public function simpan()
  {
    //untuk mendapatkan no surat yang dulu, kemudian di tambah 1 untuk di pakai surat terbaru, dan no surat terbaru akan disimpan
    $query = $this->db->query("SELECT*FROM `no_surat` ")->row();
    $no_surat_old = $query->no_surat;
    $no_surat_now = $no_surat_old+1;
    $this->db->query("UPDATE `no_surat` SET `no_surat` = {$no_surat_now}");

    $data['nik_pemberi_kuasa'] = $this->input->post('datanik_pemberi');
    $data['nik_penerima_kuasa'] = $this->input->post('datanik_penerima');
    $data['keterangan_kuasa'] = $this->input->post('tujuan');
    $data['tanggal'] = date("Y-m-d");
    $data['no_surat'] = $no_surat_now;

    $data['status'] = "Request";

    $this->M_kuasa_akta->inputdata($data);

    redirect('C_kuasa_akta');
  }

  public function lihat($dataid_kuasa_akta)
  {
    $data['namaHalaman']="Detail Data Surat";

    $data['data_pemberi_kuasa_akta'] = $this->M_kuasa_akta->spefisik_data_pemberi($dataid_kuasa_akta);
    $data['data_penerima_kuasa_akta'] = $this->M_kuasa_akta->spefisik_data_penerima($dataid_kuasa_akta);

    $this->load->view('admin/kuasa_akta/v_lihat_data_kuasa_akta', $data);
  }

  public function lihatedit($dataid_kuasa_akta)
  {

    $data['namaHalaman']="Edit Data Surat";
    $data['data_pemberi_kuasa_akta'] = $this->M_kuasa_akta->spefisik_data_pemberi($dataid_kuasa_akta);
    $data['data_penerima_kuasa_akta'] = $this->M_kuasa_akta->spefisik_data_penerima($dataid_kuasa_akta);
    $this->load->view('admin/kuasa_akta/v_edit_data_kuasa_akta', $data);
  }

  public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_kuasa_akta = $this->input->post('id_kuasa_akta');

    $data['nik_pemberi_kuasa'] = $this->input->post('datanik_pemberi_kuasa');
    $data['nik_penerima_kuasa'] = $this->input->post('datanik_penerima_kuasa');
    $data['keterangan_kuasa'] = $this->input->post('tujuan');

    $this->M_kuasa_akta->edit_data($data, $id_kuasa_akta);
    redirect('C_kuasa_akta');
  }


  public function hapus($dataid_kuasa_akta)
  {
    $this->M_kuasa_akta->hapus_data($dataid_kuasa_akta);

    redirect('C_kuasa_akta');

  }

  public function statusrequest($dataid_kuasa_akta)
  {
  # code...
    $this->M_kuasa_akta->statusrequest($dataid_kuasa_akta);
    redirect('C_kuasa_akta');
  }

  public function statusvalidasi($dataid_kuasa_akta)
  {
  # code...
    $this->M_kuasa_akta->statusvalidasi($dataid_kuasa_akta);
    redirect('C_kuasa_akta');
  }


  public function validasi($dataid_kuasa_akta)
  // setelah dikirimdisiniditerimadengan cara diatas, value 10 disimpan di variabel $id_kuasa_akta
  {
    # code...
    $data['namaHalaman']="Surat Kuasa Akta";

    $data['data_pemberi_kuasa_akta'] = $this->M_kuasa_akta->spefisik_data_pemberi($dataid_kuasa_akta);
    $data['data_penerima_kuasa_akta'] = $this->M_kuasa_akta->spefisik_data_penerima($dataid_kuasa_akta);

    
    $this->load->library('pdf');

    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "kuasa akta.pdf";
    
    $this->pdf->load_view('admin/kuasa_akta/v_kuasa_akta', $data);
    // $this->load->view('admin/kuasa_akta/v_kuasa_akta', $data);
    // setelah mendaptakan data dari modelsekarangdata dikirimke viewmenggunakan kode diatas

  }
  
}