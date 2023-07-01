<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "CM");
		$this->load->model("User_model", "UM");
		$user_id = $this->session->userdata('user_id');
		// if (!$this->session->userdata('user_id')) {
		// 	redirect(base_url());
		// }

	}
	public function index()
	{
		
		$data['title'] = 'Sarv Seva - Home';
		$data['pageName'] = 'Home';
		$data['slider_data'] = $this->UM->show_slider_data();
		$data['announcements_data'] = $this->UM->show_announcements_data();
		$data['requirement_data'] = $this->UM->show_requirement();
		$data['about_us']=$this->db->where(['status'=>'Active','order_no'=>1])->get('nav')->row();
		$this->load->view('index', $data);

	}

	public function ngoList()
	{
		$data['title'] = 'Sarv Seva - NGO List';
		$data['pageName'] = 'NGO List';
		$ngo_name = $this->input->post('ngo_name');
		$data['ngo_name'] = $ngo_name;
		$data['ngo_data'] = $this->UM->show_organisation_data_search_data($ngo_name);
		// echo $this->db->last_query();die();
		// print_r($data['ngo_data']);exit;
		$this->load->view('ngoList', $data);

	}
	public function ngoDetails($id)
	{
		$data['title'] = 'Sarv Seva - NGO Details';
		$data['pageName'] = 'NGO Details';
		$data['ngo_data'] = $this->UM->show_organisation_data_by_id($id);		
		$this->load->view('ngoDetails', $data);

	}
	public function aboutUs($id)
	{
		$about= $this->db->where(['id' => $id, 'status' => 'Active'])->get('nav')->row();
		$data['title'] = 'Sarv Seva -About Us';
		$data['pageName'] = ucwords($about->tab_name);
		$data['about']=$about;
		//print_r($data['about']);exit;
		$this->load->view('aboutUs', $data);

	}
	public function announcements($id)
	{
		$data['title'] = 'Sarv Seva - Announcements & Updates';
		$data['pageName'] = 'Announcements & Updates';
		$data['announcements_data'] = $this->UM->show_single_announcements_data($id);
		$this->load->view('announcements', $data);

	}
	public function requirements($id)
	{
		$data['title'] = 'Sarv Seva - Requirements';
		$data['pageName'] = 'Requirements';
		$data['requirement_data'] = $this->UM->show_requirement_data($id);
		$this->load->view('requirements', $data);

	}
	public function send_otp()
	{
		$email = $this->input->post('email');
		$otp = rand(100000, 999999);
		$check_otp = $this->db->query("select * from user_otp where email='" . $email . "' ");
		if ($check_otp->num_rows() > 0) {
			$response = $this->db->query("update user_otp set otp='" . $otp . "' where email='" . $email . "' ");
		} else {
			$response = $this->db->query("insert into user_otp (otp,email) values ('" . $otp . "','" . $email . "') ");
		}
		//echo $this->db->last_query();die();
		echo $response;
	}
	public function verify_otp()
	{
		$email = $this->input->post('email');
		$otp = $this->input->post('otp_id');
		$user_data = $this->db->where(['email' => $email])->get('user_otp');
		if ($user_data->num_rows() > 0) {
			$user_data_row = $user_data->row();
			if ($user_data_row->otp == $otp) {
				$response = 1;
			} else {
				$response = 0;
			}
		}
		// echo $this->db->last_query();die();
		echo $response;
	}
	public function user_register()
	{
		$email = $this->input->post('email');
		$password = base64_encode($this->input->post('password'));
		$user_otp_data = $this->db->where(['email' => $email])->get('user_otp');
		if ($user_otp_data->num_rows()) {
			$user_data_count = $this->db->where(['email' => $email])->get('users')->num_rows();
			if ($user_data_count == 0) {
				$insert_array['email'] = $email;
				$insert_array['password'] = $password;
				$response = $this->CM->data_insert('users', $insert_array);
			} else {
				$this->session->set_flashdata('error', '<script>
            swal({
                title: "User!",
                text: "already exists",
                icon: "warning",
                button: "ok",
                });
            </script>');
				redirect(base_url());
			}
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: " You are register Successfully!",
			icon: "success",
			});
		</script>');
			redirect(base_url());

		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
			redirect(base_url());
		}
	}

	public function save_origination()
	{
		$uri = $this->input->post('uri');
		$id = $this->input->post('id');
		$user_id = $this->session->userdata('user_id');
		$organisation_data = $this->UM->show_organisation_data($user_id);
		$insert_array['user_id'] = $user_id;
		$insert_array['it_pan'] = isset($_POST['it_pan']) ? $_POST['it_pan'] : $organisation_data->it_pan;
		$insert_array['organisation_name'] = isset($_POST['organisation_name']) ? $_POST['organisation_name'] : $organisation_data->organisation_name;
		$insert_array['website_url'] = isset($_POST['website_url']) ? $_POST['website_url'] : $organisation_data->website_url;
		$insert_array['person_name'] = isset($_POST['person_name']) ? $_POST['person_name'] : $organisation_data->person_name;
		$insert_array['designation'] = isset($_POST['designation']) ? $_POST['designation'] : $organisation_data->designation;
		$insert_array['cp_mob_no'] = isset($_POST['cp_mob_no']) ? $_POST['cp_mob_no'] : $organisation_data->cp_mob_no;
		$insert_array['cp_descriptions'] = isset($_POST['editor1']) ? $_POST['editor1'] : $organisation_data->cp_descriptions;
		$insert_array['contact_person'] = isset($_POST['contact_person']) ? $_POST['contact_person'] : $organisation_data->contact_person;
		$insert_array['cp_designation'] = isset($_POST['cp_designation']) ? $_POST['cp_designation'] : $organisation_data->cp_designation;
		$insert_array['cp_email_id'] = isset($_POST['cp_email_id']) ? $_POST['cp_email_id'] : $organisation_data->cp_email_id;
		$insert_array['city'] = isset($_POST['city']) ? $_POST['city'] : $organisation_data->city;
		$insert_array['state'] = isset($_POST['state']) ? $_POST['state'] : $organisation_data->state;
		$insert_array['district'] = isset($_POST['district']) ? $_POST['district'] : $organisation_data->district;
		$insert_array['pin'] = isset($_POST['pin']) ? $_POST['pin'] : $organisation_data->pin;
		$insert_array['address'] = isset($_POST['address']) ? $_POST['address'] : $organisation_data->address;
		$insert_array['main_mob_no'] = isset($_POST['main_mob_no']) ? $_POST['main_mob_no'] : $organisation_data->main_mob_no;
		//start file uplaoded code
		$file = $_FILES["address_proof_img"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('address_proof_img');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['address_proof'] = "/assets/client_document/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		//start file uplaoded code
		$file = $_FILES["logo_img"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('logo_img');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['organisation_logo'] = "/assets/client_document/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		$file = $_FILES["pan_img"];
		$MyFileName2 = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('pan_img');
			if ($filestatus == true) {
				$MyFileName2 = $this->upload->data('file_name');
				$insert_array['pan_registration_document'] = "/assets/client_document/" . $MyFileName2;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		if (!empty($organisation_data)) {
			$response = $this->CM->data_update('organisation', $insert_array, array('id' => $id));
		} else {
			$insert_array['application_no'] = get_code();
			$response = $this->CM->data_insert('organisation', $insert_array);
		}
		if (!empty($id)) {
			$msg = 'updated';
		} else {
			$msg = 'added';
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: "Organization ' . $msg . ' Successfully!",
			icon: "success",
			});
		</script>');
			if ($uri == 'legalDetails') {
				redirect(base_url() . "client/uploadDocs");
			} else if ($uri == 'uploadDocs') {
				redirect(base_url() . "client/uploadDocs");
			} else {
				redirect(base_url() . "client/legalDetails");
			}

		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
			redirect(base_url() . "client/index");
			//	redirect(base_url($_SERVER['PHP_SELF']));
		}
	}
	public function save_legalDetails()
	{
		$uri = $this->input->post('uri');
		$id = $this->input->post('id');
		$user_id = $this->session->userdata('user_id');
		$organisation_data = $this->UM->show_organisation_data($user_id);
		$insert_array['registration_as'] = isset($_POST['registration_as']) ? $_POST['registration_as'] : $organisation_data->registration_as;
		$insert_array['registration_no'] = isset($_POST['registration_no']) ? $_POST['registration_no'] : $organisation_data->registration_no;
		$insert_array['registration_date'] = isset($_POST['registration_date']) ? $_POST['registration_date'] : $organisation_data->registration_date;
		$insert_array['registration_under'] = isset($_POST['registration_under']) ? $_POST['registration_under'] : $organisation_data->registration_under;
		
		//start file uplaoded code
		$file = $_FILES["user_img"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('user_img');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['document'] = "/assets/client_document/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		if (!empty($organisation_data)) {
			$response = $this->CM->data_update('organisation', $insert_array, array('id' => $id));
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: "Details updated Successfully!",
			icon: "success",
			});
		</script>');
			if ($uri == 'legalDetails') {
				redirect(base_url() . "client/uploadDocs");
			} else if ($uri == 'uploadDocs') {
				redirect(base_url() . "client/uploadDocs");
			} else {
				redirect(base_url() . "client/legalDetails");
			}

		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
			redirect(base_url() . "client/legalDetails");
		}
	}
	public function save_uploadDocs()
	{
		$uri = $this->input->post('uri');
		$id = $this->input->post('id');
		$user_id = $this->session->userdata('user_id');
		$organisation_data = $this->UM->show_organisation_data($user_id);
		//start file uplaoded code
		$file = $_FILES["address_proof_img"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('address_proof_img');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['address_proof'] = "/assets/client_document/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		//start file uplaoded code
		$file = $_FILES["logo_img"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('logo_img');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['organisation_logo'] = "/assets/client_document/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		$file = $_FILES["pan_img"];
		$MyFileName2 = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('pan_img');
			if ($filestatus == true) {
				$MyFileName2 = $this->upload->data('file_name');
				$insert_array['pan_registration_document'] = "/assets/client_document/" . $MyFileName2;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		if (!empty($organisation_data)) {
			$response = $this->CM->data_update('organisation', $insert_array, array('id' => $id));
		} else {
			$insert_array['application_no'] = get_code();
			$response = $this->CM->data_insert('organisation', $insert_array);
		}
		if (!empty($id)) {
			$msg = 'updated';
		} else {
			$msg = 'added';
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: "Document ' . $msg . ' Successfully!",
			icon: "success",
			});
		</script>');
			if ($uri == 'legalDetails') {
				redirect(base_url() . "client/uploadDocs");
			} else if ($uri == 'uploadDocs') {
				redirect(base_url() . "client/uploadDocs");
			} else {
				redirect(base_url() . "client/legalDetails");
			}

		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
			redirect(base_url() . "client/index");
			//	redirect(base_url($_SERVER['PHP_SELF']));
		}
	}
	public function SaveRequirement()
	{
		$id = $this->input->post('id');
		$organisation_data = $this->UM->show_requirement_data($id);
		$insert_array['user_id'] = $this->session->userdata('user_id');
		$insert_array['title'] = isset($_POST['title']) ? $_POST['title'] : $organisation_data->title;
		$insert_array['requirement'] = isset($_POST['requirement']) ? $_POST['requirement'] : $organisation_data->requirement;
		$insert_array['description'] = isset($_POST['editor1']) ? $_POST['editor1'] : $organisation_data->description;
		//start file uplaoded code
		$file = $_FILES["user_img"];
		$MyFileName = "";
		if (strlen($file['name']) > 0) {
			$gallery_img = $file["name"];
			$config['upload_path'] = './assets/client_document/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $file['name'];
			$this->load->library("upload", $config);
			$filestatus = $this->upload->do_upload('user_img');
			if ($filestatus == true) {
				$MyFileName = $this->upload->data('file_name');
				$insert_array['document'] = "/assets/client_document/" . $MyFileName;
			} else {
				$error = array('error' => $this->upload->display_errors());
				$result = $error;
			}
		}
		//end file uplaoded code
		if (!empty($organisation_data)) {
			$response = $this->CM->data_update('requirement', $insert_array, array('id' => $id));
		} else {
			$response = $this->CM->data_insert('requirement', $insert_array);
		}
		if ($_POST['id'] != "") {
			$msg = 'updated';
		} else {
			$msg = 'added';
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: "Requirement ' . $msg . ' Successfully!",
			icon: "success",
			});
		</script>');
			redirect(base_url() . "client/ViewRequirements");
		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
			redirect(base_url() . "client/addRequirements");
			// redirect(base_url($_SERVER['PHP_SELF']));
		}
	}
	public function delete_requirement($id)
	{
		$array['status'] = 2;
		$response = $this->CM->data_update('requirement', $array, array('id' => $id));
		if ($response) {
			$this->session->set_flashdata('success', '<script>
            swal({
                title: "Your requirement",
                text: "deleted successfully!",
                icon: "success",
                });
            </script>');
		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Unable to delete your requirement.",
                icon: "warning",
                button: "ok",
                });
            </script>');
		}
		redirect(base_url() . "client/ViewRequirements");
	}
	public function showcity(){
            
		$val=$this->input->post('val');
	   $query = $this->db->query("SELECT `city_name` AS city FROM `education_center_city` WHERE `city_state`='$val' ");
		$st_arr=$query->result_array();
		$html="";
		$html.="<select class='form-control' name='city' id='exampleFormControlSelect2' required>
		<option value=''>Select City</option></option>";
		foreach($st_arr as $st_arr){ 
		$city=$st_arr['city'];
		$html.="<option value='$city'>$city</option>";
		}  
		
		$html.="</select>";
		
		echo $html;
		
		
		}


}