<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  function index()
  {
    $this->load->library('layouts');
    $this->layouts->set_title('mpampam');
    $data['ok']='assasa';
    $this->layouts->view('home',array(), $data);
    //$this->layouts->view('home');
  }

}
