<?php
function show_organisation_name($user_id){
    $CI =& get_instance();
  $data=  $CI->db->select('organisation_name')->where(['user_id'=>$user_id,'status!='=>2])->get('organisation')->row();
  return $data->organisation_name;
}
?>