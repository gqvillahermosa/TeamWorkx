<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller{
	 public function __construct()
        {
               parent::__construct();
               $this->load->model('members');
               $this->load->model('applicants');
               $this->load->model('chapter');
               //$this->load->model('applicants');
               $this->load->library('session');
               $this->load->helper('url');
               $this->load->library('form_validation');
               $this->load->helper('form');
               
        }//

 public function index(){
 		$this->session->sess_destroy();//clear all session if interrupted
 		
 	}//index

 public function invite($id){
 	/* link send by a member or sponsor
 	Check first the reqs id number if registred
 	If you registed by, your registration will
 	not continue. */

 	//add sponsor to log
 	$data['sponsor_id'] = $id; //get the sponsor data
 	$data['sponsor_name'] = $this->sponsor($id);
 	$data['path_id_photo'] = './id_photo/';
 	$data['path_pic_photo'] = './pic_photo/';
 	$data['path_proof_photo'] = './proofphoto/'; //added for file upload for proof of payment


 	$this->session->set_userdata($data); //set the sponsor data as session to make it global

 	//print_r('if empty'.$this->session->firstname);
 	//print_r($this->session->sponsor_name);

 	$this->load->view('template/header');
 	$this->load->view('registration/terms');
 	echo "</body></html>"; //default footer is annoying 
 	//$this->load->view('template/footer');

 	}//invite

 	public function check_registration(){
 		/*form ito check if the PIC have be registred previously */
 		$this->load->view('template/header');
 	$this->load->view('registration/checkRegs');
 	echo "</body></html>"; //default footer is annoying 
 	}

public function check(){ // check if the applicants's id is not yet registered

	$id = html_escape( $this->security->xss_clean($this->input->post('id'))); 
	// get id from input from checkRegs.php and clean
	$member = $this->members->search_single($id); // searh members db by id
	$row = $member->row();
	$this->session->set_userdata('pic_id', $id);
	//echo $id;
	 /*check if the ID is registered in the database. If there true* registration 
	 will not continue */
	if(is_null($row)){ 
		//id not found continue with registration
		
		redirect(base_url('registration/personalProfile'));
	} else {
		//id not found
		$this->load->view('template/header');
		
 		$this->load->view('registration/IDfound');
 		echo('</body></html>');
 		
	}
}//check

	public function sponsor($id){
		/* get the fullname of the sponsor by id */
		$sponsor = $this->members->search_single($id)->row_array();
		if($sponsor){
			return $sponsor['Firstname'].' '.$sponsor['Surname'];
			}//if
		else {
			redirect(base_url('wtf/index/1'));
		}	
	}

 	public function personalProfile(){ // input the applicant's personal profile

 		 $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</alert></div>");
 		 $this->form_validation->set_rules('firstname', 'Firstname', 'required|alpha_numeric_spaces');
 		 $this->form_validation->set_rules('middlename', 'Firstname', 'alpha');
 		 $this->form_validation->set_rules('surname', 'Surname', 'required|alpha_numeric_spaces');
 		 $this->form_validation->set_rules('birthdate', 'Birthdate', 'required');
 		 $this->form_validation->set_rules('office', 'Office Address', 'alpha_numeric_spaces');
 		 $this->form_validation->set_rules('home', 'Home Address', 'alpha_numeric_spaces');
 		 $this->form_validation->set_rules('office_landline', 'Office Landline Phone number', 'integer');
 		 $this->form_validation->set_rules('home_landline', 'Home Landline Phone number', 'integer');
 		 $this->form_validation->set_rules('mobile', 'Cell / Mobile Phone number', 'integer');
 		 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
 		 $this->form_validation->set_rules('webite', 'Website', 'valid_url');
 		 $this->form_validation->set_rules('socialmedia1', 'Social Media 1', 'valid_url');
 		 $this->form_validation->set_rules('socialmedia2', 'Social Media 2', 'valid_url');
 		 $this->form_validation->set_rules('chapter', 'Chapter', 'required');



 		 if ($this->form_validation->run() == FALSE){// check if form was validated
		 		$this->load->view('template/header');
		 		$this->load->view('registration/personalProfile');
		 		$this->load->view('template/footer');
		 }else{
		 	    $this->load->view('registration/addApplicant');

		 }//else
 		
 	}
 		
 		
 	

 	public function submitApplication(){

 		$this->load->view('template/header');
 		$this->load->view('registration/submitApplication');
 		echo "</body></html>";
 	}
	public function verify(){
		/* Done by the the chapter officers. Verify the informtion
		of the registion then send to the Admin for approval
		 */
	}//invite

	public function showApplicants($chapter){// show table of new applicants in members mainview
		//$chapter = 'HQ';
		

		
		$data['chapter'] = $chapter; //name of chapter appplicant registered to
		$data['status'] = "n"; //status of new applcants

		//print_r($data);


		$this->load->view('registration/showNewApplicants', $data);

	}//showApplicants

	 public function approveApplicant($id){
	 	/*Done by Admin First Transaction
		1. Update Approved to ID of approver, Status to 'a'
		2. Copy Applicant to Member table
		3. Update to tempory password
		4. Update member.change_password to TRUE.
	 	*/
	 	$User = $this->session->userdata("user");
	 	//$password = '$2y$10$YUleqNvRbKgvw7ho.FGi6uKsHgeC9J/Uh5prYhmF0Ew6Nk0A4jzPi';
	 	$this->db->trans_start();
		$this->db->query("	UPDATE applicants 
							SET Approved = $User, `Approval_Date`= NOW(), `Status`='a'
							WHERE`SeqNo` = $id;
						");
		$this->db->query(
						"INSERT INTO members (`ID`,`Firstname`,`Middlename`,`Surname`,`Salutation`, `Birthdate`,`Gender`,`Civil_Status`,`Photo`, `Office`,`Home`,`Office_landline`,`Home_landline`,`Mobile`,`Email`, `Website`, `Socialmedia1`, `Socialmedia2`,`Status`,`change_password`)
						SELECT `ID`,`Firstname`,`Middlename`,`Surname`,`Salutation`, `Birthdate`,`Gender`,`Civil_Status`,`Photo`, `Office`,`Home`,`Office_landline`,`Home_landline`,`Mobile`,`Email`, `Website`, `Socialmedia1`, `Socialmedia2`,'new',TRUE
						FROM `applicants` 
						WHERE SeqNo = $id ");

		/*$this->db->query("UPDATE members
						  SET `password` =  QUOTE('$2y$10$YUleqNvRbKgvw7ho.FGi6uKsHgeC9J/Uh5prYhmF0Ew6Nk0A4jzPi')
						  WHERE SeqNo = $id;
						");
		$this->db->query("UPDATE members
						  SET `change_password` = TRUE
						  WHERE SeqNo = $id;
						");*/
		$this->db->trans_complete();
		redirect(base_url('administrator/members'));
		//echo "Transaction completed";

	 }
	 	

	//approve  }

	 public function viewApplicant($id){

	 	$data['id'] = $id;
	 	$this->load->view('registration/viewApplicant', $data);

	 }//viewApplicant


	 public function verifyApplicant($Seqid){
		/* change the status column from 'n' to 'v' 
		and redirect back to member dashboard */
		/*echo $id." is inside verifyApplicant";*/

		$this->applicants->verifyApplicant($Seqid);
		redirect(base_url('chapter_officer/member'));


	} //verifyApplicant

	public function rejectApplicant($id){
		/*Delete form applicant table */
		//echo $id." is inside rejectApplicant";
		$this->applicants->rejectApplicant($id);
		redirect(base_url('chapter_officer/member'));
	}//rejectApplicant

    public function showVerifiedApplicants(){
       // echo "inside showApplicants";

      $data['verifiedApplicants']= array();

       $query = $this->applicants->showApplicants();
      
      foreach ($query->result() as $row)
		{
			
        array_push( $data['verifiedApplicants'], $row);
		}



		//print_r($data);
      // $data['verifiedApplicants'] = $row;

     $this->load->view('registration/showVerifiedApplicants', $data);       

    }//showApplicants


	}//Registration
?>