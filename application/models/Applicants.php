<?php
class Applicants extends CI_Model{
		public function __construct()
		{
                $this->load->database();
        }//construct

        public function add($applicant)
        {
        	$this->db->insert('applicants', $applicant);

        }//add

         public function updateID($id, $photo){
            $this->db->set('Photo', $photo);
            $this->db->where('ID', $id);
            $this->db->update('applicants');
        }//addPhoto



        public function updatePIC($id, $photo){
            $this->db->set('PIC_Photo', $photo);
            $this->db->where('ID', $id);
            $this->db->update('applicants');
        }//addPIC

        public function updateProof($id, $photo){
            $this->db->set('proof_of_payment', $photo);
            $this->db->where('ID', $id);
            $this->db->update('applicants');
        }//addProof

        public function search($name)
        {
        	/*//echo "inside search";
        	//$name = "BMA";
        	$this->db->from('chapters');
        	$this->db->like('Name', $name);
        	$chapters = $this->db->get();
        	return $chapters;*/
        }

        public function getSingle($id)
        {
                $this->db->from('applicants');
                $this->db->where('SeqNo', $id);
                $query = $this->db->get();
                return $query->row();
               
        }

        public function update($Chapter, $SeqID)
        {
               /* echo "inside update";
                print_r($Chapter); 
                echo $SeqID;*/
               /* $this->db->where('SeqID', $SeqID);
                $this->db->update('chapters', $Chapter);*/

        }//update

        public function delete($SeqID)
        {
 /*               $this->db->delete('chapters', array('SeqID' => $SeqID));*/
                
        }//delete

        public function count(){
            //return $this->db->count_all('chapters');

        }

        public function getHeaders($chapter, $status){ 
        //return id and name of new applicants by chapters
        //$status 'n' => new 

         $sql=("SELECT SeqNo, ID, Firstname, Surname 
                FROM applicants 
                WHERE Chapter = '$chapter' and Status ='$status'");

          //echo $sql;
          return $this->db->query($sql);
       }

       public function verifyApplicant($Seqid){
            $validatedBy = $this->session->userdata('user'); 
            //the one who login is the one who verifly
            $this->db->query("CALL verifyApplicant($Seqid,  $validatedBy )");
       }

        public function rejectApplicant($id){
            //echo "inside applicant model";
            $this->db->query("CALL rejectApplicant($id)");
       }

       public function showApplicants(){

        //echo "inside admin db";

        return $this->db->query('CALL getApplicants("v")'); //call verified applicant
        
    }//showApplicant

        public function showSponsor(){
            $this->db->showSponsor();
        }
}//Applicants

?>