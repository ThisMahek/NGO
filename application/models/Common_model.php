<?php
class Common_model extends CI_Model{
    function data_insert($table,$insert_array){
        return $this->db->insert($table,$insert_array);
          //return $this->db->insert_id();
    }
    function data_update($table,$set_array,$condition){
        $this->db->update($table,$set_array,$condition);
        return $this->db->affected_rows();
    }
    function data_remove($table,$condition){
        $this->db->delete($table,$condition);
    }
    function upload_image($file,$path,$img_name){
        $name=$file['name'];
        //print_r($file);exit;
        $MyFileName="";
        if(strlen($name)>0){
            $config['upload_path']=$path;
            $config['allowed_types']='jpg|jpeg|png';
            // $config['max_size']='1024';
            // $config['max_height']='2000';
            // $config['max_width']='2000';
            $config['file_name']=$name;
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload("$img_name")){
                $error=array('error'=>$this->upload->display_errors());
                $result= $error;
            }else{
                $success=array('upload_data'=>$this->upload->data());
                $img=$this->upload->data("$img_name");
                $result=$path.'/'. $name;
            }
            return  $result;
        }
    }
   
}
?>