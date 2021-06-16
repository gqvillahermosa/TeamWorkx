<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fees extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                //load database models
               
                
        }//construct

    public function index(){
        //echo "at Chapter";
            if($this->session->userdata('admin')== FALSE){redirect(base_url('/administrator/login'));}
            $this->load->view('template/header');
            $this->load->view('template/menu');
            $this->load->view('fees/dashboard_template');
            $this->load->view('template/footer');
            
    }//index

    
}//Chapter