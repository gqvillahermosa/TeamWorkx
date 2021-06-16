<?php
class Chapter extends CI_Model{
		public function __construct()
		{
                $this->load->database();
        }//construct

        public function add($chapter)
        {
        	$this->db->insert('chapters', $chapter);

        }//add

        public function search($name)
        {
        	//echo "inside search";
        	//$name = "BMA";
        	$this->db->from('chapters');
        	$this->db->like('Name', $name);
        	$chapters = $this->db->get();
        	return $chapters;
        }

        public function getSingle($id)
        {
                //echo "inside search";
                //$name = "BMA";
                $this->db->from('chapters');
                $this->db->where('SeqID', $id);
                $chapter = $this->db->get();
                return $chapter;
        }

        public function update($Chapter, $SeqID)
        {
               /* echo "inside update";
                print_r($Chapter); 
                echo $SeqID;*/
                $this->db->where('SeqID', $SeqID);
                $this->db->update('chapters', $Chapter);

        }//update

        public function delete($SeqID)
        {
                $this->db->delete('chapters', array('SeqID' => $SeqID));
                
        }//delete

        public function getNewChapters()
        {
            $this->db->select('SeqID, Name, Address, Country');
            $this->db->order_by('SeqID', 'DESC');
           //$this->db->limit(2);
            return $this->db->get('chapters');
        }// getNewChapter

        public function viewChapter($SeqID)
        {
                $this->db->where('SeqID', $SeqID);
               // echo "inside viewChapter";
                return $this->db->get('chapters');
        }//chapter

        public function count(){
            return $this->db->count_all('chapters');
        }

        public function getChapterNames(){
                   
                   $this->db->select('Name');
                   $this->db->distinct();
            return $this->db->get('chapters');

        }
}//Chapter

?>