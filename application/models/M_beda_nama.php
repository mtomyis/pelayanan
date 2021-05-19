<?php
/**
 * 
 */
class M_beda_nama extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='beda_nama';
		$this->db= $this->load->database('default', TRUE);

	}

	function namalama($datanoktp)
	{
		$namalama = "nama tidak diketahui";

		$query = "SELECT*FROM penduduk where nik = '$datanoktp' ";
		$daftar = $this->db->query($query);
		if ($daftar->num_rows() > 0) {
			foreach ($daftar->result() as $row) {
				$namalama = $row->nama_penduduk;
			}
		}
		return $namalama;
	}

	function tampil_data()
	{
		# code untuk menampilkan data dari tabel penduduk dengan perintah sql select*&from
		# perintah join digunakan untuk menggabungkan 2 table, yaitu penduduk dan beda_nama, agar data yang tampil lebih detail, karena pada tabel beda nama hanya terdapat sedikit kolom, sehingga dengan menambah kolom nik, maka data yang ada di tabel penduduk juga otomatis terdeteksi karena perintah join, dengan aturan, nik harus sama antara tabel beda nama dan nik yang ada di penduduk.
		return $this->db->query("SELECT*FROM `beda_nama` left join penduduk on beda_nama.nik = penduduk.nik")->result();
	}

	function inputdata($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert($this->table, $data);
	}

	function spefisik($dataid_beda_nama)
	{
		// disini data 10 tadi disimpan divariabe $dataid_beda_nama, kemudian dimasukkan ke dalama peruntah sql dibawah

		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->query("SELECT*FROM `beda_nama` left join penduduk on beda_nama.nik = penduduk.nik where id_beda_nama = '$dataid_beda_nama' ");

		// itu adalah perintah sql join 2 table, yaitupenduduk dan beda nama, karena data yanglenkap ada ditable pendudukjadiharus dijoin, 
		return $query->row();
		
	}

	function edit_data($data, $dataid_beda_nama)
	{
		# code...
		#diganti id_beda_nama, karena file model ini, adalah jembatan untuk mengakses tabel beda_nama, sehingga jika ingin menambah atau mengedit menghapus yang diunakan bukan lagi nik, melainkan id_bedanama selaku kolom primary key dari tabel beda_nama.
		$this->db->where('id_beda_nama', $dataid_beda_nama);
		$this->db->update($this->table, $data);

	}

	function hapus_data($dataid_beda_nama)
	{
		# code...
		$this->db->where('id_beda_nama', $dataid_beda_nama);
		$this->db->delete($this->table);
	}

	function statusrequest($dataid_beda_nama)
	{
		$query = $this->db->query("UPDATE `beda_nama` set status = 'Tervalidasi' where id_beda_nama = '$dataid_beda_nama' ");
		return $query;
	}

	function statusvalidasi($dataid_beda_nama)
	{
		$query = $this->db->query("UPDATE `beda_nama` set status = 'Request' where id_beda_nama = '$dataid_beda_nama' ");
		return $query;
	}

	
}
?>