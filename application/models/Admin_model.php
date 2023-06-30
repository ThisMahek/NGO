<?php
class Admin_model extends CI_Model
{
    public function show_tab_data()
    {
        return $this->db->where('status!=', 2)->get('nav')->result();

    }
    public function show_single_tab_data($id)
    {
        return $this->db->where(['id' => $id])->get('nav')->row();

    }
    public function CheckAdminData($username)
    {
        $this->db->group_start()->where('email', $username)->or_where('mobile', $username)->group_end();
        return $this->db->get('admin')->row();
    }
    public function user_profile($id)
    {
        return $this->db->where(['id' => $id])->get('admin')->row();

    }
    public function change_password($new_password)
    {
        $data = array
        (
            'password' => md5($new_password)
        );
        $this->db->where('id', $this->session->userdata('admin_id'));
        return $this->db->update('admin', $data);
    }
    public function show_organisation_data()
    {
        return $this->db->select('users.email as org_email,users.password,organisation.*')->join('users', 'users.id=organisation.user_id', 'left')->where(['organisation.status!=' => 2])->get('organisation')->result();
    }
    public function show_single_slider($id)
    {
        return $this->db->where(['id' => $id])->get('slider')->row();
    }
    public function show_all_slider()
    {
        return $this->db->where(['status!=' => 2])->get('slider')->result();
    }
    public function show_single_announcements($id)
    {
        return $this->db->where(['id' => $id])->get('announcements')->row();
    }
    public function show_all_announcements()
    {
        return $this->db->where(['status!=' => 2])->get('announcements')->result();
    }
    public function show_setting()
    {
        return $this->db->where(['status' => 1])->get('setting')->row();
    }
    public function show_updated_at_register_count($status){
        if($status=='2'){
      $array=array('status!='=>($status));
        }else{
            $array=array('status'=>$status);
        }
       return $this->db->select('DATE_FORMAT(updated_at," %d-%m-%Y %h:%i %p") as date')->where( $array)->order_by('updated_at','DESC')->limit(1)->get('organisation')->row();

    }
    public function show_ngo_count($status){
        if($status=='2'){
      $array=array('status!='=>($status));
        }else{
            $array=array('status'=>$status);
        }
       return $this->db->select('COUNT(id) as total')->where( $array)->order_by('updated_at','DESC')->limit(1)->get('organisation')->row();

    }
    public function show_requirement()
      {
          return $this->db->select('requirement.*')->where(['status!=' => 2])->get('requirement')->result();
      }
      
}
?>