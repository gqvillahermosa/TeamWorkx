<?php
class News extends CI_Model{
	  public function __construct()
        {
                $this->load->database();
        }

        public function addNews()
        {
        	//echo "inside addNews";
            $news = array(
                            'title' => $_POST['title'] , 
                            'body' => $_POST['body'] , 
                            'link' => $_POST['link'] , 
                            'published' => $_POST['published'] , 
                            'chapter' => $_POST['chapter'] , 
                            'author' => $_POST['author'] , 
                            'remarks' => $_POST['remarks'] , 

            );
            //print_r($news);
            //$sql = $this->db->set($news)->get_compiled_insert('news');
            //echo $sql;
            $this->db->insert('news', $news);

        }

        public function listNews(){
        	//$sql = 'SELECT * FROM news';
        	$query = $this->db->query("select * from news limit 2");
        	return $query;
        }

         public function findNews()
        {
        	
        }

         public function editNews()
        {
        	
        }

         public function removeNews()
        {
        	
        }

}
?>