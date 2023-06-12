<?php
class Admin_model extends CI_Model{
   public function show_tab_data(){
        return $this->db->where('status!=',2)->get('nav')->result();
         
    }
    public function show_single_tab_data($id){
        return $this->db->where(['id'=>$id])->get('nav')->row();
         
    }
    public function CheckAdminData($username)
    {
        $this->db->group_start()->where('email',$username)->or_where('mobile',$username)->group_end();
        return  $this->db->get('admin')->row();
    }
    public function user_profile($id){
        return $this->db->where(['id'=>$id])->get('admin')->row();
         
    }
    public function change_password($new_password){
        $data = array
        (
            'password' => md5($new_password)
            );
        $this->db->where('id', $this->session->userdata('admin_id'));
        return $this->db->update('admin', $data);
    }
}
?>