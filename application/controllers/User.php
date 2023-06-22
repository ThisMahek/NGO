<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "CM");
		// if (!$this->session->userdata('user_id')) {
		// 	redirect(base_url());
		// }

	}
	public function index()
	{
		$data['title']='Sarv Seva - Home';
		$data['pageName']='Home';
		$this->load->view('index',$data);

	}

	public function ngoList()
	{
		$data['title']='Sarv Seva - NGO List';
		$data['pageName']='NGO List';
		$this->load->view('ngoList',$data);

	}
	public function aboutUs()
	{
		$data['title']='Sarv Seva -About Us';
		$data['pageName']='About Us';
		$this->load->view('aboutUs',$data);

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
			}else{
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


}
