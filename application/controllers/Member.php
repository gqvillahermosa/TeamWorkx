<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                //load database models
                $this->load->model('members');
                //load libary
                $this->load->library('session');
               // $this->load->library('table');
               // $this->load->library('form_validation');
                $this->load->helper('form');
                
        }//construct


        public function index(){ // login page
            if($this->session->userdata('admin')== FALSE){redirect(base_url('/administrator/login'));}
        	$this->load->view('template/header');
            $this->load->view('template/menu');
            $this->load->view('member/dashboard');
            $this->load->view('template/footer');
        }//index

        public function addForm(){
        	$this->load->view('template/header');
        	$this->load->view('template/menu');
        	$this->load->view('member/addForm');
        	$this->load->view('template/footer');

        }//addMemberForm

        public function addMember(){

        }//addMember
}//Memner

?>