<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Security');
    $this->Security->getsecurity();
  }

  function index()
  {
    $this->layouts->set_title('home');
    $this->layouts->view('cpanel/content/home/index');
  }



}
