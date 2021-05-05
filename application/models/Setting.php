<?php 

class Setting extends CI_Model
{
	
	function __construct()
	{
		# code...
		$this->load->database();
	}

	public function getTitle(){
		$this->db->select('Title, Slogan');
		$this->db->where('SeqID',1);
		$query = $this->db->get('settings');
		$row = $query->row_array();
		return $row;
	}//getTitle

	public function updateTitle($title){
		$data = array('title' => $title );
		$this->db->where('SeqID', 1);
		$this->db->update('settings', $data);
	}//changeTitle


	public function updateSlogan($slogan){
		$data = array('slogan' => $slogan );
		$this->db->where('SeqID', 1);
		$this->db->update('settings', $data);
	}//changeTitle
}//Settings

 ?>