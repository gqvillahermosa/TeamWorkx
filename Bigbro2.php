<?
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Like big brothere it monitors the activites of the users .
 */
class Bigbro extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

function addLog($id, $info, $others){

	$log = array('user' => $id, 
				  'action' => $info,
				  'others' => $others
				);
	$this->db->insert('bigbro',$log);

}


}//Bigbro

	
?>