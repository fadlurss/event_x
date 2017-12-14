<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Model {

    private $id_admin;
    private $username_admin;
    private $password_admin;

    function getId_admin() {
        return $this->id_admin;
    }

    function getUsername_admin() {
        return $this->username_admin;
    }


    function getPassword_admin() {
        return $this->password_admin;
    }


    function setId_admin($id_admin) {
        $this->id_admin = $id_admin;
    }

    function setUsername_admin($username_admin) {
        $this->username_admin = $username_admin;
    }

    function setPassword_admin($password_admin) {
        $this->password_admin = $password_admin;
    }


    function find($param = "id_admin", $val = "") {
        if ($val == "") {
            return $this->db->get("admin");
        } else {
            return $this->db->get_where("admin", array($param => $val));
        }
    }

    function save() {
        $data = array("id_admin" => $this->id_admin, "username_admin" => $this->username_admin,"password_admin" => $this->password_admin);
        return $this->db->insert("admin", $data);
    }

}
