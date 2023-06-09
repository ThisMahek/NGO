<?php
class Admin_model extends CI_Model{
   public function show_tab_data(){
        return $this->db->where('status!=',2)->get('nav')->result();
         
    }
    public function show_single_tab_data($id){
        return $this->db->where(['id'=>$id])->get('nav')->row();
         
    }
    public function show_page_data($id){
        return $this->db->select('nav.tab_name,nav.url,pages.*')->join('nav','nav.id=pages.nav_id')->where(['pages.nav_id'=>$id])->get('pages')->row();
         
    }
   
}
?>