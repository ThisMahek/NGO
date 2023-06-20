<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

	// ================Dash Board=============
	public function index()
	{
		$data['title'] = 'NGO - Client | Dashboard';
		$data['pageName'] = 'Dashboard';
		$this->load->view('client/index', $data);
	}
	// =========================================

	// ==============Manage Requirements===========

	public function addRequirements()
	{
		$data['title'] = 'NGO - Client | Add Requirements';
		$data['pageName'] = 'Add Requirements';
		$this->load->view('client/addRequirements', $data);
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