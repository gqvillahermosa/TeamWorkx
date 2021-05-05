<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                //load model
                //$this->load->model('admin');
                //$this->load->model('rank');
                $this->load->model('chapter');
                 $this->load->model('setting');
                //load libary
                $this->load->library('session');
                $this->load->library('calendar');
                //$this->load->library('table');
                //$this->load->library('form_validation');
                //$this->load->helper('form');
                
        }//construct

        public function index(){
                if($this->session->userdata('admin')== FALSE){redirect(base_url('/administrator/login'));}
                $this->session->set_flashdata('chapter', ' ');//set chapter flashdata to ready
                $data = $this->setting->getTitle();//update title
                //display the dashboard
        	$this->load->view('template/header', $data);
        	$this->load->view('template/menu');
        	$this->load->view('home/dashboard');
        	$this->load->view('template/footer');
        }
}//Home