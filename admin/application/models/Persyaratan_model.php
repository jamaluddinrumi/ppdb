<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Persyaratan_model extends CI_Model {

  function update($data) {
    $this->db->replace('persyaratan', $data);
  }

  public function get_persyaratan()
  {
    $query = $this->db->get('persyaratan');
    $result_array = $query->row_array();
    return $result_array['body'];
  }

}
