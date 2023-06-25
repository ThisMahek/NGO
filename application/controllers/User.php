<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "CM");
		$this->load->model("User_model", "UM");
		 $user_id=$this->session->userdata('user_id');
		// if (!$this->session->userdata('user_id')) {
		// 	redirect(base_url());
		// }

	}
	public function index()
	{
		$data['title'] = 'Sarv Seva - Home';
		$data['pageName'] = 'Home';
		$this->load->view('index', $data);

	}

	public function ngoList()
	{
		$data['title'] = 'Sarv Seva - NGO List';
		$data['pageName'] = 'NGO List';
		$this->load->view('ngoList', $data);

	}
	public function aboutUs()
	{
		$data['title'] = 'Sarv Seva -About Us';
		$data['pageName'] = 'About Us';
		$this->load->view('aboutUs', $data);

	}
	public function announcements()
	{
		$data['title'] = 'Sarv Seva - Announcements & Updates';
		$data['pageName'] = 'Announcements & Updates';
		$this->load->view('announcements', $data);

	}
	public function requirements()
	{
		$data['title'] = 'Sarv Seva - Requirements';
		$data['pageName'] = 'Requirements';
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
		$password = md5($this->input->post('password'));
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
                text: "already exist",
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
$user_id=$this->session->userdata('user_id');
		$insert_array = array(
			'user_id' => $user_id,
			'it_pan' => $this->input->post('it_pan'),
			'organisation_name' => $this->input->post('organisation_name'),
			'website_url' => $this->input->post('website_url'),
			'person_name' => $this->input->post('person_name'),
			'designation' => $this->input->post('designation'),
			'cp_mob_no' => $this->input->post('cp_mob_no'),
			'contact_person' => $this->input->post('contact_person'),
			'cp_designation' => $this->input->post('cp_designation'),
			'cp_email_id' => $this->input->post('cp_email_id'),
			'cp_descriptions' => $this->input->post('editor1'),
		);
		$organisation_data=$this->UM->show_organisation_data($user_id);
		if(!empty($organisation_data)){
		$response = $this->CM->data_update('organisation', $insert_array,array('id'=>isset($_POST['id'])));
		}
		else{
			$response = $this->CM->data_insert('organisation', $insert_array);
		}
		if($_POST['id']!=""){
			$msg='update';
		}else{
			$msg='added';
		}
		if ($response) {
			$this->session->set_flashdata('success', '<script>
		swal({
			title: "Congratulations!",
			text: "Origination '.$msg.' Successfully!",
			icon: "success",
			});
		</script>');
			redirect(base_url()."client");

		} else {
			$this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Something went wrong",
                icon: "warning",
                button: "ok",
                });
            </script>');
			redirect(base_url()."client");
		}
	}
}