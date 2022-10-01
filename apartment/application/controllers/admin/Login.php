<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller {


public function index(){
$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('password','Password','required');
if($this->form_validation->run()){
$username=$this->input->post('username');
$password=$this->input->post('password');	
$this->load->model('Admin_Login_Model');
$validate=$this->Admin_Login_Model->validatelogin($username,$password);
if($validate)
{
$this->session->set_userdata('adid',$validate);
return redirect('admin/dashboard');
} else{
$this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
redirect('admin/login');

}

} else {
$this->load->view('admin/login');
}	
}

//function for logout
public function logout(){
$this->session->unset_userdata('adid');
$this->session->sess_destroy();
return redirect('admin/login');
}
public function tenants(){
	// $this->load->model('Admin_Login_Model');

 //            $result['data']=$this->Admin_Login_Model->tenants();
           
 //            //   $this->global['pagetitle']="Apartments: Edit tenants";
          
 //            // $this->loadViews('admin/tenants', $this->global, $result, NULL);
 //            $this->load->view('admin/tenants');
	$this->load->model('ManageUsers_Model');
$user=$this->ManageUsers_Model->getusersdetails();
$this->load->view('admin/tenants',['userdetails'=>$user]);
        
}
public function getuserdetail($uid)
{
$this->load->model('ManageUsers_Model');
$udetail=$this->ManageUsers_Model->getuserdetail($uid);
$this->load->view('admin/getuserdetails',['ud'=>$udetail]);
}
public function deleteuser($uid)
{
$this->load->model('ManageUsers_Model');
$this->ManageUsers_Model->deleteuser($uid);
$this->session->set_flashdata('success', 'User data deleted');
redirect('admin/manage_users');
}
public function getroomdetail()
{
$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getroomdetails();
$this->load->view('admin/room',$result);
}
public function getpaid()
{
$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getpaid();
$this->load->view('admin/paidrent',$result);
}
public function getpending()
{
$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getpending();
$this->load->view('admin/pending',$result);
}
public function getutilities()
{
$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getutilities();
$this->load->view('admin/utilities',$result);
}
public function getcomplaints()
{
$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getcomplaints();
$this->load->view('admin/complaints',$result);
}
 public function communication(){
 	$this->load->model('Admin_Login_Model');
        if($this->input->post('submit')){
            $message=$this->input->post('message');  
 $this->Admin_Login_Model->communicate($message);
 $this->session->set_flashdata('success', 'communication posted');
        }
        else{
          $this->load->view('admin/communication');
       }
   }
}