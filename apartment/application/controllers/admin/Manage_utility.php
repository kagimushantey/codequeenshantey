<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_utility extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
}

// For particular Record
public function getutilitydetail($tid)
{
	$this->load->model('Admin_Login_Model');
$result['data']=$this->Admin_Login_Model->getutilitydetail($tid);
$this->load->view('admin/getutility',$result);
}

public function deleteutility($tid)
{
$this->load->model('Admin_Login_Model');
$this->Admin_Login_Model->deleteutility($tid);
$this->session->set_flashdata('success', 'utility data deleted');
redirect('admin/utilities');
}


}