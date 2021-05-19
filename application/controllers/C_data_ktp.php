<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_data_ktp extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }

    //load file class M_data_ktp dari folder model
    $this->load->model('M_data_ktp');
    
  }

  public function index()
  {
    $data["namaHalaman"] = "Data Penduduk"; 
    // ini nama halaman

    $data['data_penduduk'] = $this->M_data_ktp->tampil_data(); 

    $this->load->view('admin/penduduk/v_data_ktp', $data);
  }

  public function pindahtambahdata()
  {
    $data["namaHalaman"] = "Tambah Data Penduduk";

    $this->load->view('admin/penduduk/v_tambah_data_ktp', $data);

  }

  public function uploadcsv()
  {
    $data["namaHalaman"] = "Upload Data Penduduk";

    $this->load->view('admin/penduduk/v_upload_data_ktp', $data);
  }

  public function aksi_upload()
  {
      if($this->input->post('upload') != NULL ){ 
        $data = array(); 
        if(!empty($_FILES['file']['name'])){ 
          // Set preference 
          $config['upload_path'] = 'upload/'; 
          $config['allowed_types'] = 'csv'; 
          $config['max_size'] = '2000'; // max_size in kb 
          $config['file_name'] = $_FILES['file']['name']; 

          // Load upload library 
          $this->load->library('upload',$config); 
   
          // File upload
          if($this->upload->do_upload('file')){ 
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name']; 

            // Reading file
            $file = fopen("upload/".$filename,"r");
            $i = 0;

            $importData_arr = array();
               
            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);

                for ($c=0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file);

            $skip = 0;

            // insert import data
            foreach($importData_arr as $userdata){
                if($skip != 0){
                    $this->M_data_ktp->insertRecord($userdata);
                }
                $skip ++;
            }
              $data['response'] = 'successfully uploaded '.$filename;

            }else{ 
              $data['response'] = 'failed save file into server'; 
            } 
          }else{ 
            $data['response'] = 'file bermasalah'; 
          } 
          // load view 
          $this->load->view('admin/penduduk/v_upload_data_ktp', $data);
        }else{
          // load view 
      $this->load->view('admin/penduduk/v_upload_data_ktp');
      }
     
  }

public function simpan()
{
  # code mengambil data dari inputan user.
  $data['nik'] = $this->input->post('datanik');
  $data['nama_penduduk'] = $this->input->post('datanama');
  $data['tempat_lahir'] = $this->input->post('datatempat_lahir');
  $data['tgl_lahir'] = $this->input->post('datatgl_lahir');
  $data['fullalamat'] = $this->input->post('datafullalamat');
  $data['agama'] = $this->input->post('dataagama');
  $data['jenis_kelamin'] = $this->input->post('datajenis_kelamin');
  $data['nama_bapak'] = $this->input->post('datanama_bapak');
  $data['nama_ibuk'] = $this->input->post('datanama_ibuk');
  $data['pendidikan'] = $this->input->post('datapendidikan');
  $data['pekerjaan'] = $this->input->post('datapekerjaan');
  $data['status_perkawinan'] = $this->input->post('dataperkawinan');
  $data['kewarganegaraan'] = $this->input->post('datakewarganegaraan');
  $data['golongan_darah'] = $this->input->post('datagolongan_darah');
  $data['no_tlpn'] = $this->input->post('datano_tlpn');
  $data['fullalamat'] = $this->input->post('dataalamat');


  $this->M_data_ktp->inputdata($data);

  redirect('C_data_ktp');
}

public function lihat($datanik)
{
  $data['namaHalaman']="Detail Data Penduduk";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
  $data['data_penduduk'] = $this->M_data_ktp->spefisik($datanik);

  $this->load->view('admin/penduduk/v_lihat_data_ktp', $data);
}

public function lihatedit($datanik)
{
  $data['namaHalaman']="Edit Data Penduduk";

  # code ambil data spesifik penduduk dengan memanfaatkan nik yanhg telah dipilih.
  $data['data_penduduk'] = $this->M_data_ktp->spefisik($datanik);

  $this->load->view('admin/penduduk/v_edit_data_ktp', $data);
}

public function simpanedit()
{
  # code mengambil data dari inputan user.
  $nik = $this->input->post('datanik');
  // data post niok disimpan pada varibael yang berbeda dengan data array, soalnya digunakan untuk kondisi whre di modal
  $data['nama_penduduk'] = $this->input->post('datanama');
  $data['tempat_lahir'] = $this->input->post('datatempat_lahir');
  $data['tgl_lahir'] = $this->input->post('datatgl_lahir');
  $data['agama'] = $this->input->post('dataagamaku');
  $data['jenis_kelamin'] = $this->input->post('datajenis_kelamin');
  $data['nama_bapak'] = $this->input->post('datanama_bapak');
  $data['nama_ibuk'] = $this->input->post('datanama_ibuk');
  $data['pendidikan'] = $this->input->post('datapendidikanku');
  $data['pekerjaan'] = $this->input->post('datapekerjaan');
  $data['status_perkawinan'] = $this->input->post('dataperkawinan');
  $data['kewarganegaraan'] = $this->input->post('datakewarganegaraan');
  $data['golongan_darah'] = $this->input->post('datagolongan_darah');
  $data['no_tlpn'] = $this->input->post('datano_tlpn');
  $data['fullalamat'] = $this->input->post('dataalamat');


  $this->M_data_ktp->edit_data($data, $nik);

  redirect('C_data_ktp');
}

public function hapus($datanik)
{
  # code...
  $this->M_data_ktp->hapus_data($datanik);
  redirect('C_data_ktp');
}
  
}
