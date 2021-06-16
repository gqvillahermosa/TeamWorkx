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

                $this->db->select('firstname, surname'); //return to IG method
                $this->db->from('members');
                $this->db->where('ID', $id);
                $query = $this->db->get();#

                //$query = $this->db->query("CALL getMemberName($id)"); error out of sync
                $name = $query->row();

                return $name->firstname.' '.$name->surname;

        }//getFullname

        public function validateUser($id, $password){
                /*get the USER ID and Password
                check if the user's password if the match the hash password in the database
                if match return TRUE else return FALSE
                */
                /*echo "inside validateUser";
                echo $id.' '.$password;
                echo "<br>";*/

                $this->db->where('ID', $id);
                $this->db->select('password');
                $query = $this->db->get('members');

               $hash_password = $query->row()->password;

                if (password_verify($password, $hash_password)){
                       return TRUE;
                }else{
                       return FALSE;
                }

        }

        public function changePassword($id, $password){
            /* change the password of $id with $password
                get the hash of $password
                update password of member with the hash identified with $id.
            */

            echo "inside changePassword";
            echo '$id:'.$id."<br>";
            echo '$password:'.$password."<br>";

            $hash_password = password_hash($password, PASSWORD_BCRYPT );
            echo 'hash:'.$hash_password.'<br>';

            $data = array('password' => $hash_password,
                            'change_password' => FALSE);

            $this->db->where('ID', $id);
            $this->db->update('members', $data);


        }//changePassword


        public function getMemberbyChapters($chapter){
            //return querry of members from a specific chapter

            $this->db->where('chapter', $chapter);
           // $this->db->select('ID','Firstname','Surname');
            $query = $this->db->get('members');

            return  $query;
        }

}//class Member

?>