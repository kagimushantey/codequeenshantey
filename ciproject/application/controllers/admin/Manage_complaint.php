<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_complaint extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
}

// For particular Record
public function getcomplaintdetail($cid)
{
	$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getcomplaintdetail($cid);
$this->load->view('admin/getroomdetails',$result);
}

public function deletecomplaint($cid)
{
$this->load->model('Admin_Login_Model');
$this->Admin_Login_Model->deletecomplaint($cid);
$this->session->set_flashdata('success', 'room data deleted');
redirect('admin/room');
}


}