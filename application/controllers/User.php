<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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

}
