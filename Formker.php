<?php  

/**
 * 
 */
class Formker extends CI_Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index(){
		/*$config['hostname'] = 'localhost';
		$config['username'] = 'webdb';
		$config['password'] = 'Jempzxc1';
		$config['database'] = 'dojosys';*/
		$db = $this->load->database('dojosys');
		//$this->db->conn_id;
		$query = $db->query("CALL  `showTables` ");
		print_r($query->result_id);
	}
}


?>