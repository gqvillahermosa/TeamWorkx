<?php
class Rank extends CI_Model{

public function __construct()
        {
                $this->load->database();
        }//construct

public function getRanks(){

		return $this->db->query("SELECT level as Level, name as Name, description as Description FROM `ranks`");

}//getRanks

public function getTestRank(){
		return $this->db->query("SELECT name as Name FROM `ranks`");
}//getTestRank
}//Rank
?>