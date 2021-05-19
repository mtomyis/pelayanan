<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kuasa_lahan extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }


    $this->load->model('M_kuasa_lahan');
  }
  
  public function index()
  {
    $data["namaHalaman"] = "Surat Kuasa Lahan"; 

    $data['data_pemberi_kuasa_lahan'] = $this->M_kuasa_lahan->tampil_data_pemberi();
    $data['data_penerima_kuasa_lahan'] = $this->M_kuasa_lahan->tampil_data_penerima();

    $this->load->view('admin/kuasa_lahan/v_data_kuasa_lahan', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Buat Surat Kuasa Lahan";

    $this->load->view('admin/kuasa_lahan/v_tambah_data_kuasa_lahan', $data);

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

    redirect('C_kuasa_lahan');
  }

  public function lihat($dataid_kuasa_lahan)
  {
    $data['namaHalaman']="Detail Data Surat";
    
    $dataid = $this->M_kuasa_lahan->spefisik_data_pemberi($dataid_kuasa_lahan);
    $dataid=$dataid->fk_id_lahan;

    $data['data_kuasa_lahan_pengikut'] = $this->M_kuasa_lahan->spefisik_pengikut($dataid);
  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_pemberi_kuasa_lahan'] = $this->M_kuasa_lahan->spefisik_data_pemberi($dataid_kuasa_lahan);
    $data['data_penerima_kuasa_lahan'] = $this->M_kuasa_lahan->spefisik_data_penerima($dataid_kuasa_lahan);

    $this->load->view('admin/kuasa_lahan/v_lihat_data_kuasa_lahan', $data);
  }

  public function lihatedit($dataid_kuasa_lahan)
  {

    $data['namaHalaman']="Edit Data Surat";
    $dataid = $this->M_kuasa_lahan->spefisik_data_pemberi($dataid_kuasa_lahan);
    $dataid=$dataid->fk_id_lahan;
  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_pemberi_kuasa_lahan'] = $this->M_kuasa_lahan->spefisik_data_pemberi($dataid_kuasa_lahan);
    $data['data_penerima_kuasa_lahan'] = $this->M_kuasa_lahan->spefisik_data_penerima($dataid_kuasa_lahan);
    
    $data['data_kuasa_lahan_pengikut'] = $this->M_kuasa_lahan->spefisik_pengikut($dataid);

    $this->load->view('admin/kuasa_lahan/v_edit_data_kuasa_lahan', $data);
  }

  public function simpanedit()
  {
  # code mengambil data dari inputan user.
    $id_kuasa_lahan = $this->input->post('id_kuasa_lahan');

    $data['nik_pemberi_kuasa'] = $this->input->post('datanik_pemberi_kuasa');
    $data['nik_penerima_kuasa'] = $this->input->post('datanik_penerima_kuasa');
    $data['keterangan_kuasa'] = $this->input->post('tujuan');

    $this->M_kuasa_lahan->edit_data($data, $id_kuasa_lahan);

    if (null !== $this->input->post("id")) {
      $nama_saksi = $this->input->post("nama_saksi");
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
          'nama_saksi' => $nama_saksi[$i]
          // 'pendidikan' => $pendidikan[$i]
        ));
    }
    $this->db->update_batch('lahan', $dataa, 'id');
    // $this->M_kuasa_lahan->edit_data_pengikut($dataa, $id);
    redirect('C_kuasa_lahan');
  }


  public function hapus($dataid_kuasa_lahan)
  {
    $dataid = $this->M_kuasa_lahan->spefisik_data_pemberi($dataid_kuasa_lahan);
  # code...
    $dataid=$dataid->fk_id_lahan;
    // var_dump($dataid);
    // var_dump($dataid);
    // echo $dataid;
    $this->M_kuasa_lahan->hapus_data_pengikut($dataid);
    $this->M_kuasa_lahan->hapus_data($dataid_kuasa_lahan);

    redirect('C_kuasa_lahan');

  }

  public function statusrequest($dataid_kuasa_lahan)
  {
  # code...
    $this->M_kuasa_lahan->statusrequest($dataid_kuasa_lahan);
    redirect('C_kuasa_lahan');
  }

  public function statusvalidasi($dataid_kuasa_lahan)
  {
  # code...
    $this->M_kuasa_lahan->statusvalidasi($dataid_kuasa_lahan);
    redirect('C_kuasa_lahan');
  }


  public function validasi($dataid_kuasa_lahan)
  // setelah dikirimdisiniditerimadengan cara diatas, value 10 disimpan di variabel $id_kuasa_lahan
  {
    # code...
    $data['namaHalaman']="Surat Kuasa Lahan";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih. 
    // kemudian ambil data dengan memanfaatkan model m Kuasa Lahan, variable $id_kuasa_lahan yg berisi 10 dikirim ke model tsb untuk mendapatkan data
    $dataid = $this->M_kuasa_lahan->spefisik_data_pemberi($dataid_kuasa_lahan);
    $dataid=$dataid->fk_id_lahan;

    $data['data_kuasa_lahan_pengikut'] = $this->M_kuasa_lahan->spefisik_pengikut($dataid);
  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
    $data['data_pemberi_kuasa_lahan'] = $this->M_kuasa_lahan->spefisik_data_pemberi($dataid_kuasa_lahan);
    $data['data_penerima_kuasa_lahan'] = $this->M_kuasa_lahan->spefisik_data_penerima($dataid_kuasa_lahan);

    
    $this->load->library('pdf');

    $this->pdf->setPaper('LEGAL', 'potrait');
    $this->pdf->filename = "kuasa lahan.pdf";
    
    $this->pdf->load_view('admin/kuasa_lahan/v_kuasa_lahan', $data);
    // $this->load->view('admin/kuasa_lahan/v_kuasa_lahan', $data);
    // setelah mendaptakan data dari modelsekarangdata dikirimke viewmenggunakan kode diatas

  }
  
}