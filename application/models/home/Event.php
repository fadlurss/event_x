<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Model {

    private $id;
    private $name;
    private $location;
    private $time;
    private $date;
    private $dateEnd;
    private $description;
    private $img;
    private $id_category;
    private $id_users;

    function __construct() {
        parent::__construct();
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getLocation() {
        return $this->location;
    }

    function getTime() {
        return $this->time;
    }
    
    function getDate(){
        return $this->date;
    }

    function getDateEnd(){
        return $this->dateEnd;
    }

    function getDescription() {
        return $this->description;
    }

    function getImg() {
        return $this->img;
    }

    function getId_category() {
        return $this->id_category;
    }

    function getId_users() {
        return $this->id_users;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setDateEnd($dateEnd) {
        $this->dateEnd = $dateEnd;
    }
    
    function setDescription($description) {
        $this->description = $description;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setId_category($id_category) {
        $this->id_category = $id_category;
    }

    function setId_users($id_users) {
        $this->id_users = $id_users;
    }

    function find($param = "id", $val = "") {
        if ($val == "") {
            return $this->db->get("event");
        } else {
            return $this->db->get_where("event", array($param => $val));
        }
    }

    function save() {
        $data = array("id" => $this->id, "name" => $this->name, "location" => $this->location, "date" => $this->date, "dateEnd" => $this->dateEnd, "description" => $this->description, "img" => $this->img, "id_category" => $this->id_category, "id_users" => $this->id_users);
        return $this->db->insert("event", $data);
    }

    function delete($param = "id", $val = "") {
        if ($val == "") {
            return $this->db->delete("event", array($param => $this->id));
        } else {
            return $this->db->delete("event", array($param => $val));
        }
    }

    function update($param = "id", $val = "") {
        if ($val == "") {
            $data = array("name" => $this->name, "location" => $this->location, "date" => $this->date, "dateEnd" => $this->dateEnd,  "description" => $this->description, "img" => $this->img, "id_category" => $this->id_category, "id_users" => $this->id_users);
            return $this->db->where($param, $this->id)->update("event", $data);
        } else {
            $data = array("name" => $this->name, "location" => $this->location, "date" => $this->date, "dateEnd" => $this->dateEnd,  "description" => $this->description, "img" => $this->img, "id_category" => $this->id_category, "id_users" => $this->id_users);
            return $this->db->where($param,$val)->update("event", $data);
        }
    }
    
   
       
   

}

?>
