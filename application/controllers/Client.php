<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "CM");
		$this->load->model("User_model", "UM");
		if (!$this->session->userdata('user_id')) {
			redirect(base_url());
		}

	}
	// ================Dash Board=============
	public function index()
	{
		$data['title'] = 'NGO - Client | Basic Details';
		$data['pageName'] = 'Basic Details';
		$data['organisation']=$this->UM->show_organisation_data($this->session->userdata('user_id'));
		$this->load->view('client/index', $data);
	}
	// =========================================
	// ================Upload Docs=============
	public function uploadDocs()
	{
		$data['title'] = 'NGO - Client | Upload Documents';
		$data['pageName'] = 'Upload Documents';
		$data['uri']=$this->uri->segment(2);
		$data['organisation']=$this->UM->show_organisation_data($this->session->userdata('user_id'));
		$this->load->view('client/uploadDocs', $data);
	}
	// =========================================
	// ================Legal Details=============
	public function legalDetails()
	{
		$data['title'] = 'NGO - Client | Legal Details';
		$data['pageName'] = 'Legal  Details';
		$data['uri']=$this->uri->segment(2);
		$data['organisation']=$this->UM->show_organisation_data($this->session->userdata('user_id'));
		$this->load->view('client/legalDetails', $data);
	}
	// =========================================
	// ==============Manage Requirements===========
	public function editRequirements($id)
	{
		$user_id=$this->session->userdata('user_id');
		$data['title'] = 'NGO - Client | Edit Requirements';
		$data['pageName'] = 'Edit Requirements';
		$data['organisation']=$this->UM->show_organisation_data($user_id);
		$data['requirement']= $this->UM->show_requirement_data($id);
		$this->load->view('client/editRequirements', $data);
	}
	public function addRequirements()
	{
		$user_id=$this->session->userdata('user_id');
		$data['title'] = 'NGO - Client | Add Requirements';
		$data['<div class="col-sm-12 mt-3">
		<label for="exampleInputEmail1" class="form-label">Detail Descriptions*</label>
		<textarea name="editor1"><?=$requirement->description?></textarea>
	</div>'] = 'Add Requirements';
		$data['organisation']=$this->UM->show_organisation_data($user_id);
		$this->load->view('client/addRequirements', $data);
		
	}
	public function ViewRequirements()
	{
		$user_id=$this->session->userdata('user_id');
		$data['title'] = 'NGO - Client | View Requirements';
		$data['pageName'] = 'View Requirements';
		$data['requirement']= $this->UM->show_all_requirement_data($user_id);

		$this->load->view('client/ViewRequirements', $data);
	}
	
	
	// =========================================
	
}