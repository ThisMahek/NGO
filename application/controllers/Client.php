<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "CM");
		// if (!$this->session->userdata('user_id')) {
		// 	redirect(base_url());
		// }

	}
	// ================Dash Board=============
	public function index()
	{
		$data['title'] = 'NGO - Client | Basic Details';
		$data['pageName'] = 'Basic Details';
		$this->load->view('client/index', $data);
	}
	// =========================================
	// ================Upload Docs=============
	public function uploadDocs()
	{
		$data['title'] = 'NGO - Client | Upload Documents';
		$data['pageName'] = 'Upload Documents';
		$this->load->view('client/uploadDocs', $data);
	}
	// =========================================
	// ================Legal Details=============
	public function legalDetails()
	{
		$data['title'] = 'NGO - Client | Legal Details';
		$data['pageName'] = 'Legal  Details';
		$this->load->view('client/legalDetails', $data);
	}
	// =========================================
	// ==============Manage Requirements===========

	public function addRequirements()
	{
		 if ($this->session->userdata('user_id')) {
			redirect(base_url());
		 }else{
		$data['title'] = 'NGO - Client | Add Requirements';
		$data['pageName'] = 'Add Requirements';
		$this->load->view('client/addRequirements', $data);
		 }
	}
	public function ViewRequirements()
	{
		$data['title'] = 'NGO - Client | View Requirements';
		$data['pageName'] = 'View Requirements';
		$this->load->view('client/ViewRequirements', $data);
	}

	public function editRequirements()
	{
		$data['title'] = 'NGO - Client | Add Requirements';
		$data['pageName'] = 'Add Requirements';
		$this->load->view('client/editRequirements', $data);
	}
	// =========================================
	
}