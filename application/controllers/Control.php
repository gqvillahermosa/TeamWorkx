<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller
{
	
	function __construct()
	{
		  parent::__construct();
                //load database models
          $this->load->model('setting');
		# code...

	}

	public function index(){
		if($this->session->userdata('admin')== FALSE){redirect(base_url('/administrator/login'));}

		$data = $this->setting->getTitle();
		//print_r($data);
		$this->load->view('template/header', $data);
		$this->load->view('template/menu');
		$this->load->view('settings/dashboard_template', $data);
		$this->load->view('template/footer');
	}

	public function changeTitle(){
		$title = $this->input->post('title');
		$this->setting->updateTitle($title);
		echo 'Title: Updated!';
	}

	public function changeSlogan(){
		$slogan = $this->input->post('slogan');
		$this->setting->updateSlogan($slogan);
		echo 'Slogan: Updated!';

	}

}

?>