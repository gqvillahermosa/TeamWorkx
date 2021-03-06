<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Chapter officers module
 */
class Chapter_officer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
                //load database models
      //  $this->load->model('chapter');
        $this->load->model('chaptermembers');
        $this->load->model('admin');
        $this->load->model('members');
        $this->load->model('bigbro');
        $this->load->model('applicants');
       // $this->load->model('adminofficer');
		# code...
		$this->load->helper('html');
		$this->load->library('session');
		$this->load->database();
		$this->load->library('table');
		$this->load->library('auxilar');
	}

	public function index(){ //redirected from Chapter_officer/verifly
		/*  handles the main dashboard for chapter_officer
		. if not login, redirected to Chapter_officer/login,
		ths is a security feature, so that a intruder cannot access with login*/
		if($this->session->userdata('admin')== FALSE){redirect(base_url('Chapter_officer/login'));}
		$this->load->view('template/header');
		$this->load->view('chapter_officer/dashboard');
		//$this->load->view('template/footer');

	}//index

	public function insights(){
		$this->load->view('chapter_officer/insights');
	}//insights

	public function login(){
		$this->load->view('template/header');
		$this->load->view('Chapter_officer/login'); //login form -process by Chapter_officer/verify
		$this->load->view('template/footer');
	}//login

	public function verify(){
		/*check if the user is a legit admin. */
		$ID = $this->input->post("username"); //get input from Chapter_officer/login
		$password = $this->input->post("password");
		$chapter = $this->chaptermembers->getChaptername($ID);
		$fullname = $this->members->getFullname($ID);

		//print_r($fullname);
		
		$check = $this->admin->validateChapterOfficer($ID, $password); //if officer
		if($check){// true, set session and redirect to dashboard 
			
			$user_info = array('admin' => '1', //login is true if admn is '1', false if null
								'user' => $ID,
								'chapter' => $chapter,
								'fullname' => $fullname
								 );


			$this->session->set_userdata($user_info);
			
			$this->bigbro->addLog($ID, "login at chapter_officer", "Successful"); // entry to log files

			redirect(base_url('chapter_officer')); // redirected to Chapter_officer/index

		}else{
			$this->bigbro->addLog($ID, "login at chapter_officer", "Fail");

			//redirect to login, flag alert
			redirect(base_url('chapter_officer/login'));
		}

	}//verify

	public function logout(){
		/* log the logout, destroy session data, loads login form with alert successfull logout*/	
        //echo "logout";
        $this->bigbro->addLog($this->session->userdata('user'), "Logout at chapter_officer", "Successful");
        $this->session->sess_destroy();

        $this->load->view("template/header");
        echo "<div class='container'><div class='alert alert-success' role='alert'>Logout Successful!</div></div>";
        $this->load->view("chapter_officer/login");
        $this->load->view("template/footer");
   
	}//logout

	public function member(){
		$this->load->view('template/header');
		$this->load->view('chapter_officer/members');
		$this->load->view('template/footer');
	}//member


	public function news(){
		$this->load->view('chapter_officer/news');
	}//member


	public function fees(){
		$this->load->view('chapter_officer/fees');
	}//member

	public function help(){
		$this->load->view('chapter_officer/help');
	}//member

	

	

	public function showTabs(){
		$query = $this->db->query("CALL  showTables('dojosys') ");
		
		foreach ($query->result() as $row)
		{
	        echo $row->Tables_in_dojosys." ";
	   
		}

	}//showTabs

	public function descTab(){
		$query = $this->db->query(" describe applicants ");
		
		//var_dump($query->result());

		$fields = array();
		$types = array();

		foreach ($query->result_array() as $row)
		{
	       array_push($fields, $row['Field']);
	       array_push($types, $row['Type']);
		}

		echo "Field: "; print_r($fields);
		echo "<br><br>";
		echo "Types: "; print_r($types);

		$formElements = array_combine($fields, $types);

		echo "combined <br>";
		print_r($formElements);

	}//descTab

	public function manageAdmin($chapter){
		/*
		Dynamic Form that add and remove chapter administrator 
		*/

		if(isset($_POST)){
		
			$member = $this->input->post('member');
			$task = $this->input->post('task'); 
			$action = 'add';
			

			if (strcmp($task, $action ) == 0){
				$this->admin->addAdmin($member);
			}

			$action = 'remove';
			if (strcmp($task, $action ) == 0){
				$this->admin->removeAdmin($member);
			}


			}//isset

		//get chapter members
		$query = $this->members->getMemberbyChapters($chapter);
		$chapter_members = $this->auxilar->listNameID($query);
		//list of admin
		$data = $this->admin->listAdmin();
		$admin = $this->auxilar->listNameID($data);
		
		/*print_r($chapter_members['data']);
		echo "<br>";
		print_r($admin['data']);*/

		//create array of candidate admin by removing the current admin from chapter members
		$candidate_admin = array( 
								'data' => array_diff($chapter_members['data'], $admin['data']), 
								"chapter" => $chapter);

		$admin = array("admin" => $admin,
						"chapter" => $chapter
						);
 
		$this->load->view('template/header');
	    $this->load->view('admin/addAdmin', $candidate_admin);
		$this->load->view('admin/listAdmin', $admin);
		$this->load->view('template/footer');
	
		//print_r($member);		
	}//


}//Chapter_officer

?>