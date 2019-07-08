<?php
class Saldo_model extends CI_Model {

        public $id;
        public $name;
        public $expire;
        public $client;

        public function get_users_deposit($user_id='')
        {
          if ($user_id) {
            $this->db->select('saldo');
            $this->db->from('saldo');
            $this->db->where('user_id', $user_id);
            $query = $this->db->get();
            $row = $query->row_array();

            return $row['saldo'];
          }
        }

}
