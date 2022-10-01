<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_Login_Model extends CI_Model {


public function validatelogin($emailid,$password,$status){

$query=$this->db->where(['emailId'=>$emailid,'userPassword'=>$password]);
	$account=$this->db->get('tblusers')->row();
	if($account!=NULL){
 $dbstatus=$account->isActive;


//verifying status
if( $dbstatus==$status){
return $account->id;
} else {
return NULL;
$this->session->set_flashdata('error', 'Your account is is not active contact admin');
redirect('user/login');
}
}
return NULL;
}
public function displaypaid($userid){
	$query=$this->db->select('amount,bank,payee,room,date')
                ->where('payee',$userid)
                ->from('paidrent')
                ->get();
  return $query->row();  
}
   public function getcommunication(){
		$query=$this->db->select('message,date')
		              ->get('communication');
		        return $query->result();  
}
public function complaint($name,$room,$issue){
	// $date=date('Y-m-d H:i:s');
        $query=$this->db->query("insert into complaints(tenant,room,issue,date) values('$name','$room','$issue',NOW())");
        return true;
    }

}

