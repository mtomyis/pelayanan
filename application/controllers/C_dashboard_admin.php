<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard_admin extends CI_Controller {

  function __construct(){
    parent::__construct();
  
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Welcome"));
    }
  }

  public function index()
  {
    $data["namaHalaman"] = "Dashboard";
    
    $this->load->view('admin/v_dashboard_admin', $data);

  }
  
}
