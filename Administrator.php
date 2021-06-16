    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                //load database models
                //$this->load->model('members');
                $this->load->model('admin');
                 $this->load->model('members');
                $this->load->helper('html');
                //load libary
                //$this->load->library('session');
               // $this->load->library('table');
               // $this->load->library('form_validation');
               // $this->load->helper('form');
                
        }//construct


        public function index(){ // login page
            if($this->session->userdata('admin')== FALSE){
                redirect(base_url('/administrator/login'));
            }else{
                $this->load->view('template/header');
                $this->load->view('admin/dashboard');
            }//else   
        }//index

        public function login(){
            $this->load->view("template/header");
            $this->load->view("admin/login");
            $this->load->view("template/footer");
        
        }//login

        public  function verify(){
        $id = $this->input->post("username");
        $password = $this->input->post("password");

        $check = $this->admin->validateUser( $id);
        if ($check) {
            //echo "user verified";
            $username = $this->members->getFullname($id);
            $this->session->set_userdata('fullname', $username);
            $this->session->set_userdata('admin', '1');
            $this->session->set_userdata('user', $id);
            $this->session->set_userdata('chapter', 'HQ');
            redirect(base_url('administrator'));
        }else{
            //echo "user not verified";
            redirect(base_url('administrator/login'));
        }
        
    }// verify

        public function showDashboard(){
       
           if($this->session->userdata('admin') == FALSE){
           redirect(base_url('administrator/login'));
            //add code to redirect to login/index
        }
        else{
            $this->session->set_flashdata('chapter', 'Ready');
            $this->load->view("template/header");
            $this->load->view("template/menu");
            $this->load->view("home/dashboard");
            $this->load->view("template/footer");
        //echo "inside dashboard";
        }
        
    }

    function logout(){
        //echo "logout";
        $this->session->sess_destroy();
        $this->load->view("template/header");
        echo "<div class='container'><div class='alert alert-success' role='alert'>Logout Successful!</div></div>";
        $this->load->view("admin/login");
        $this->load->view("template/footer");
    }//logout

    public function insights(){
        $this->load->view('admin/insights');
    }//insights

    public function members(){
        //echo "insde admin members";
        $this->load->view('template/header');
        $this->load->view('admin/members');
    }//members


       
}//Admin

?>