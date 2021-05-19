<?php
/**
 * 
 */
class M_pindah_penduduk extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='pindah_penduduk';
		$this->table_pengikut='pengikut_pindah';
		$this->db= $this->load->database('default', TRUE);

	}

	function tampil_data()
	{
		# code untuk menampilkan data dari tabel penduduk dengan perintah sql select*&from
		# perintah join digunakan untuk menggabungkan 2 table, yaitu penduduk dan beda_nama, agar data yang tampil lebih detail, karena pada tabel beda nama hanya terdapat sedikit kolom, sehingga dengan menambah kolom nik, maka data yang ada di tabel penduduk juga otomatis terdeteksi karena perintah join, dengan aturan, nik harus sama antara tabel beda nama dan nik yang ada di penduduk.
		return $this->db->query("SELECT*FROM `pindah_penduduk` left join penduduk on pindah_penduduk.nik = penduduk.nik")->result();
	}

	function inputdata($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert($this->table, $data);
	}

	function inputdata_pengikut($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert_batch($this->table_pengikut, $data);
	}

	function spefisik($dataid_pindah_penduduk)
	{
		// disini data 10 tadi disimpan divariabe $dataid_pindah_penduduk, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM pindah_penduduk left join penduduk on pindah_penduduk.nik = penduduk.nik where id_pindah_penduduk = $dataid_pindah_penduduk");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function spefisik_pengikut($dataid)
	{
		$query = $this->db->query("SELECT*FROM `pindah_penduduk` left join pengikut_pindah on pindah_penduduk.id_pengikut = pengikut_pindah.fk_id_pengikut left join penduduk on pengikut_pindah.nik_pengikut = penduduk.nik where fk_id_pengikut = '$dataid' ");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->result();
	}

	function edit_data($data, $dataid_pindah_penduduk)
	{
		# code...
		#diganti id_pindah_penduduk, karena file model ini, adalah jembatan untuk mengakses tabel pindah_penduduk, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel pindah_penduduk.
		$this->db->where('id_pindah_penduduk', $dataid_pindah_penduduk);
		$this->db->update($this->table, $data);

	}

	function edit_data_pengikut($data, $dataid_pengikut_pindah)
	{
		# code...
		#diganti id_pindah_penduduk, karena file model ini, adalah jembatan untuk mengakses tabel pindah_penduduk, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel pindah_penduduk.
		$this->db->where('id', $dataid_pengikut_pindah);
		$this->db->update_batch($this->table_pengikut, $data);

	}

	function hapus_data($dataid_pindah_penduduk)
	{
		# code...
		$this->db->where('id_pindah_penduduk', $dataid_pindah_penduduk);
		$this->db->delete($this->table);

	}

	function hapus_data_pengikut($fk_id_pengikut)
	{
		$this->db->query("DELETE FROM pengikut_pindah where fk_id_pengikut = '{$fk_id_pengikut}' ");
	}

	function hapusdatakosong()
	{
		 $this->db->query("DELETE FROM `pengikut_pindah` WHERE nik_pengikut = '' OR nik_pengikut is null");
	}

	function statusrequest($dataid_pindah_penduduk)
	{
		$query = $this->db->query("UPDATE `pindah_penduduk` set status = 'Tervalidasi' where id_pindah_penduduk = '$dataid_pindah_penduduk' ");
		return $query;
	}

	function statusvalidasi($dataid_pindah_penduduk)
	{
		$query = $this->db->query("UPDATE `pindah_penduduk` set status = 'Request' where id_pindah_penduduk = '$dataid_pindah_penduduk' ");
		return $query;
	}
}
?>