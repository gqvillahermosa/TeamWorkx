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

//clean data
// $SeqID = $this->security->xss_clean($SeqID);
   $name = $this->security->xss_clean($name);
   $address = $this->security->xss_clean($address);
   $country = $this->security->xss_clean($country);
   $landline = $this->security->xss_clean($landline);
   $mobile = $this->security->xss_clean($mobile);
   $email = $this->security->xss_clean($email);
   $website = $this->security->xss_clean($website);
   $head = $this->security->xss_clean($head);
   $remark = $this->security->xss_clean($remark);

    //$SeqID = htmlspecialchars($SeqID); 
    $address = htmlspecialchars($address); 
    $country = htmlspecialchars($country); 
    $landline = htmlspecialchars($landline); 
    $mobile = htmlspecialchars($mobile); 
    $email = htmlspecialchars($email); 
    $website = htmlspecialchars($website); 
    $head = htmlspecialchars($head); 
    $remark = htmlspecialchars($remark); 



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
redirect(base_url('chapters'));
// print_r($chapter);
 ?>
