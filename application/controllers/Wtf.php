<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wtf extends CI_Controller
{
	
	function __construct()
	{
		# code...
	}


	public function index($type){

		switch ($type) {
			case '1':
				# code...
				echo "you sponsor's id is incorrect. Please contact you sponsor ASAP";
				break;
			
			default:
				# code...
				echo "I do not know that.";
				break;
		}
	}
}


?>