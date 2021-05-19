<?php
/**
 * 
 */
class M_kuasa_akta extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='kuasa_akta';
		$this->db= $this->load->database('default', TRUE);

	}

	function tampil_data_pemberi()
	{
		return $this->db->query("SELECT*FROM `kuasa_akta` left join penduduk on kuasa_akta.nik_pemberi_kuasa = penduduk.nik")->result();
	}

	function tampil_data_penerima()
	{
		return $this->db->query("SELECT*FROM `kuasa_akta` left join penduduk on kuasa_akta.nik_penerima_kuasa = penduduk.nik")->result();
	}

	function inputdata($data)
	{
		$this->db->insert($this->table, $data);
	}

	function spefisik_data_pemberi($dataid_kuasa_akta)
	{
		// disini data 10 tadi disimpan divariabe $dataid_kuasa_akta, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM kuasa_akta left join penduduk on kuasa_akta.nik_pemberi_kuasa = penduduk.nik where id_kuasa_akta = $dataid_kuasa_akta");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function spefisik_data_penerima($dataid_kuasa_akta)
	{
		// disini data 10 tadi disimpan divariabe $dataid_kuasa_akta, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM kuasa_akta left join penduduk on kuasa_akta.nik_penerima_kuasa = penduduk.nik where id_kuasa_akta = $dataid_kuasa_akta");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function edit_data($data, $dataid_kuasa_akta)
	{
		# code...
		#diganti id_kuasa_akta, karena file model ini, adalah jembatan untuk mengakses tabel kuasa_akta, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel kuasa_akta.
		$this->db->where('id_kuasa_akta', $dataid_kuasa_akta);
		$this->db->update($this->table, $data);

	}

	function hapus_data($dataid_kuasa_akta)
	{
		# code...
		$this->db->where('id_kuasa_akta', $dataid_kuasa_akta);
		$this->db->delete($this->table);

	}

	function statusrequest($dataid_kuasa_akta)
	{
		$query = $this->db->query("UPDATE `kuasa_akta` set status = 'Tervalidasi' where id_kuasa_akta = '$dataid_kuasa_akta' ");
		return $query;
	}

	function statusvalidasi($dataid_kuasa_akta)
	{
		$query = $this->db->query("UPDATE `kuasa_akta` set status = 'Request' where id_kuasa_akta = '$dataid_kuasa_akta' ");
		return $query;
	}
}
?>