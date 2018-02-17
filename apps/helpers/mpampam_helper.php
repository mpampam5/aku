<?php
function me($value){
  switch ($value) {
    case 'name':
      $string = config_item("name");
      break;

    case 'description':
      $string = config_item("description");
    break;

    case 'version':
      $string = config_item("version");
    break;

    case 'logo':
      $string = config_item("logo");
    break;

    case 'key':
      $string = config_item("key");
    break;

    default:
      echo "not found";
      break;
  }

  return $string;
}

function config($value)
{
  switch ($value) {
    //url custom
    case 'cpanel':
      $string = config_item("cpanel");
      break;

    case 'public':
      $string = config_item("public");
    break;

    case 'public':
      $string = config_item("public");
    break;


    //directory style
    case 'admin_dir':
      $string = config_item("admin_dir");
    break;

    case 'public_dir':
      $string = config_item("public_dir");
    break;

    default:
      echo "not found";
      break;
  }

  return $string;
}




function cmb_dinamis($id,$name,$table,$field,$pk,$selected){
    $ci = get_instance();
    $cmb = "<select name='$name' id='$id' class='form-control'>";
    $data = $ci->db->get($table)->result();
    if ($selected==null) {
      $cmb .="<option value=''>--pilih--</option>";
    }
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field)."</option>";
    }
    $cmb .="</select>";
    return $cmb;
}
