<?php
class Members extends CI_Model{
		public function __construct()
		{
                $this->load->database();
        }//construct

        public function add($member){
        //insert a record of $member into database
        //return boolean, true if inserted record, false if failed to insert	
        }//add

        public function search_single($id){
        //retrived record of member with $id
        //return querry if successfull, null if none 

                $this->db->from('members');
                $this->db->where('ID', $id);
                $member = $this->db->get();
                return $member;

        }//search_single



        public function search_multi($attr){
        //retrived records of members with attribute
        //return querry if successfull, null if none	

        }//search_multi

        public function update($id, $attr){
        //update the record of a member of $id with $attr
        //return true of successful, false if failed	
        }//update

        public function delete($id){
        //delete the record of a member with $id
        //return true of successful, false if false	
        }//delete

        public function getFullname($id){
                $this->db->select('firstname, surname');
                $this->db->from('members');
                $this->db->where('ID', $id);
                $query = $this->db->get();#
                $name = $query->row();

                return $name->firstname.' '.$name->surname;

        }//getFullname

}//class Member

?>