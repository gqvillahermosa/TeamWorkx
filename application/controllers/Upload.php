<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

       public function __construct()
        {
                parent::__construct();
                $this->load->model('applicants');
                $this->load->helper(array('form', 'url'));
        }//construct

        
       /* public function index(){
                echo'inside Upload';
        }*/
         public function remap($method){ 
                /*remap Upload so there is only one controller. Change method dynamcly by methods.
                method showIdForm load ID Photo Form
                method showPIC load Prof Identificaton Card Form
                method showProof load Proof of Payment form
                */

                if($method === 'showIdForm'){
                       $this->showIdForm();
                      //  echo 'showIdForm';
                }

                 if($method === 'showPIC'){
                       $this->showPIC();
                     //   echo 'showPIC';
                }
                        echo 'showProof';
                if($method === 'showPIC'){
                       $this->showProof();
                      //  echo 'showProof';
                }

        }//remap

                public function showIdForm(){
                $this->load->view('template/header');
                $this->load->view('upload/upload_form', array('error' => ' ' ));
                echo "</body></html>";      
        }//showIdForm

        public function showPIC(){
                $this->load->view('template/header');
                $this->load->view('uploadpic/upload_form', array('error' => ' ' ));
                echo "</body></html>";
        }//showPIC

        public function showProof(){
                $this->load->view('template/header');
                $this->load->view('uploadproof/upload_form', array('error' => ' ' ));
                echo "</body></html>";
        }//showProof

public function do_upload($mode) //'id' for id photo, pic for PIC photo for upload
        {
              
                switch ($mode) { //change upload path 
                        case 'id':
                                # code...
                                $config['upload_path'] = './id_photo';
                                break;
                         case 'pic':
                                # code...
                                 $config['upload_path'] = './pic_photo';
                                break;
                        case 'proof':
                                # code...
                                 $config['upload_path'] = './proof_photo';
                                break;
                }//switch


              //  $config['upload_path']          = $this->session->path_id_photo;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('template/header');
                        
                        switch ($mode) 
                        {
                        case 'id':
                                # code...
                               $this->load->view('upload/upload_form', $error);
                                break;
                         case 'pic':
                                # code...
                               $this->load->view('uploadpic/upload_form', $error);
                                break;
                        case 'proof':
                                # code...
                                $this->load->view('uploadproof/upload_form', $error);
                                break;
                        }//switch
                        
                        $this->load->view('template/footer');
                }//if
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        //print_r($data);
                        $this->applicants->updateID($this->session->pic_id, $this->upload->data('file_name')  );

                        $this->load->view('template/header');
                        
                        switch ($mode) {
                                case 'id':
                                        # code...
                                       $this->load->view('upload/upload_success', $data);
                                        break;
                                 case 'pic':
                                        # code...
                                     $this->load->view('uploadpic/upload_success', $data);
                                        break;
                                case 'proof':
                                        # code...
                                      $this->load->view('uploadproof/upload_success', $data);
                                        break;
                                default:
                                        # code...
                                       //$config['upload_path'] = $mode;
                                        break;
                        
                        
                        }//switch
                        $this->load->view('template/footer');
               
                }//else



        }//do_upload

} 


?>