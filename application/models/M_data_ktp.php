<?php
/**
 * 
 */
class M_data_ktp extends CI_Model
{
	function __construct()
	{
    	parent::__construct();

		# code inisialisasi
		$this->table='penduduk';
		$this->db= $this->load->database('default', TRUE);

	}

	function tampil_data()
	{
		# code untuk menampilkan data dari tabel penduduk dengan perintah sql select*&from
		return $this->db->query("SELECT*FROM `penduduk`")->result();
	}
		# FITUR APLOUD DATA PENDUDUK PAKE FILE
	function insertRecord($record){
                    
        if(count($record) > 0){
            
            // Check user 15 - 1 = 14
            $this->db->select('*');
            $this->db->where('nik', $record[10]);
            $q = $this->db->get('penduduk');
            $response = $q->result_array();
            
            // Insert record
            if(count($response) == 0){
                $newData = array(
                    "nama_penduduk" => trim($record[0]),
                    "tempat_lahir" => trim($record[1]),
                    "tgl_lahir" => trim($record[2]),
                    "jenis_kelamin" => trim($record[3]),
                    "nama_bapak" => trim($record[4]),
                    "nama_ibuk" => trim($record[5]),
                    "agama" => trim($record[6]),
                    "pendidikan" => trim($record[7]),
                    "pekerjaan" => trim($record[8]),
                    "status_perkawinan" => trim($record[9]),
                    "nik" => trim($record[10]),
                    "kewarganegaraan" => trim($record[11]),
                    "golongan_darah" => trim($record[12]),
                    "no_tlpn" => trim($record[13]),
                    "fullalamat" => trim($record[14])
                );
                $this->db->insert('penduduk', $newData);
            }
        }
    }

	function inputdata($data)
	{
		# code sqlnya sama seperti insert into penduduk.
		$this->db->insert($this->table, $data);
	}

	function spefisik($datanik)
	{
		# codenya sql sepert select*from penduduk where nik = $datanik dimna $datanik adalah yg sudah dipilih. jadi cuma 1 row.
		$query = $this->db->get_where($this->table, array('nik'=>$datanik));
		return $query->row();
	}

	function edit_data($data, $datanik)
	{
		# code...
		$this->db->where('nik', $datanik);
		$this->db->update($this->table, $data);

	}

	function hapus_data($datanik)
	{
		# code...
		$this->db->where('nik', $datanik);
		$this->db->delete($this->table);
	}

	function cek_nik($table, $where){
		return $this->db->get_where($table,$where);
	}
}
?>