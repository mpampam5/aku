<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_managementuser extends CI_Model{


  var $table = 'auth';


  function get_data()
  {
    return $this->db->query("SELECT * FROM $this->table ORDER BY id_auth DESC");
  }

  function get_insert($data)
  {
    return $this->db->insert($this->table,$data);
  }

  function get_where($data)
  {
    return $this->db->where($data)
                    ->get($this->table);
  }

  function get_update($where,$data)
  {
    return $this->db
          ->where($where)
          ->update($this->table,$data);
  }

  function get_delete($where)
  {
    return $this->db->where($where)
                    ->delete($this->table);
  }

}
