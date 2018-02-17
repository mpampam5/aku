<?php
/**
 *
 */
class Layouts
{

  private $CI;

  private $layout_title= null ;

  private $layout_description = null;

  function __construct()
  {
    $this->CI =& get_instance();
  }

  public function set_title($title)
  {
    $this->layout_title = $title;
  }

  public function set_description($description)
  {
    $this->layout_description = $description;
  }

  public function  view($view_name, $layouts = array(), $params = array(),$default=true)
  {
    if (is_array($layouts) && count($layouts)>=1) {
        foreach ($layouts as $layout_key => $layout) {
            $params[$layout_key] = $this->CI->load->view($layout,true);
        }
    }

    if ($default) {
        $header_params['layout_title'] = $this->layout_title;

        $header_params['layout_description'] = $this->layout_description;

        $this->CI->load->view('cpanel/header',$header_params);

        $this->CI->load->view('cpanel/sidebar',$header_params);

        $this->CI->load->view($view_name,$params);

        $this->CI->load->view('cpanel/footer');
    }else {
      $this->CI->load->view($view_name,$params);
    }
  }




}
