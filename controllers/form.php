<?php

class Form extends CI_Controller {

    public function index() {
        try {
            
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_fullname_check');
            $this->form_validation->set_rules('username', 'User Name', 'trim|required|alpha_numeric_spaces|min_length[5]|is_unique[users.user_name]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[16]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]|min_length[8]||max_length[16]');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('photo','User Photo','required|callback_filename_check');
            
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('form_view');
            }
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

     public function fullname_check($name){
        
       if(!preg_match("/^[a-zA-Z ]+$/i", $name)){
            $this->form_validation->set_message('fullname_check', 'The %s field can only be alpha and space');
        return FALSE;
       }
        
    }
    
    public function filename_check($photo){
        
        $ext  = pathinfo($photo,PATHINFO_EXTENSION);
        if(array_search($ext,FILE_EXTENSION))
            return TRUE;
        else{
            $this->form_validation->set_message('filename_check', 'Invalid File extension.');
            return FALSE;
        }
    }
}
