<?php
/**
 * 
 */
class Cal extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		//$this->load->library('calendar');
	}

public function index(){

$prefs['template'] = '

        {table_open}<table border="10" cellpadding="10" cellspacing="10" >{/table_open}';

$prefs = array(
        'show_next_prev'  => TRUE,
        'next_prev_url'   => 'http://example.com/index.php/calendar/show/'
);

$this->load->library('calendar', $prefs);

echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));

}//index


}//Cal
?>