<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Bigbro extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){

	}//index


	public function addLog($id, $action, $others){
		//echo "at addlog";
		$log = array('user' => $id, 
				  'action' => $action,
				  'others' => $others
				);
		$this->db->insert('bigbro',$log);
	}//addlog
}//Bigbro

?>