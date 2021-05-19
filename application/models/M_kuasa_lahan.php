<?php
/**
 * 
 */
class M_kuasa_lahan extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='kuasa_lahan';
		$this->table_pengikut='lahan';
		$this->db= $this->load->database('default', TRUE);

	}

	function tampil_data_pemberi()
	{
		return $this->db->query("SELECT*FROM `kuasa_lahan` left join penduduk on kuasa_lahan.nik_pemberi_kuasa = penduduk.nik")->result();
	}

	function tampil_data_penerima()
	{
		return $this->db->query("SELECT*FROM `kuasa_lahan` left join penduduk on kuasa_lahan.nik_penerima_kuasa = penduduk.nik")->result();
	}

	function inputdata($data)
	{
		$this->db->insert($this->table, $data);
	}

	function inputdata_saksi($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert_batch($this->table_pengikut, $data);
	}

	function spefisik_data_pemberi($dataid_kuasa_lahan)
	{
		// disini data 10 tadi disimpan divariabe $dataid_kuasa_lahan, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM kuasa_lahan left join penduduk on kuasa_lahan.nik_pemberi_kuasa = penduduk.nik where id_kuasa_lahan = $dataid_kuasa_lahan");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function spefisik_data_penerima($dataid_kuasa_lahan)
	{
		// disini data 10 tadi disimpan divariabe $dataid_kuasa_lahan, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM kuasa_lahan left join penduduk on kuasa_lahan.nik_penerima_kuasa = penduduk.nik where id_kuasa_lahan = $dataid_kuasa_lahan");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function spefisik_pengikut($dataid)
	{
		$query = $this->db->query("SELECT*FROM `kuasa_lahan` left join lahan on kuasa_lahan.fk_id_lahan = lahan.id_lahan left join penduduk on kuasa_lahan.nik_pemberi_kuasa = penduduk.nik where id_lahan = '$dataid' ");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->result();
	}

	function edit_data($data, $dataid_kuasa_lahan)
	{
		# code...
		#diganti id_kuasa_lahan, karena file model ini, adalah jembatan untuk mengakses tabel kuasa_lahan, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel kuasa_lahan.
		$this->db->where('id_kuasa_lahan', $dataid_kuasa_lahan);
		$this->db->update($this->table, $data);

	}

	function edit_data_pengikut($data, $dataid_pengikut_pindah)
	{
		# code...
		#diganti id_kuasa_lahan, karena file model ini, adalah jembatan untuk mengakses tabel kuasa_lahan, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel kuasa_lahan.
		$this->db->where('id', $dataid_pengikut_pindah);
		$this->db->update_batch($this->table_pengikut, $data);

	}

	function hapus_data($dataid_kuasa_lahan)
	{
		# code...
		$this->db->where('id_kuasa_lahan', $dataid_kuasa_lahan);
		$this->db->delete($this->table);

	}

	function hapus_data_pengikut($fk_id_pengikut)
	{
		$this->db->query("DELETE FROM lahan where id_lahan = '{$fk_id_pengikut}' ");
	}

	function hapusdatakosong()
	{
		 $this->db->query("DELETE FROM `lahan` WHERE nama_saksi = '' OR nama_saksi is null");
	}

	function statusrequest($dataid_kuasa_lahan)
	{
		$query = $this->db->query("UPDATE `kuasa_lahan` set status = 'Tervalidasi' where id_kuasa_lahan = '$dataid_kuasa_lahan' ");
		return $query;
	}

	function statusvalidasi($dataid_kuasa_lahan)
	{
		$query = $this->db->query("UPDATE `kuasa_lahan` set status = 'Request' where id_kuasa_lahan = '$dataid_kuasa_lahan' ");
		return $query;
	}
}
?>