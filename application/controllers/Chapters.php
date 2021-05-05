<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chapters extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                //load database models
                $this->load->model('chapter');
                //load libary
                $this->load->library('parser');
               // $this->load->library('session');
               // $this->load->library('table');
               // $this->load->library('form_validation');
               // $this->load->helper('form');

                
        }//construct

    public function index(){
        //echo "at Chapter";
            if($this->session->userdata('admin')== FALSE){redirect(base_url('/administrator/login'));}
            $this->load->view('template/header');
            $this->load->view('template/menu');
              //echo 'here';


          $chap = array( 'row' => $this->chapter->getNewChapters()->result_array());

          $this->parser->parse("chapters/dashboard_template", $chap);

            $this->load->view('template/footer');
    }//index

    public function addForm(){

    if($this->session->userdata('admin')== FALSE){redirect(base_url('/adminstrator/login'));}
    //if not login, redirect to login

    /*setup validation 
    add error delimiter for red and clear error mesage.
    set rules for testing each imput if valid
    */
    $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</alert></div>");
    $this->form_validation->set_rules('name', 'Name of Chapter', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('address', 'Address of Chapter', 'required');
    $this->form_validation->set_rules('landline', 'Landline phone', 'is_natural|min_length[7]|max_length[12]');
    $this->form_validation->set_rules('mobile', 'Cellphone number required', 'required|is_natural|min_length[7]|max_length[12]');
    $this->form_validation->set_rules('email', 'Email Address required', 'required|valid_email');
    $this->form_validation->set_rules('website', 'Website or Social Media', 'valid_url');
    $this->form_validation->set_rules('head', 'Chapter head required', 'required');
    $this->form_validation->set_rules('remark', 'Remarks', 'alpha_numeric_spaces');
    
    if ($this->form_validation->run() == FALSE)// check if form was validated
                {//if form was not validated redirect to add form
                        $this->load->view("template/header");
                        $this->load->view("template/menu");
                        $this->load->view("chapters/addForm");
                        $this->load->view("template/footer");
                }
                else
                {// if form was valiated , process the request by inserting to table Chapters
                    //$this->load->view("template/header");
                        $this->load->view('chapters/add');
                       // $this->load->view("template/footer");
                }
  }//addChapter

  public function search()
  {
    if($this->session->userdata('admin')== FALSE){redirect(base_url('/adminstrator/login'));}
    //if not login, redirect to login
    $this->form_validation->set_rules('chapter', 'search Parameter', 'required|alpha_numeric_spaces');
    
  if ($this->form_validation->run() == FALSE)
                {
                    

                    $this->load->view("template/header");
                    $this->load->view("template/menu");
                       // echo "validation false";
                       // $this->load->view("hq/menu");
                      //  $this->load->view("hq/manage-chapter-menu"); 
                   
 
 
                    $chap = array( 'row' => $this->chapter->getNewChapters()->result_array());
                    $this->parser->parse("chapters/dashboard_template", $chap);
                   // $this->load->view("chapters/dashboard");
                    $this->load->view("template/footer");
                }
                else
                {
                    $this->load->view("template/header");
                    $this->load->view("template/menu");
                   // echo "validation true";
                    $this->load->view('chapters/search');
                    $this->load->view("template/footer");
                }
       
  }// searchChapter

 public function view($SeqID){
    if($this->session->userdata('admin')== FALSE){redirect(base_url('/adminstrator/login'));}
    //if not login, redirect to login
      $chapter = $this->chapter->viewChapter($SeqID);
      //$row = $chapter->row();
      $row=$chapter->row_array();
      $this->load->view("template/header");
      $this->load->view("template/menu");
      $this->parser->parse('chapters/view_template', $row);
      $this->load->view("template/footer");
  }//viewChapter


  public function delete($SeqID)
  {

    $this->chapter->delete($SeqID);
    $this->session->set_flashdata('chapter', 'Chapter Deleted Successfully!');
    redirect(base_url('chapters'));
  }

  public function updateForm($SeqID){
    //populate the update form, 
    if($this->session->userdata('admin')== FALSE){redirect(base_url('/hq/login'));}
    //if not login, redirect to login
    $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</alert></div>");
    $this->form_validation->set_rules('name', 'Name of Chapter', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('address', 'Address of Chapter', 'required');
    $this->form_validation->set_rules('landline', 'Landline phone', 'is_natural|min_length[7]|max_length[12]');
    $this->form_validation->set_rules('mobile', 'Cellphone number required', 'required|is_natural|min_length[7]|max_length[12]');
    $this->form_validation->set_rules('email', 'Email Address required', 'required|valid_email');
    $this->form_validation->set_rules('website', 'Website or Social Media', 'valid_url');
    $this->form_validation->set_rules('head', 'Chapter head required', 'required');
    $this->form_validation->set_rules('remark', 'Remarks', 'alpha_numeric_spaces');


    if ($this->form_validation->run() == FALSE){
      $chapter = $this->chapter->getSingle($SeqID);
      $row = $chapter->row();
      $this->load->view("template/header");
      $this->load->view("template/menu");
      $this->load->view('chapters/updateForm', $row);
      $this->load->view("template/footer");
    } else {
      $this->update();
    }  
    

  }//updateChapterForm

  public function update()
  {
    //get input from form
    $SeqID = $this->input->post('seqid');
    $name = $this->input->post('name');
    $address = $this->input->post('address');
    $country = $this->input->post('country');
    $landline = $this->input->post('landline');
    $mobile = $this->input->post('mobile');
    $email = $this->input->post('email');
    $website = $this->input->post('website');
    $head = $this->input->post('head');
    $status = $this->input->post('Status');
    
    //clean data
   $SeqID = $this->security->xss_clean($SeqID);
   $name = $this->security->xss_clean($name);
   $address = $this->security->xss_clean($address);
   $country = $this->security->xss_clean($country);
   $landline = $this->security->xss_clean($landline);
   $mobile = $this->security->xss_clean($mobile);
   $email = $this->security->xss_clean($email);
   $website = $this->security->xss_clean($website);
   $head = $this->security->xss_clean($head);
   $status = $this->security->xss_clean($status);

    $SeqID = htmlspecialchars($SeqID); 
    $address = htmlspecialchars($address); 
    $country = htmlspecialchars($country); 
    $landline = htmlspecialchars($landline); 
    $mobile = htmlspecialchars($mobile); 
    $email = htmlspecialchars($email); 
    $website = htmlspecialchars($website); 
    $head = htmlspecialchars($head); 
    $status = htmlspecialchars($status); 

    //arrange into array
    $chapter = array(
          'name' => $name,
          'address'=> $address,
          'country'=> $country,
          'landline' => $landline,
          'mobile' => $mobile,
          'email' => $email,
          'website' => $website,
          'head' => $head,
          'status' => $status

        );

   

    //Update Database
    $this->chapter->update($chapter, $SeqID);
    $this->session->set_flashdata('chapter', 'Chapter Updated Successfully!');
    redirect(base_url('/chapters'));

  }//updateChapter

  public function getChapterNames(){
    $query = $this->chapter->getChapterNames();
    
    foreach ($query->result_array() as $row)
      {
        echo '<option value='.$row['Name'].'>'.$row['Name'].'</option>';
      }
     echo '</datalist>'; 
  }

}//Chapter 