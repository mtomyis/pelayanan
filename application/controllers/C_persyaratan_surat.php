<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_persyaratan_surat extends CI_Controller {

  function __construct(){
    parent::__construct();
  
    // untuk mengecek apakah sudah login, jika belum maka di arakah ke menu wewlcome atau halaman login
    // if($this->session->userdata('status') != "login"){
    //   redirect(base_url("Welcome"));
    // }
    // dikomen karena semua warga bisa melihat halaman home tanpa login sebagaio admin
  }

  public function index()
  {
    $this->load->view('persyaratan_surat');
  }
  
}
