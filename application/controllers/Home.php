<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("home/Event");
        $this->load->model("home/Category");
        $this->load->model("home/Users");
        $this->session->nama;
    }
    
        
    public function register() {
        $data = array();
        if (isset($_POST["signup"])) {
            $post = $this->input->post(null, true);
            $users = $this->Users;
            if ($post["username"] != "" && $post["email"] != "" && $post["password"] != "") {
                $users->setUsername($post["username"]);
                $users->setEmail($post["email"]);
                $users->setPassword(md5($post["password"]));
                $ins = $users->save();
                if ($ins) {
                    redirect(base_url('home/login'));
                } else {
                    $data["msg"] = "Data Gagal Di Simpan";
                }
            } else {
                $data["msg"] = "Oops Fill All Field";
            }
        }
        $this->load->view("register", $data);
    }

    public function login() {
        $data = array();
        if(isset($_POST["login"])){
            $post  = $this->input->post(null,true);
            $users = $this->Users;
            if($post["username"] != "" && $post["password"]){
                if($users->find("username",$post["username"])->num_rows() > 0){
                    if($users->find("password",md5($post["password"]))->num_rows() > 0){
                        $id_users = $users->find("username",$post["username"]);
                        $this->session->set_userdata("nama",$post["username"]);
                        $this->session->set_userdata("id_users",$id_users->row()->id_users);
                        $data["msg"] = "Login Berhasil";
                        redirect(base_url());
                    }else{
                        $data["msg"] = "Password Salah";
                    }
                }else{
                    $data["msg"] = "Username Salah";
                }
            }else{
                $data["msg"] = "Oops Fill All Field";
            }
        }
        $this->load->view("login_user",$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function index() {
        $data["event"] = $this->Event->find();
        $data["category"] = $this->Category->find();
        $this->load->view('theme/head_home', $data);
        $this->load->view('isi_home', $data);
        $this->load->view('theme/footer_home');
    }

    function category($cat = "") {
        if ($cat != "") {
            $data["event"] = $this->Event->find("id_category", $cat);
            $data["category"] = $this->Category->find();
            $this->load->view('theme/head_home', $data);
            $this->load->view('isi_home', $data);
            $this->load->view('theme/footer_home');
        } else {
            show_404();
        }
    }
    
    public function form(){
        $data["event"] = $this->Event->find();
        $data["category"] = $this->Category->find();
        $this->load->view('theme/head_home', $data);
        $this->load->view('form', $data);
        $this->load->view('theme/footer_home');  
    }
    
    public function addevent(){
        $data = array();
        if (isset($_POST["submit"])) {
            $post = $this->input->post(null, true);
            $event = $this->Event;
            $upload['upload_path'] = 'assets/img/'; 
            $upload['allowed_types'] = 'jpeg|png|jpg';
            $this->load->library('upload',$upload);
        if($this->upload->do_upload('img')){
            $upload_data = $this->upload->data();
            $img = base_url(). 'assets/img/'.$upload_data['file_name'];
                if ($post["name"] != "" && $post["location"] != "" && $post["date"] != "" && $post["dateEnd"] != "" && $post["id_category"] != "" && $post["description"] != "") {
                    $event->setName($post["name"]);
                    $event->setId_users($this->session->id_users);
                    $event->setLocation($post["location"]);
                    $event->setDate($post["date"]);
                    $event->setDateEnd($post["dateEnd"]);
                    $event->setDescription($post["description"]);
                    $event->setId_category($post["id_category"]);
                    $event->setImg($img);
                     $ins = $event->save();
                if ($ins) {
                    $data["msg"] = "Data Sukses Di Simpan";
                } else {
                    $data["msg"] = "Data Gagal Di Simpan";
                }
            } else {
                $data["msg"] = "Oops Fill All Field";
            }
         }
        
      }
        redirect('home');
    }
    
    public function event($id){
        $res = $this->Event;
        $user = $this->Users;
        $dataEvent = $res->find("id",$id);
        $dataUser = $user->find("id_users",$dataEvent->row()->id_users);
        $data["dataEvent"] = $dataEvent;
        $data["dataUsers"] = $dataUser;
        $data["category"] = $this->Category->find();
        $this->load->view('theme/home_detail', $data);
        $this->load->view('detail_event', $data);
        $this->load->view('theme/footer_detail');
    
    }
    
    public function edit($id){
        $res = $this->Event;
        $user = $this->Users;
        $dataEvent = $res->find("id",$id);
        $dataUser = $user->find("id_users",$dataEvent->row()->id_users);
        $data["dataEvent"] = $dataEvent;
        $data["dataUsers"] = $dataUser;
        $data["category"] = $this->Category->find();
        $this->load->view('theme/head_home', $data);
        $this->load->view('form_edit', $data);
        $this->load->view('theme/footer_home');
    
    }
    
     public function update(){
        $data = array();
        $post = $this->input->post(null, true);
        $event = $this->Event;
        $upload['upload_path'] = 'assets/img/'; 
        $upload['allowed_types'] = 'jpeg|png|jpg';
        $this->load->library('upload',$upload);
        if($this->upload->do_upload('img')){
        $upload_data = $this->upload->data();
        $img = base_url(). 'assets/img/'.$upload_data['file_name'];

        $event->setName($post["name"]);
        $event->setId_users($this->session->id_users);
        $event->setLocation($post["location"]);
        $event->setDate($post["date"]);
        $event->setDateEnd($post["dateEnd"]);
        $event->setDescription($post["description"]);
        $event->setId_category($post["id_category"]);
        $event->setImg($img);
        $id = $event->setId($post["id"]); 
        $ins = $event->update("id",$id);
            }
        redirect('home');
         
    }
    
    
    function test($id){
        $event = $this->Event;
        $event->setName();
        $event->setLocation();
        $event->setTime(date());
        $event->setDescription();
        $event->setImg();
        $event->setId_category();
        $event->setId_users();
        $event->setID(); 
        $data = $event->update("id",$id);
        if($data){
            echo "Selesai";
        }else{
            echo "gagal";
        }
    }
        
    public function delete($id){
        $where = array("id" => $id);
        $res = $this->Event->m_delete('event',$where);
        if($res >= 1){
            redirect('home');
        }
    }
    
    
    
}
  