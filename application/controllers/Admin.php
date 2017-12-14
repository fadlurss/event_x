<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("home/Event");
        $this->load->model("home/Category");
        $this->load->model("home/Administrator");
        $this->session->id_admin;
    }
    
    public function login() {
        $data = array();
        if(isset($_POST["login_admin"])){
            $post  = $this->input->post(null,true);
            $admin = $this->Administrator;
            if($post["username_admin"] != "" && $post["password_admin"]){
                if($admin->find("username_admin",$post["username_admin"])->num_rows() > 0){
                    if($admin->find("password_admin",$post["password_admin"])->num_rows() > 0){
                        $id_admin = $admin->find("username_admin",$post["username_admin"]);
                        $this->session->set_userdata("username",$post["username_admin"]);
                        $this->session->set_userdata("id_admin",$id_admin->row()->id_admin);
                        $data["msg"] = "Login Berhasil";
                        redirect(base_url("admin"));
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
        $this->load->view("login_admin",$data);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url("admin/login"));
    }
    
    public function index() {
        $data["event"] = $this->Event->find();
        $data["category"] = $this->Category->find();
        $this->load->view('theme/head', $data);
        $this->load->view('theme/side', $data);
        $this->load->view('tabel', $data);
        $this->load->view('theme/foot');
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
                if ($post["name"] != "" && $post["location"] != "" && $post["date"] != "" && $post["id_category"] != "" && $post["description"] != "") {
                    $event->setName($post["name"]);
                    $event->setId_users($this->session->id_users);
                    $event->setLocation($post["location"]);
                    $event->setDate($post["date"]);
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
        redirect('admin');
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
        $event->setDescription($post["description"]);
        $event->setId_category($post["id_category"]);
        $event->setImg($img);
        $id = $event->setId($post["id"]); 
        $ins = $event->update("id",$id);
            }
        redirect('admin');
         
    }
    
    
    public function delete($id){
        $event = $this->Event;
        $event->setID($id);
        $res= $event->delete();
        if($res >= 1){
            redirect('admin');
        }
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    
}


