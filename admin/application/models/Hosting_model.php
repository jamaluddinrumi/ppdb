<?php
class Hosting_model extends CI_Model {

        public $id;
        public $name;
        public $expire;
        public $client;

        public function get_users_hostings($user_id='')
        {
          if ($user_id) {
            $this->db->select('domains.name, hostings.update_status, hostings.platform_version, hostings.last_security_check');
            $this->db->from('hostings');
            $this->db->join('domains', 'hostings.domain_id = domains.id');
            $this->db->where('hostings.user_id', $user_id);
            $this->db->order_by('last_security_check', 'ASC');
            $query = $this->db->get();

            return $query->result_array();
          }
        }

}
