<?php
/**
 * 
 */
class M_penghasilan extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='penghasilan';
		$this->db= $this->load->database('default', TRUE);

	}

	function tampil_data()
	{
		# code untuk menampilkan data dari tabel penduduk dengan perintah sql select*&from
		# perintah join digunakan untuk menggabungkan 2 table, yaitu penduduk dan kematian, agar data yang tampil lebih detail, karena pada tabel kematian hanya terdapat sedikit kolom, sehingga dengan menambah kolom nik, maka data yang ada di tabel penduduk juga otomatis terdeteksi karena perintah join, dengan aturan, nik harus sama antara tabel kematian dan nik yang ada di penduduk.
		return $this->db->query("SELECT*FROM `penghasilan` left join penduduk on penghasilan.nik = penduduk.nik")->result();
	}

	function inputdata($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert($this->table, $data);
	}

	function spefisik($dataid_penghasilan)
	{
		// disini data 10 tadi disimpan divariabe $dataid_kematian, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM `penghasilan` left join penduduk on penghasilan.nik = penduduk.nik where id_penghasilan = '$dataid_penghasilan' ");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan kematian, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function edit_data($data, $dataid_penghasilan)
	{
		# code...
		#diganti id_penghasilan, karena file model ini, adalah jembatan untuk mengakses tabel beda_nama, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel beda_nama.
		$this->db->where('id_penghasilan', $dataid_penghasilan);
		$this->db->update($this->table, $data);

	}

	function hapus_data($dataid_penghasilan)
	{
		# code...
		$this->db->where('id_penghasilan', $dataid_penghasilan);
		$this->db->delete($this->table);
	}

	function statusrequest($dataid_penghasilan)
	{
		$query = $this->db->query("UPDATE `penghasilan` set status = 'Tervalidasi' where id_penghasilan = '$dataid_penghasilan' ");
		return $query;
	}

	function statusvalidasi($dataid_penghasilan)
	{
		$query = $this->db->query("UPDATE `penghasilan` set status = 'Request' where id_penghasilan = '$dataid_penghasilan' ");
		return $query;
	}
}
?>