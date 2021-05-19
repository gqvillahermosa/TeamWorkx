<?php
 $name = 	$this->input->post('name'); 
 $address = $this->input->post('address'); 
 $country = $this->input->post('country'); 
 $landline = $this->input->post('landline'); 
 $mobile = 	$this->input->post('mobile'); 
 $email = 	$this->input->post('email'); 
 $website = $this->input->post('website'); 
 $head = 	$this->input->post('head'); 
 $remark = 	$this->input->post('remark'); 

 $chapter = array(
 				'name' => $name, 
 				'address' => $address, 
 				'country' => $country, 
 				'landline' => $landline,
 				'mobile' => $mobile, 
 				'email' => $email,
 				'website' => $website,
 				'head' => $head,  
 				'remarks' => $remark   
 			);
 $this->chapter->add($chapter);
$this->session->set_flashdata('chapter', 'Chapter Added Succesfully!');
redirect(base_url('hq/searchChapter'));
// print_r($chapter);
 ?>
