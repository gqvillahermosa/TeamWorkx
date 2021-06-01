<?php
defined('BASEPATH') OR exit('No direct script access allowed');



function __construct()
	{
		//parent::__construct();
		$CI =& get_instance();
        
	}
class Auxilar {

		

	


        public function listNameID($query){
        	/*
        	make a list of ID/Names from a query
        	*/
		$ID = array();
		$name = array();
		$data = array();
		$members = array();
		foreach ($query->result_array() as $row)
		{
        	array_push($ID, $row['ID'] );
        	array_push($name, $row['Firstname']." ".$row['Surname'] );
       
		}

		$member = array_combine($ID, $name);

		//print_r($member);
		//echo "<br>";

		//array_push($data, $member);
		
		$data = array('data' => $member);
		return $data;

	}
	
}

?>