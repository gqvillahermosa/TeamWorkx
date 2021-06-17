<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('form');
            
    }//construct

    public function index(){
        $this->load->view('template/header');
        $this->load->view('email/form');
    }//index

}//Email