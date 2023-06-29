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
    public function show_blank_value()
    {
        $query = "SELECT * FROM organisation WHERE 
  ('application_no' IS NULL OR 'application_no' = ' ') OR
  ('it_pan' IS NULL OR 'it_pan' = '') OR
  ('application_no' IS NULL OR 'application_no' = '') OR
  ('website_url' IS NULL OR 'website_url' = '') OR
  ('person_name' IS NULL OR 'person_name' = '') OR
  ('designation' IS NULL OR 'designation' = '') OR
  ('contact_person' IS NULL OR 'contact_person' = '') OR
  ('cp_designation' IS NULL OR 'cp_designation' = '') OR
  ('cp_email_id' IS NULL OR 'cp_email_id' = '') OR
  ('cp_descriptions' IS NULL OR 'cp_descriptions' = '') OR
  ('registration_as' IS NULL OR 'registration_as' = '') OR
  ('registration_no' IS NULL OR 'registration_no' = '') OR
  ('address_proof' IS NULL OR 'address_proof' = '') OR
  ('state' IS NULL OR 'state' = '') OR
  ('document' IS NULL OR 'document' = '') OR
  ('organisation_logo' IS NULL OR 'organisation_logo' = '') OR
  ('pan_registration_document' IS NULL OR 'pan_registration_document	' = '') OR
  ('registration_date' IS NULL OR 'registration_date' = '') OR
  ('city' IS NULL OR 'city' = '') ";
        return $this->db->query($query)->row();
    }
}
?>