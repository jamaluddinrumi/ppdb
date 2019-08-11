<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_model extends CI_Model {

  public function insert($data) {
    $this->db->insert('siswa', $data);
  }

  public function get_all()
  {
    $query = $this->db->get('siswa');
    return $query->result_array();
  }

}
