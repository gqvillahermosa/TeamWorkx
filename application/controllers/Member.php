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
                $this->load->helper('html');
                
        }//construct


        public function index(){ // login page
            if($this->session->userdata('login')== FALSE)
                {redirect(base_url('/member/login'));}
            // check is the user is already login
        	$this->load->view('template/header');
            $this->load->view('template/menu');
            $this->load->view('member/dashboard');
            $this->load->view('template/footer');
        }//index

       public function login(){
            /* load the login form*/
            //echo "inside login";
            $this->load->view('template/header');
            $this->load->view('member/login');
            echo "</body></html>";
       }//login


       public function verify(){
        /*input by member login form post */
        $ID = $this->input->post("username"); 
        $password = $this->input->post("password");
        // echo $ID.' '.$password;
       if($this->members->validateUser($ID,$password)){
            //true
            $user = array('login' => TRUE, //set session variables
                            'ID' => $ID);
           $this->session->set_userdata($user);
           redirect(base_url('member/index'));
       }else{
            //false
            redirect(base_url('member/login'));
        }

       }//verifly

       public function logout(){
            $this->session->sess_destroy();
           redirect(base_url('member/login'));
       }

        public function viewMember($id){

            echo "inside viewMember $id";
        }

}//Memner

?>