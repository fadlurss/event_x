<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {

    private $id_category;
    private $name_category;

    function __construct() {
        parent::__construct();
    }

    function getId_category() {
        return $this->id_category;
    }

    function getName_category() {
        return $this->name_category;
    }

    function setId_category($id_category) {
        $this->id_category = $id_category;
    }

    function setName_category($name_category) {
        $this->name_category = $name_category;
    }

    function find($param = "id_category", $val = "") {
        if ($val == "") {
            return $this->db->get("category");
        } else {
            return $this->db->get("category", array($param => $val));
        }
    }

    function save() {
        return $this->db->insert("category", array("id_category" => $this->id_category, "name_category" => $this->name_category));
    }

    function delete($param = "id_category", $val = "") {
        if ($val == "") {
            return $this->db->delete("category", array($param => $this->id_category));
        } else {
            return $this->db->delete("category", array($param => $val));
        }
    }

    function update($param = "id_category", $val = "") {
        $data = array("name_category" => $this->name_category);
        if ($val == "") {
            return $this->db->where($param, $this->id_category)->update("category", $data);
        } else {
            return $this->db->where($param, $val)->update("category", $data);
        }
    }

}
