<?php 
function random_strings($length_of_string) 
{ 
  //  $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; 
  $str_result = '1234567890';
    return substr(str_shuffle($str_result), 0, $length_of_string); 

}
?>