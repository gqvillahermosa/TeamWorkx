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
                $this->load->helper('security');
                
        }//construct


        public function index(){ // login page
            if($this->session->userdata('login')== FALSE)
                {redirect(base_url('/member/login'));}
            // check is the user is already login
        	$this->load->view('template/header');
           // $this->load->view('template/menu');
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
        $ID = $this->security->xss_clean($this->input->post("username")); 
        $password = $this->security->xss_clean($this->input->post("password"));

        // echo $ID.' '.$password;
       if($this->members->validateUser($ID,$password)){
            //true
            $name = $this->members->getFullname($ID);
            $user = array('login' => TRUE, //set session variables
                           'ID' => $ID,
                           'name' => $name 
                            );
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

       public function showPasswordForm(){
        $this->load->view('template/header');
        $this->load->view('member/changePassword');
        $this->load->view('template/footer');
       }

       public function changePassword(){
        /* 
        The function will update the password of the member
        identified by ID. The change password will gather the infor and 
        update the table member.
       

        $ID = $this->input->post('id');
        $password = $this->input('password');

         */

        //echo "inside Change Password";

       // $id = $this->input->post('ID');
        $password = $this->input->post('password');
        $passconf = $this->input->post('passconf');

       if($password === $passconf){
        
        $id = $this->session->userdata('ID');

        $this->members->changePassword($id, $password);

        echo "change password successfull!";

         //$this->members->changePassword()
       
       }else{//password dont match

         $this->load->view('template/header');
           echo "<div class='container'><div class='alert alert-danger' role='alert'> Passwords do not match!</div></div>";
        $this->load->view('member/changePassword');
        $this->load->view('template/footer'); 
       }

       

       }

        public function viewMember($id){

            echo "inside viewMember $id";
        }

}//Memner

?>