<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Siswa_model extends CI_Model {

  function insert($data) {
    $this->db->insert('siswa', $data);
  }

  public function get_all()
  {
    // code...
  }


}
