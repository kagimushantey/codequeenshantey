<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin_Login_Model extends CI_Model {


public function validatelogin($username,$password){

$query=$this->db->where(['userName'=>$username,'password'=>$password]);
	$account=$this->db->get('tbladmin')->row();
	if($account!=NULL){

return $account->id;
}
return NULL;
}
public function tenants(){

    $query=$this->db->query("select * from tblusers");
    return $query->result();  
}
public function getroomdetails(){
		$query=$this->db->select('room_id,Tenant,Block,Rent,Type')
		              ->get('room');
		        return $query->result();      
	}
	public function getroomdetail($rid){
 	$ret=$this->db->select('room_id,Tenant,Block,Rent,Type')
 	              ->where('room_id',$rid)
 	              ->get('room');
 	                return $ret->row();
 }

 // Function for use deletion
 public function deleteroom($rid){
$sql_query=$this->db->where('room_id', $rid)
                ->delete('room');
            }
            public function getutilitydetail($tid){
 	$ret=$this->db->selectselect('reason,Amount,Due')
 	              ->where('ulitilityid',$tid)
 	              ->get('utilities');
 	                return $ret->row();
 }

 // Function for use deletion
 public function deleteutility($tid){
$sql_query=$this->db->where('ulitilityid',$tid)
                ->delete('utilities');
            }
            public function getpaid(){
		$query=$this->db->select('amount,Bank,Payee,Room')
		              ->get('paidrent');
		        return $query->result();   
            }
 public function getpending(){
		$query=$this->db->select('amount,Payee,Room')
		              ->get('pending');
		        return $query->result();   
            }
            public function getutilities(){
		$query=$this->db->select('reason,Amount,Due')
		              ->get('utilities');
		        return $query->result();   
            }
            public function getcomplaints(){
		$query=$this->db->select('complaint_id,tenant,room','issue','date')
		              ->get('complaints');
		        return $query->result();   
            }
            public function getcomplaintdetail($cid){
 	$ret=$this->db->selectselect('complaint_id,tenant,room','issue','date')
 	              ->where('complaint_id',$cid)
 	              ->get('complaints');
 	                return $ret->row();
 }

 // Function for use deletion
 public function deletecomplaint($cid){
$sql_query=$this->db->where('complaint_id', $cid)
                ->delete('complaints');
            }
public function communicate($message){
        $query=$this->db->query("insert into communication(message,date) values('$message', NOW())");
        return true;
    }

}

