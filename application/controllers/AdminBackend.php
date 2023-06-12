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
<<<<<<< HEAD
        $type = $this->input->post('type');
        $order_no = $this->input->post('order_no');
        $insert_array['order_no'] = $order_no;
        $insert_array['tab_name'] = $this->input->post('tab_name');
        $insert_array['url'] = $this->input->post('url');
        $insert_array['status'] = $this->input->post('status');
        $insert_array['content'] = $this->input->post('editor1');
        //start image
        if (isset($_FILES["input_file"]) && !empty($_FILES["input_file"])) {
            $file = $_FILES["input_file"];
            $MyFileName = "";
            if (strlen($file['name']) > 0) {
                $image = $file["name"];
                $config['upload_path'] = './assets/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // $config['max_size'] = 10000;
                // $config['max_width'] = 10000;
                // $config['max_height'] = 10000;
                $config['file_name'] = $image;
                $this->load->library("upload", $config);
                $filestatus = $this->upload->do_upload('input_file"');
                if ($filestatus == true) {
                    $MyFileName = $this->upload->data('file_name');
                    $insert_array['image'] = "/assets/images/" . $MyFileName;
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $result = $error;
                    print_r($result);
                    exit;
                }
            }
        }
        //End: File upload code
        $check_order_data = $this->db->where(['status!=' => 2, 'order_no' => $order_no])->get('nav')->row();
        if (($check_order_data == 0 && $type == 'add') || (($check_order_data > 0 || $check_order_data == 0) && $type == 'update')) {
            if ($type == 'add') {
                $response = $this->CM->data_insert('nav', $insert_array);
                $msg = 'saved';
            } else {
                $id = $this->input->post('id');
                $response = $this->CM->data_update('nav', $insert_array, array('id' => $id));
                $msg = 'updated';
            }
            if ($response) {
                $this->session->set_flashdata("success", '<div class="alert alert-success alert-dismissible" role="alert">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Success!</strong> Your request ' . $msg . ' successfully...
            </div>');
            } else {
                $this->session->set_flashdata("error", '<div class="alert alert-danger alert-dismissible" role="alert">
                <i class="fa fa-check"></i>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Error!</strong>Unable to ' . $msg . ' your request....
                </div>');
            }
        } else {
            $this->session->set_flashdata("error", '<div class="alert alert-danger alert-dismissible" role="alert">
                <i class="fa fa-check"></i>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Error!</strong>This order no already exists...
                </div>');
        }
        if ($this->input->post('page') == 'page') {
            redirect("page/$id");
        } else {
            redirect("admin/ViewTabs");
        }
=======
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
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
    }

    public function delete_tab($id)
    {
<<<<<<< HEAD
        $array['status'] = 2;
        $response = $this->CM->data_update('nav', $array, array('id' => $id));
=======
        $array['status']=2;
            $response = $this->CM->data_update('nav', $array,array('id'=>$id));
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
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
<<<<<<< HEAD

=======
            
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
        }
        redirect("admin/ViewTabs");
    }



<<<<<<< HEAD

=======
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
}