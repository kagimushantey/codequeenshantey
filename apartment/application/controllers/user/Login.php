<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller {


public function index(){
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('password','Password','required');
if($this->form_validation->run()){
$emailid=$this->input->post('emailid');
$password=$this->input->post('password');
$status=1;	
$this->load->model('User_Login_Model');
$validate=$this->User_Login_Model->validatelogin($emailid,$password,$status);
if($validate)
{
$this->session->set_userdata('uid',$validate);
return redirect('user/dashboard');
} else{
$this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
redirect('user/login');

}

} else {
$this->load->view('user/login');
}	
}
public function paidrent(){
$this->load->model('User_Login_Model');	
$userid = $this->session->userdata('uid');
$result['data']=$this->User_Login_Model-> displaypaid($userid);
$this->load->view('user/payment',$result);
}
public function getcommunication()
{
$this->load->model('User_Login_Model');
$result['data']=$this->User_Login_Model->getcommunication();
$this->load->view('user/post',$result);
}
public function complaint(){
 	$this->load->model('User_Login_Model');
        if($this->input->post('submit')){
            $name=$this->input->post('name'); 
             $room=$this->input->post('room'); 
              $issue=$this->input->post('issue');   
 $this->User_Login_Model->complaint($name,$room,$issue);
 $this->session->set_flashdata('success', 'complaint posted');
        }
        else{
          $this->load->view('user/complaint');
       }
   }
//function for logout
public function logout(){
$this->session->unset_userdata('uid');
$this->session->sess_destroy();
return redirect('user/login');
}

}