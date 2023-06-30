<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model("Admin_model", "AM");
		if (!$this->session->userdata('admin_id')) {
			redirect(base_url() . "admin/login");
		}
	}
	// ================Dash Board=============

	// =========================================

	// ================Dash Board=============
	public function index()
	{
		$data['title'] = 'NGO - Admin | Dashboard';
		$data['pageName'] = 'Dashboard';
		$data['update_at_total']=$this->AM->show_updated_at_register_count(2);
		$data['update_at_approve']=$this->AM->show_updated_at_register_count(1);
		$data['update_at_reject']=$this->AM->show_updated_at_register_count(0);
		$data['show_total']=$this->AM->show_ngo_count(2);
		$data['show_approve']=$this->AM->show_ngo_count(1);
		$data['show_reject']=$this->AM->show_ngo_count(0);
		$data['show_requirement']=$this->AM->show_requirement();
		// echo $this->db->last_query();die();
		// echo "<pre>";
		// print_r($data['show_requirement']);exit;
		$this->load->view('admin/index', $data);
	}
	// =========================================
	// ==============Nav Tabs Section===========

	public function addTabs()
	{
		$data['title'] = 'NGO - Admin | Add Tabs';
		$data['pageName'] = 'Add Tabs';
		$this->load->view('admin/addTabs', $data);
	}
	public function ViewTabs()
	{
		$data['title'] = 'NGO - Admin | View Tabs';
		$data['pageName'] = 'View Tabs';
		$data['tab_data'] = $this->AM->show_tab_data();
		$this->load->view('admin/ViewTabs', $data);
	}

	public function editTabs($id)
	{
		$data['title'] = 'NGO - Admin | Edit Tabs';
		$data['pageName'] = 'Edit Tabs';
		$data['tab_data'] = $this->AM->show_single_tab_data($id);
		$this->load->view('admin/editTabs', $data);
	}
	// =========================================
	// ==============Slider Section===========

	public function addSlider()
	{
		$data['title'] = 'NGO - Admin | Add Slider';
		$data['pageName'] = 'Add Slider';
		$this->load->view('admin/addSlider', $data);
	}
	public function ViewSlider()
	{
		$data['title'] = 'NGO - Admin | View Slider';
		$data['pageName'] = 'View Slider';
		$data['slider'] = $this->AM->show_all_slider();
		$this->load->view('admin/ViewSlider', $data);
	}

	public function editSlider($id)
	{
		$data['title'] = 'NGO - Admin | Edit Slider';
		$data['pageName'] = 'Edit Slider';
		$data['slider'] = $this->AM->show_single_slider($id);
		$this->load->view('admin/editSlider', $data);
	}
	// =========================================
	// ==========Announcements & Updates========

	public function addAnnouncements()
	{
		$data['title'] = 'NGO - Admin | Add Announcements';
		$data['pageName'] = 'Add Announcements';
		$this->load->view('admin/addAnnouncements', $data);
	}
	public function ViewAnnouncements()
	{
		$data['title'] = 'NGO - Admin | View Announcements';
		$data['pageName'] = 'View Announcements';
		$data['announcement'] = $this->AM->show_all_announcements();
		$this->load->view('admin/ViewAnnouncements', $data);
	}

	public function editAnnouncements($id)
	{
		$data['title'] = 'NGO - Admin | Edit Announcements';
		$data['pageName'] = 'Edit Announcements';
		$data['announcement'] = $this->AM->show_single_announcements($id);
		$this->load->view('admin/editAnnouncements', $data);
	}
	// =========================================
	// ==========Settings========

	public function addlogo()
	{
		$data['title'] = 'NGO - Admin | Add Logo';
		$data['pageName'] = 'Add Logo';
		$data['setting'] = $this->AM->show_setting();
		$data['uri']=$this->uri->segment('2');
		$this->load->view('admin/addlogo', $data);
	}
	public function addContacts()
	{
		$data['title'] = 'NGO - Admin | Add Contacts';
		$data['pageName'] = 'Add Contacts';
		$data['setting'] = $this->AM->show_setting();
		$data['uri']=$this->uri->segment('2');
		$this->load->view('admin/addContacts', $data);
	}

	public function addsocialMedia()
	{
		$data['title'] = 'NGO - Admin | Add Social Media';
		$data['pageName'] = 'Add Social Media';
		$data['setting'] = $this->AM->show_setting();
		$data['uri']=$this->uri->segment('2');
		$this->load->view('admin/addsocialMedia', $data);
	}
	// =========================================
	// ================Dash Board===============

	// public function aboutUs()
	// {   
	// 	$data['title']='NGO - Admin | About Us';
	// 	$data['pageName']='About Us';
	// 	$this->load->view('admin/aboutUs',$data);
	// }
	// =========================================
	// ================Dash Board=============
	public function ViewNgo()
	{
		$data['title'] = 'NGO - Admin | View Ngo';
		$data['pageName'] = 'View Ngo';
		$data['organisation']=$this->AM->show_organisation_data();
	//	$data['blank']=$this->AM->show_blank_value();
		//echo $this->db->last_query();die();
		//print_r($data['blank']);exit;
		$this->load->view('admin/ViewNgo', $data);
	}
	// =========================================

	public function aboutUs($id)
	{
		$data['title'] = 'NGO - Admin | About Us';
		$data['pageName'] = 'About Us';
		$data['page_data'] = $this->AM->show_single_tab_data($id);
		$this->load->view('admin/aboutUs', $data);
	}
	// =========================================

}