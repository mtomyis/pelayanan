<?php
/**
 * 
 */
class M_kelahiran extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='kelahiran';
		$this->db= $this->load->database('default', TRUE);

	}

	function tampil_data()
	{
		# code untuk menampilkan data dari tabel penduduk dengan perintah sql select*&from
		# perintah join digunakan untuk menggabungkan 2 table, yaitu penduduk dan beda_nama, agar data yang tampil lebih detail, karena pada tabel beda nama hanya terdapat sedikit kolom, sehingga dengan menambah kolom nik, maka data yang ada di tabel penduduk juga otomatis terdeteksi karena perintah join, dengan aturan, nik harus sama antara tabel beda nama dan nik yang ada di penduduk.
		return $this->db->query("SELECT*FROM `kelahiran` left join penduduk on kelahiran.nik = penduduk.nik")->result();
	}

	function inputdata($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert($this->table, $data);
	}

	function spefisik($dataid_kelahiran)
	{
		// disini data 10 tadi disimpan divariabe $dataid_beda_nama, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		// $query = $this->db->query("SELECT*FROM `kelahiran` left join penduduk on kelahiran.nik = penduduk.nik where id_kelahiran = '$dataid_kelahiran' ORDER BY `kelahiran`.`id_kelahiran` ASC ");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		// return $query->row();

		$this->db->select('*');
		$this->db->from('kelahiran');
		$this->db->join('penduduk', 'kelahiran.nik = penduduk.nik', 'left');
		$this->db->where('kelahiran.id_kelahiran',$dataid_kelahiran);
		$query = $this->db->get()->row();

		// var_dump($query);
		return $query;

	}

	function edit_data($data, $dataid_kelahiran)
	{
		# code...
		#diganti id_beda_nama, karena file model ini, adalah jembatan untuk mengakses tabel beda_nama, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel beda_nama.
		$this->db->where('id_kelahiran', $dataid_kelahiran);
		$this->db->update($this->table, $data);

	}

	function hapus_data($dataid_kelahiran)
	{
		# code...
		$this->db->where('id_kelahiran', $dataid_kelahiran);
		$this->db->delete($this->table);
	}

	function statusrequest($dataid_kelahiran)
	{
		$query = $this->db->query("UPDATE `kelahiran` set status = 'Tervalidasi' where id_kelahiran = '$dataid_kelahiran' ");
		return $query;
	}

	function statusvalidasi($dataid_kelahiran)
	{
		$query = $this->db->query("UPDATE `kelahiran` set status = 'Request' where id_kelahiran = '$dataid_kelahiran' ");
		return $query;
	}
}
?>