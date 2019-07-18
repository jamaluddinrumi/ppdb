<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pengaturan_model extends CI_Model {

  function update($data) {
    $this->db->replace('pengaturan', $data);
  }

  public function get_whatsapp()
  {
    $this->db->where('nama', 'whatsapp');
    $query = $this->db->get('pengaturan');
    $result = $query->row_array();
    return $result['isi'];
  }

}
