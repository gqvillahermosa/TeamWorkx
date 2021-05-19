<?php
$data = array( //get data from form nput
         'ID' => $this->input->post('pic_id'),
         'Sponsor_id' => $this->input->post('sponsor_id'),
         //'Sponsor_name' => $this->input->post('sponsor_name'),
         'Firstname' => $this->input->post('firstname'),
         'Middlename' => $this->input->post('middlename'),
         'Surname' => $this->input->post('surname'),
         'Salutation' => $this->input->post('salutation'),
         'Birthdate' => $this->input->post('birthdate'),
         'Gender' => $this->input->post('gender'),
         'Office' => $this->input->post('office'),
         'Home' => $this->input->post('home'),
         'Civil_Status' => $this->input->post('civil_status'),
         'Office_landline' => $this->input->post('office_landline'),
         'Home_landline' => $this->input->post('home_landline'),
         'Mobile' => $this->input->post('mobile'),
         'Email' => $this->input->post('email'),
         'Website' => $this->input->post('website'),
         'Socialmedia1' => $this->input->post('socialmedia1'),
         'Socialmedia2' => $this->input->post('socialmedia2'),
         'Registration_no' => $this->input->post('registration_no'),
         'Registration_date' => $this->input->post('registration_date'),
         'Valid_until' => $this->input->post('valid_until'),
         'Chapter' => $this->input->post('chapter'),
         'Organization' => $this->input->post('organization'),
         'Position' => $this->input->post('position'),
         'Office_fax' => $this->input->post('office_fax'),
         'Home_fax' => $this->input->post('home_fax'),
         'Degree' => $this->input->post('degree'),
         'Specialization' => $this->input->post('specialization'),
         'University' => $this->input->post('university'),
         'Year_graduated' => $this->input->post('year_graduated'),

         'Remarks' => $this->input->post('remarks')


     );//$data
 		//$applicant = array('' => '' );
		foreach ($data as $key => $value) {
 			$applicant[$key] =   $this->security->xss_clean($value);//clean each one
 			//echo  $applicant[$key]."<br";
 			# code...
 		}

 		$this->applicants->add($applicant);
 		redirect(base_url('/upload/showIdForm'));
?>