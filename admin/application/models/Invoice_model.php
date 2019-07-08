<?php
class invoice_model extends CI_Model {

        public $id;
        public $name;
        public $expire;
        public $client;

        public function get_users_invoices($user_id='')
        {
          if ($user_id) {
          $this->db->select('id, issued, total, due, status, pdf');
            $this->db->from('invoices');
            $this->db->where('user_id', $user_id);
            $this->db->order_by('issued', 'DESC');
            $query = $this->db->get();

            return $query->result_array();
          }
        }

        public function get_users_total_due($user_id="")
        {
          if ($user_id) {
            $users_due  =  0;
            $this->db->from('invoices');
            $this->db->where('user_id', $user_id);
            $this->db->where('due >', '0');
            $this->db->order_by('issued', 'DESC');
            $query = $this->db->get();

            foreach ($query->result_array() as $row) {
              foreach ($row as $key => $value) {
                if ('due' == $key) {
                  $users_due += $value;
                }
              }
            }

            return  $users_due;
          }
        }

}
