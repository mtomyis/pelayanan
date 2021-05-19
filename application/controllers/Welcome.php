<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function aksi_login(){
		// ini fungsi yang digunakan ketika di klik button login dan sudah mengisi kolom username password
		$username = $this->input->post('datausername');
		$password = $this->input->post('datapassword');
		$where = array(
			'nama_admin' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("admin_kantor_desa",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("C_dashboard_admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('welcome'));
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

}
