<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Chaptermembers extends CI_Model
{
	
	public function __construct()
	{
		# code...
		$this->load->database();
	}


public function getChaptername($ID){
	//echo "inside getChapter";
	$this->db->select('Chapter');
	$this->db->where('MemberID',$ID);
	$query = $this->db->get('chaptermembers');
	$row = $query->row();
	return $row->Chapter;
}

}//Chaptermembers

?>