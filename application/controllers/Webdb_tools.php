<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Webdb_tools extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('chaptermembers');
        $this->load->model('admin');
        $this->load->model('members');
        $this->load->model('bigbro');
         $this->load->model('applicants');
		# code...
		$this->load->helper('html');
		$this->load->library('session');
		$this->load->database();
		$this->load->library('table');
	}

	public function index(){
		/* initialized all variables. Display the dashboard*/

		$tables = array('tables' => $this->showTabs());
		//print_r($tables);
		$this->load->view('template/header');
		$this->load->view('webdb_tools/dashboard', $tables);
		$this->load->view('template/footer');
	}


	public function showTabs(){
		/* Returns the  table name from database*/
		$query = $this->db->query( 'SHOW TABLES');
		$tables = array();
		foreach ($query->result() as $row)
		{
	       array_push($tables,$row->Tables_in_dojosys );
		}

		return $tables;

	}//showTabs

	public function descTab($table){
		/*Returns the Field names and datatypes as an array (Field => Datatype) of $table*/
		$query = $this->db->query(" describe $table ");
		
		//var_dump($query->result());

		$fields = array();
		$types = array();

		foreach ($query->result_array() as $row)
		{
	       array_push($fields, $row['Field']);
	       array_push($types, $row['Type']);
		}

		$formElements = array_combine($fields, $types);
		//print_r($formElements);
		return $formElements;

	}//descTab

	public function showTable($tableName){
		/* Displace Tables Fields and Datatypes*/

		if($tableName != 'none'){

			$tableDescription = array('table' => $this->descTab($tableName));
			$this->load->view('template/header');
			$this->load->view('webdb_tools/tableDescription', $tableDescription );
			//$this->load->view('template/footer');
		}else{
			echo "Welcome!";
		}

	}//showTable


	public function creator(){
		/* create template form and table based on fields post */

		/* create form */

		$which = $this->input->post('whichis');
		//print_r($which);
		if( $which == 'form'){
			$this->load->view('template/header');
			$this->load->view('webdb_tools/createForm');
		}else{
			$this->load->view('template/header');
			$this->load->view('webdb_tools/createTable');
		}


		

		

	}//creator
}



?>