<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hq extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

 public function __construct()
        {
                parent::__construct();
                //load model
                $this->load->model('admin');
                $this->load->model('rank');
                $this->load->model('chapter');
                //load libary
                $this->load->library('session');
                $this->load->library('table');
                $this->load->library('form_validation');
                $this->load->helper('form');
                
        }//construct


	public function index(){
		
		redirect(base_url('hq/login'));
	
	}//index

	public function login(){
		if($this->session->userdata('admin')){
			//echo "you are already login";
			$this->showDashboard();
		}else{
			$this->load->view("template/header");
		    $this->load->view("hq/login");
		    $this->load->view("template/footer");
		}
	}//login

	public function showDashboard(){
		if($this->session->userdata('admin')== FALSE){
			$this->login();
			//add code to redirect to login/index
		}else{
			$this->session->set_flashdata('chapter', 'Ready');
			$this->load->view("template/header");
			$this->load->view("hq/menu");
		    $this->load->view("hq/dashboard");
		    $this->load->view("template/footer");
		//echo "inside dashboard";
		}
	}
	//checks password
	function verify(){
		$check = $this->admin->validateUser();
		if ($check) {
			//echo "user verified";
			$this->session->set_userdata('admin', '1');
			redirect(base_url('hq/showDashboard'));
		}else{
			//echo "user not verified";
			redirect(base_url('hq/login'));
		}
		
	}

	function logout(){
		//echo "logout";
		$this->session->sess_destroy();
		$this->load->view("template/header");
		echo "<div class='container'><div class='alert alert-success' role='alert'>Logout Successful!</div></div>";
		$this->load->view("hq/login");
		$this->load->view("template/footer");
	}
	function showMemberForm(){
		$this->load->view("content/member-ui");
	}

	function manageMemberForm(){
		$this->load->view("template/header");
		$this->load->view("content/manageMemberForm");
		$this->load->view("template/footer");
	}

	function getRank(){
		
		$this->load->view("template/header");
		$this->load->view("content/tabletemp");
		$this->load->view("template/footer");
	}

	public function addChapter(){

		if($this->session->userdata('admin')== FALSE){redirect(base_url('/hq/login'));}
		//if not login, redirect to login

		/*setup validation 
		add error delimiter for red and clear error mesage.
		set rules for testing each imput if valid
		*/
		$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</alert></div>");
		$this->form_validation->set_rules('name', 'Name of Chapter', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('address', 'Address of Chapter', 'required');
		$this->form_validation->set_rules('landline', 'Landline phone', 'is_natural|min_length[7]|max_length[12]');
		$this->form_validation->set_rules('mobile', 'Cellphone number required', 'required|is_natural|min_length[7]|max_length[12]');
		$this->form_validation->set_rules('email', 'Email Address required', 'required|valid_email');
		$this->form_validation->set_rules('website', 'Website or Social Media', 'valid_url');
		$this->form_validation->set_rules('head', 'Chapter head required', 'required');
		$this->form_validation->set_rules('remark', 'Remarks', 'alpha_numeric_spaces');
		
		if ($this->form_validation->run() == FALSE)// check if form was validated
                {//if form was not validated redirect to add form
                        $this->load->view("template/header");
                        $this->load->view("hq/menu");
						$this->load->view("hq/showAddChapterForm");
						$this->load->view("template/footer");
                }
                else
                {// if form was valiated , process the request by inserting to table Chapters
                		//$this->load->view("template/header");
                        $this->load->view('hq/addChapter');
                       // $this->load->view("template/footer");
                }
	}//addChapter

	public function searchChapter()
	{
		if($this->session->userdata('admin')== FALSE){redirect(base_url('/hq/login'));}
		//if not login, redirect to login
		$this->form_validation->set_rules('chapter', 'search Parameter', 'required|alpha_numeric_spaces');
		
	if ($this->form_validation->run() == FALSE)
                {
                       $this->load->view("template/header");
                        $this->load->view("hq/menu");
                        echo "validation false";
                       // $this->load->view("hq/menu");
                      //  $this->load->view("hq/manage-chapter-menu"); 
			 		   $this->load->view("hq/manage");
			 		   $this->load->view("template/footer");
                }
                else
                {
                		$this->load->view("template/header");
                		$this->load->view("hq/menu");
                		echo "validation true";
                        $this->load->view('hq/searchChapter');
                        $this->load->view("template/footer");
                }
			 
	}// searchChapter

	public function updateChapterForm($SeqID){
		//populate the update form, 
		if($this->session->userdata('admin')== FALSE){redirect(base_url('/hq/login'));}
		//if not login, redirect to login

		
		$chapter = $this->chapter->getSingle($SeqID);
		$row = $chapter->row();
		$this->load->view("template/header");
		$this->load->view("hq/menu");
        $this->load->view('hq/updateChapterForm', $row);
        $this->load->view("template/footer");
		

	}//updateChapterForm

	public function updateChapter()
	{
		//get input from form
		$SeqID = $this->input->post('seqid');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$country = $this->input->post('country');
		$landline = $this->input->post('landline');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$head = $this->input->post('head');
		$status = $this->input->post('Status');
		
		//arrange into array
		$chapter = array(
					'name' => $name,
					'address'=> $address,
					'country'=> $country,
					'landline' => $landline,
					'mobile' => $mobile,
					'email' => $email,
					'website' => $website,
					'head' => $head,
					'status' => $status

				);
		//Update Database
		$this->chapter->update($chapter, $SeqID);
		$this->session->set_flashdata('chapter', 'Chapter Updated Successfully!');
		redirect(base_url('/hq/searchChapter'));

	}//updateChapter

	public function deleteChapter($SeqID)
	{

		$this->chapter->delete($SeqID);
		$this->session->set_flashdata('chapter', 'Chapter Deleted Successfully!');
		redirect(base_url('hq/searchChapter'));
	}


	public function testmenu(){
         $this->load->view("template/header");
         $this->load->view("hq/testmenu");
		 $this->load->view("hq/canvas");
		 $this->load->view("template/footer");

	}

	public function manage($mode){ 

		/*main page for management in the main memu. under is
		members, chapters and fees 
		$mode is the parameter for controlling which tab is active and shown*/
		//$tab = $mode; //$tab = { member, chapter, fee }
		if($mode=='addChapter'){redirect(base_url('hq/addChapter'));}//workarounds
		//if($mode=='searchChapter'){redirect(base_url('hq/searchChapter'));}
		$tab['active'] = $mode;
		if($this->session->userdata('admin')== FALSE){redirect(base_url('/hq/login'));}
		//if not login, redirect to login
		 $this->load->view("template/header");
         $this->load->view("hq/menu");

         //$this->load->view("hq/manage-menu");
		 $this->load->view("hq/manage", $tab);
		 $this->load->view("template/footer");
	}

	public function viewChapter($SeqID){
		if($this->session->userdata('admin')== FALSE){redirect(base_url('/hq/login'));}
		//if not login, redirect to login
			$chapter = $this->chapter->viewChapter($SeqID);
			$row = $chapter->row();
			 $this->load->view("template/header");
			  $this->load->view("hq/menu");
			$this->load->view("hq/viewChapter", $row);
			 $this->load->view("template/footer");
	}//viewChapter
}
 	