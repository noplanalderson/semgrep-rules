<?php
class Sqli_model extends CI_Controller {

    // ruleid: codeigniter3-sql-injection
    public function vuln_select() {
        $id = $_GET['id'];
        $query = $this->db->query("SELECT * FROM users WHERE id = $id");
    }

    // ruleid: codeigniter3-sql-injection
    public function vuln_select_with_input() {
        $id = $this->input->get('id');
        $query = $this->db->query("SELECT * FROM users WHERE id = $id");
    }

    // ruleid: codeigniter3-sql-injection
    public function vuln_delete() {
        $id = $_POST['id'];
        $query = $this->db->query("DELETE FROM users WHERE id = $id");
    }

    // ruleid: codeigniter3-sql-injection
    public function vuln_insert() {
        $sql = "INSERT INTO users (name, email) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "')";
        $this->db->query($sql);
    }

    // This code is safe
    public function safe() {
        $id = $_GET['id'];
        $query = $this->db->query("SELECT * FROM users WHERE id = ?", array($id));
    }
}
