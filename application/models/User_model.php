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
        return $this->db->where(['status!=' => 2, 'user_id' => $user_id])->get('organisation')->row();
    }
    public function show_requirement_data($id){
      return  $this->db->select('organisation.organisation_name,requirement.*')->join('organisation','organisation.user_id=requirement.user_id','left')->where(['requirement.id'=>$id])->get('requirement')->row();

    }
    public function show_all_requirement_data($user_id){
        return  $this->db->select('organisation.organisation_name,requirement.*')->join('organisation','organisation.user_id=requirement.user_id','left')->where(['requirement.user_id'=>$user_id,'requirement.status!='=>2])->get('requirement')->result();
  
      }
      public function show_organisation_data_search_data($ngo_name)
      {

           $this->db->select('users.email as ngo_email,organisation.*')->join('users','users.id=organisation.user_id','left')->where(['organisation.status' => 1]);
          // if(!empty($ngo_name)){
           $this->db->like('organisation.organisation_name',$ngo_name);
          // }
          return $this->db->get('organisation')->result();
      }
      public function show_slider_data()
      {
          return $this->db->where(['status' => 1])->get('slider')->result();
      }
      public function show_requirement()
      {
          return $this->db->select('organisation.organisation_name,requirement.*')->join('organisation','organisation.user_id=requirement.user_id','left')->where(['requirement.status' => 1])->get('requirement')->result();
      }
      
      public function show_announcements_data()
      {
          return $this->db->where(['status' => 1])->get('announcements')->result();
      }
      /**
       * Summary of show_requirement_data
       * @return mixed
       */
      public function show_single_announcements_data($id){
        return $this->db->where(['status' => 1,'id'=>$id])->get('announcements')->row();
      }
    
}
?>