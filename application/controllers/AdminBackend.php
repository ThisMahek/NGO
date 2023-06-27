<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminBackend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Common_model", "CM");
        if (!$this->session->userdata('admin_id')) {
            redirect(base_url() . "admin/login");
        }
    }
    public function add_and_edit_nav()
    {
        $type = $this->input->post('type');
        $order_no = $this->input->post('order_no');
        $insert_array['order_no'] = $order_no;
        $insert_array['tab_name'] = $this->input->post('tab_name');
        $insert_array['url'] = $this->input->post('url');
        $insert_array['status'] = $this->input->post('status');
        $insert_array['content'] = $this->input->post('editor1');
        //start image
        if (isset($_FILES["image"]) && !empty($_FILES["image"])) {
            $file = $_FILES["image"];
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
                $filestatus = $this->upload->do_upload('image');
                if ($filestatus == true) {
                    $MyFileName = $this->upload->data('file_name');
                    $insert_array['image'] = "assets/images/" . $MyFileName;
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $result = $error;
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
                $this->session->set_flashdata('success', '<script>
		swal({
			title: "Your request",
			text: " ' . $msg . ' Successfully!",
			icon: "success",
			});
		</script>');
            } else {
                $this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Unable to ' . $msg . ' your request",
                icon: "warning",
                button: "ok",
                });
            </script>');
            }
        } else {
            $this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "This order no already exists",
                icon: "warning",
                button: "ok",
                });
            </script>');
        }
        if ($this->input->post('page') == 'page') {
            redirect("page/$id");
        } else {
            redirect("admin/ViewTabs");
        }
    }

    public function delete_tab($id)
    {
        $array['status'] = 2;
        $response = $this->CM->data_update('nav', $array, array('id' => $id));
        if ($response) {
            $this->session->set_flashdata('success', '<script>
            swal({
                title: "Your request",
                text: "deleted successfully!",
                icon: "success",
                });
            </script>');
        } else {
            $this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Unable to delete your request.",
                icon: "warning",
                button: "ok",
                });
            </script>');
        }
        redirect("admin/ViewTabs");
    }

    public function add_edit_Slider()
	{
        $type=$this->input->post('type');
        $insert_array['title'] = $this->input->post('title');
		$insert_array['status'] = $this->input->post('status'); 
		//start file uplaoded code
		$file = $_FILES["slider_img"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/slider_img/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('slider_img');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['image'] = "/assets/slider_img/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		if ($type=='update') {
            $id = isset($_POST['id'])?$_POST['id']:1;
			$response = $this->CM->data_update('slider', $insert_array, array('id' => $id));
            $msg = 'updated';
		} else {
			$response = $this->CM->data_insert('slider', $insert_array);
            $msg = 'added';
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: "Slider ' . $msg . ' Successfully!",
			icon: "success",
			});
		</script>');
			redirect(base_url() . "admin/ViewSlider");
		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
            redirect(base_url() . "admin/addSlider");
		}
	}
	public function delete_slider($id)
    {
        $array['status'] = 2;
        $response = $this->CM->data_update('slider', $array, array('id' => $id));
        if ($response) {
            $this->session->set_flashdata('success', '<script>
            swal({
                title: "Slider",
                text: "deleted successfully!",
                icon: "success",
                });
            </script>');
        } else {
            $this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Unable to delete Slider.",
                icon: "warning",
                button: "ok",
                });
            </script>');
        }
        redirect(base_url()."admin/ViewSlider");
    }

    public function add_edit_announcements()
	{
        $type=$this->input->post('type');
        $insert_array['title'] = $this->input->post('title');
		$insert_array['status'] = $this->input->post('status'); 
        $insert_array['description'] = $this->input->post('editor1'); 
		//start file uplaoded code
		$file = $_FILES["announcement_doc"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/announcement_doc/';
			$config['allowed_types'] = '*';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('announcement_doc');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['document'] = "/assets/announcement_doc/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		if ($type=='update') {
            $id = isset($_POST['id'])?$_POST['id']:1;
			$response = $this->CM->data_update('announcements', $insert_array, array('id' => $id));
            $msg = 'updated';
		} else {
			$response = $this->CM->data_insert('announcements', $insert_array);
            $msg = 'added';
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: "Announcement ' . $msg . ' Successfully!",
			icon: "success",
			});
		</script>');
			redirect(base_url() . "admin/ViewAnnouncements");
		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
            redirect(base_url() . "admin/addAnnouncements");
		}
	}
	public function delete_announcements($id)
    {
        $array['status'] = 2;
        $response = $this->CM->data_update('announcements', $array, array('id' => $id));
        if ($response) {
            $this->session->set_flashdata('success', '<script>
            swal({
                title: "Announcement",
                text: "deleted successfully!",
                icon: "success",
                });
            </script>');
        } else {
            $this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Unable to delete Announcement.",
                icon: "warning",
                button: "ok",
                });
            </script>');
        }
        redirect(base_url()."admin/ViewAnnouncements");
    }

}