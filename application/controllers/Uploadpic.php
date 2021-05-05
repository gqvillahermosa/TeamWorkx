<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadpic extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('applicants');
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {       
                $this->load->view('template/header');
                $this->load->view('uploadpic/upload_form', array('error' => ' ' ));
                echo "</body></html>";
        }

        public function do_upload($mode) //'id' for id photo, pic for PIC photo for upload
        {
                $config['upload_path']          = $this->session->path_pic_photo;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('template/header');
                        $this->load->view('/uploadpic/upload_form', $error);
                        $this->load->view('template/footer');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        //print_r($data);
                        $this->applicants->updatePhoto($this->session->pic_id, $this->upload->data('file_name')  );
                        $this->load->view('template/header');
                        $this->load->view('uploadpic/upload_success', $data);
                        $this->load->view('template/footer');
                }
               
        }// do_upload
}
?>