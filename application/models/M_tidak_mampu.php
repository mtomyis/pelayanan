<?php
/**
 * 
 */
class M_tidak_mampu extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='tidak_mampu';
		$this->db= $this->load->database('default', TRUE);

	}

	function tampil_data()
	{
		# code untuk menampilkan data dari tabel penduduk dengan perintah sql select*&from
		# perintah join digunakan untuk menggabungkan 2 table, yaitu penduduk dan kematian, agar data yang tampil lebih detail, karena pada tabel kematian hanya terdapat sedikit kolom, sehingga dengan menambah kolom nik, maka data yang ada di tabel penduduk juga otomatis terdeteksi karena perintah join, dengan aturan, nik harus sama antara tabel kematian dan nik yang ada di penduduk.
		return $this->db->query("SELECT*FROM `tidak_mampu` left join penduduk on tidak_mampu.nik = penduduk.nik")->result();
	}

	function inputdata($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert($this->table, $data);
	}

	function spefisik($dataid_tidak_mampu)
	{
		// disini data 10 tadi disimpan divariabe $dataid_kematian, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM `tidak_mampu` left join penduduk on tidak_mampu.nik = penduduk.nik where id_tidak_mampu = '$dataid_tidak_mampu' ");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan kematian, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function edit_data($data, $dataid_tidak_mampu)
	{
		# code...
		#diganti id_beda_nama, karena file model ini, adalah jembatan untuk mengakses tabel beda_nama, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel beda_nama.
		$this->db->where('id_tidak_mampu', $dataid_tidak_mampu);
		$this->db->update($this->table, $data);

	}

	function hapus_data($dataid_tidak_mampu)
	{
		# code...
		$this->db->where('id_tidak_mampu', $dataid_tidak_mampu);
		$this->db->delete($this->table);
	}

	function statusrequest($dataid_tidak_mampu)
	{
		$query = $this->db->query("UPDATE `tidak_mampu` set status = 'Tervalidasi' where id_tidak_mampu = '$dataid_tidak_mampu' ");
		return $query;
	}

	function statusvalidasi($dataid_tidak_mampu)
	{
		$query = $this->db->query("UPDATE `tidak_mampu` set status = 'Request' where id_tidak_mampu = '$dataid_tidak_mampu' ");
		return $query;
	}
}
?>