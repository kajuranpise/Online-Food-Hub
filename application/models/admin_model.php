<?php

/**
 * 
 */
class admin_model extends CI_Model
{
	
	public function insert_product($data) 
	{
		return $this->db->insert('product',$data);
	}
	public function select_data(){
   		$query=$this->db->select(['id','name','price'])->from('product')->get();
   		return $query->result();
	}
	public function sproduct($pname)
	{
		$query=$this->db->select(['id','name','price'])->from('product')->where('name',$pname)->get();
		return $query->row();
	}
	public function pbook($id){
		$query=$this->db->select(['id','name','price'])->from('product')->where('id',$id)->get();
		return $query->row();
	}
	public function book2($data){
		return $this->db->insert('offline_product',$data);
	}
	public function offline_order_display(){
		$query= $this->db->select(['name','address','mno','pin','city','email','pname','price'])->from('offline_product')->get();
		return $query->result();
	}
}
?>