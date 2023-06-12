<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

<<<<<<< HEAD

=======
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model", "AM");
    }
	// ================Dash Board=============
	public function login()
	{   
		$data['title']='NGO - Admin | Login';
		$data['pageName']='Login';
		$this->load->view('admin/login',$data);
	}
	// =========================================

	// ================Dash Board=============
	public function index()
	{   
		$data['title']='NGO - Admin | Dashboard';
		$data['pageName']='Dashboard';
		$this->load->view('admin/index',$data);
	}
	// =========================================
	// ==============Nav Tabs Section===========

	public function addTabs()
	{   
<<<<<<< HEAD
=======

>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
		$data['title']='NGO - Admin | Add Tabs';
		$data['pageName']='Add Tabs';
		$this->load->view('admin/addTabs',$data);
	}
	public function ViewTabs()
	{   
		$data['title']='NGO - Admin | View Tabs';
		$data['pageName']='View Tabs';
<<<<<<< HEAD
		$data['tab_data']=$this->AM->show_tab_data();
		$this->load->view('admin/ViewTabs',$data);
	}
	// public function editTabs()
	// {   
	// 	$data['title']='NGO - Admin | Edit Tabs';
	// 	$data['pageName']='Edit Tabs';
    //     $data['tab_data']=$this->AM->show_tab_data();
	// 	$this->load->view('admin/ViewTabs',$data);
	// }
=======
        $data['tab_data']=$this->AM->show_tab_data();
		$this->load->view('admin/ViewTabs',$data);
	}
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
	public function editTabs($id)
	{   
		$data['title']='NGO - Admin | Edit Tabs';
		$data['pageName']='Edit Tabs';
		$data['tab_data']=$this->AM->show_single_tab_data($id);
		$this->load->view('admin/editTabs',$data);
	}
	// =========================================
	// ================Dash Board=============
<<<<<<< HEAD

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
		$data['title']='NGO - Admin | View Ngo';
		$data['pageName']='View Ngo';
		$this->load->view('admin/ViewNgo',$data);
	}
	// =========================================

=======
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
	public function aboutUs($id)
	{   
		$data['title']='NGO - Admin | About Us';
		$data['pageName']='About Us';
<<<<<<< HEAD
		$data['page_data']=$this->AM->show_single_tab_data($id);
		$this->load->view('admin/aboutUs',$data);
	}
	// =========================================

=======
		$data['page_data']=$this->AM->show_page_data($id);
		$this->load->view('admin/aboutUs',$data);
	}
	// =========================================
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
}
