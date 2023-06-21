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


}
?>