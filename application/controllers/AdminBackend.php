<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminBackend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Common_model", "CM");
    }
    public function add_and_edit_nav()
    {
        $type=$this->input->post('type');
        $insert_array = array(
            'order_no' => $this->input->post('order_no'),
            'tab_name' => $this->input->post('tab_name'),
            'url' => $this->input->post('url'),
            'status' => $this->input->post('status'),
        );
        if($type=='add'){
        $response = $this->CM->data_insert('nav', $insert_array);
        }else{
            $id=$this->input->post('id');
            $response = $this->CM->data_update('nav', $insert_array,array('id'=>$id));
        }
        if ($response) {
            $this->session->set_flashdata("success", '<div class="alert alert-success alert-dismissible" role="alert">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Success!</strong> Your request updated successfully...
            </div>');
        } else {
            $this->session->set_flashdata("error", '<div class="alert alert-danger alert-dismissible" role="alert">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Error!</strong>Unable to updated your request...
            </div>');
            
        }
        redirect("admin/ViewTabs");
    }

    public function delete_tab($id)
    {
        $array['status']=2;
            $response = $this->CM->data_update('nav', $array,array('id'=>$id));
        if ($response) {
            $this->session->set_flashdata("success", '<div class="alert alert-success alert-dismissible" role="alert">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Success!</strong> Your request deleted successfully...
            </div>');
        } else {
            $this->session->set_flashdata("error", '<div class="alert alert-danger alert-dismissible" role="alert">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Error!</strong>Unable to delete your request...
            </div>');
            
        }
        redirect("admin/ViewTabs");
    }



}