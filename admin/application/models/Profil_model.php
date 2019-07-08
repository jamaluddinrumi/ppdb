<?php
class Profil_model extends CI_Model {

        public $id;
        public $name;
        public $expire;
        public $client;

        public function get_user($user_id='')
        {
          if ($user_id) {
            $this->db->select('email, password');
            $this->db->from('users');
            $this->db->where('id', $user_id);
            $query = $this->db->get();

            return $query->result_array();
          }
        }

}
