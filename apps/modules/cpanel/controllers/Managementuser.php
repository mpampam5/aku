<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managementuser extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Security');
    $this->Security->getsecurity();
    $this->load->model('Model_managementuser','model');
    if ($this->session->userdata("level")!="superadmin"){
      $this->error_404();
    }

  }

  function index()
  {
    $this->layouts->set_title('user');
    $data['row'] = $this->model->get_data();
    $this->layouts->view('cpanel/content/user/index',array(),$data);
  }



  function tambah_admin()
  {
    $this->layouts->view('cpanel/content/user/form',array(),null,false);
  }

  function aksi_tambah()
  {
    if ($this->input->is_ajax_request()) {
      $json = array('success' =>false , "alert"=>array());
      $this->form_validation->set_rules("email","Email","trim|required|valid_email");
      $this->form_validation->set_rules("active","Status","trim|required|numeric|max_length[1]");
      $this->form_validation->set_rules("pwd","Password baru ","trim|required|min_length[5]|max_length[50]");
      $this->form_validation->set_rules("pwd_con","Konfirmasi Password baru","trim|required|matches[pwd]|xss_clean");
      $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
      if($this->form_validation->run())
        {

        $password = pass_enc($this->input->post('pwd_con'));
        $insert = array("email" => $this->input->post("email"),
                        "active" => $this->input->post("active"),
                        "password"=>$password
                      );
        $this->model->get_insert($insert);
        $json['alert']  = "Berhasil menambah!";
        $json['success'] = true;
        }else {
          foreach ($_POST as $key => $value) {
            $json['alert'][$key] = form_error($key);
           }
        }
      echo json_encode($json);
    }
  }


  function change_password($id){
    $data['id_auth'] = $id;
    $this->layouts->view('cpanel/content/user/change',array(),$data,false);
  }

  function aksi_pwd($id)
  {
    if ($this->input->is_ajax_request()) {
      $json = array('success' =>false , "alert"=>array());
      $this->form_validation->set_rules("pwd","Password baru ","trim|required|min_length[5]|max_length[50]");
      $this->form_validation->set_rules("pwd_con","Konfirmasi Password baru","trim|required|matches[pwd]|xss_clean");
      $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
      if($this->form_validation->run())
        {
        $password = pass_enc($this->input->post('pwd_con'));
        $this->model->get_update(array("id_auth"=>$id),array("password"=>$password));
        $json['alert']  = "Berhasil mengubah password!";
        $json['success'] = true;
        }else {
          foreach ($_POST as $key => $value) {
            $json['alert'][$key] = form_error($key);
           }
        }
      echo json_encode($json);
    }
  }

    function active($id,$active)
    {
      if ($this->input->is_ajax_request()) {
        $this->model->get_update(array('id_auth'=>$id),array('active'=>"$active"));
        $json['alert']   = "Berhasil mengubah!";
        $json['success'] = true;
        echo json_encode($json);
      }
    }


  function hapus($id)
  {
    if ($this->input->is_ajax_request()) {
      $this->model->get_delete(array('id_auth'=>$id));
      $data['alert'] = "Berhasil menghapus!";
      echo json_encode($data);
    }
  }

}
