<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Admin extends CI_Model{
	public function __construct()
        {
                $this->load->database();
        }
		
	public function validateUser( $id)
	{

		$query = $this->db->query("SELECT * FROM  admininfo");
		$hash = $query->row()->password;//get hash password
		$password = $this->input->post("password");
		//echo $hash;
		if( password_verify($password, $hash)){
			//echo "true";
			return 1;
		}else{
			//echo "false";
			return 0;
		}
		
	}	

	public function validateChapterOfficer($ID, $password)
	{

		//echo "inside validateUser";
		$this->db->select('password');
		$this->db->where('ID',$ID);
		$query = $this->db->get('admins');
		$row = $query->row();
		$hash = $row->password;
		//echo $hash;
		if( password_verify($password, $hash)){
			//echo "true";
			return 1;
		}else{
			//echo "false";
			return 0;
		}
		
	}	//validateChapterOfficer
	//moved showApplicant to  Applicant Model

	

	
}
?>