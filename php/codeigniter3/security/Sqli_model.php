<?php
class Sqli_model extends CI_Controller {
    public function vulnerable() {
        $id = $_GET['id'];
        $query = $this->db->query("SELECT * FROM users WHERE id = $id");
    }

    public function safe() {
        $id = $_GET['id'];
        $query = $this->db->query("SELECT * FROM users WHERE id = ?", array($id));
    }
}
