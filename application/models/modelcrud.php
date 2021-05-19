<?php
/**
 *
 */
class modelcrud extends CI_Model
{
  function __construct()
  {
      parent::__construct();

    # code inisialisasi

  }

  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('galeri');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('galeri');

    return $query->num_rows();
  }



  public function get_by_id($kondisi)
  {
      $this->db->from('galeri');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('galeri',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('galeri');
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('galeri',$data,$kondisi);
      return TRUE;
  }

}
