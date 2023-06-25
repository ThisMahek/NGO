<?php
class User_model extends CI_Model
{

    public function check_user_data($email)
    {
        return $this->db->where(['status' => 1, 'email' => $email])->get('users')->row();
    }
    public function user_profile($user_id)
    {
        return $this->db->where(['status' => 1, 'id' => $user_id])->get('users')->row();
    }
    public function change_password($new_password){
        $data = array
        (
            'password' => md5($new_password)
            );
        $this->db->where('id', $this->session->userdata('user_id'));
        return $this->db->update('users', $data);
    }
    public function show_organisation_data($user_id)
    {
        return $this->db->where(['status' => 1, 'user_id' => $user_id])->get('organisation')->row();
    }
    public function show_requirement_data($id){
      return  $this->db->select('organisation.organisation_name,requirement.*')->join('organisation','organisation.user_id=requirement.user_id','left')->where(['requirement.id'=>$id,'requirement.status!='=>2])->get('requirement')->row();

    }
    public function show_all_requirement_data($user_id){
        return  $this->db->select('organisation.organisation_name,requirement.*')->join('organisation','organisation.user_id=requirement.user_id','left')->where(['requirement.user_id'=>$user_id,'requirement.status!='=>2])->get('requirement')->result();
  
      }
    
    

}
?>