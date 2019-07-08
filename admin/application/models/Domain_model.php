<?php
class Domain_model extends CI_Model {

        public $id;
        public $name;
        public $expire;
        public $client;

        public function get_domain_name($domain_id='')
        {
          if ($domain_id) {
            $this->db->select('name');
            $this->db->from('domains');
            $this->db->where('id', $domain_id);
            $query = $this->db->get();

            $result = $query->row_array();

            $domain_name = $result['name'];

            return $domain_name;
          }
        }

        public function get_users_domains($user_id='')
        {
          if ($user_id) {
            $this->db->select('name, expire');
            $this->db->from('domains');
            $this->db->where('user_id', $user_id);
            $this->db->order_by('expire', 'ASC');
            $query = $this->db->get();

            return $query->result_array();
          }
        }

}
