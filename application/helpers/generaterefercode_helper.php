<?php 
function get_code()
{
$refer_Code=random_strings(8);
$ci =& get_instance();
$x=$ci->db->where('application_no',$refer_Code)->get('organisation')->row();
if(empty($x))
{
  return $refer_Code;  
}
else
{
   get_code();
}
}
?>