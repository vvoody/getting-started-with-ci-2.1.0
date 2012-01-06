<?php

class Mcontacts extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function addContact(){
        $now = date("Y-m-d H:i:s");
        $data = array(
            'name' => $this->security->xss_clean($this->input->post('name')),
            'email' => $this->security->xss_clean($this->input->post('email')),
            'notes' => $this->security->xss_clean($this->input->post('notes')),
            'ipaddress' => $this->input->ip_address(),
            'stamp' => $now
            );

        $this->db->insert('contacts', $data);
    }
}
?>
