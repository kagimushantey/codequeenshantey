<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_room extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
}

// For particular Record
public function getroomdetail($rid)
{
	$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getroomdetail($rid);
$this->load->view('admin/getroomdetails',$result);
}

public function deleteroom($rid)
{
$this->load->model('Admin_Login_Model');
$this->Admin_Login_Model->deleteroom($rid);
$this->session->set_flashdata('success', 'room data deleted');
redirect('admin/room');
}


}