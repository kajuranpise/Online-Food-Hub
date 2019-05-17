<?php
/**
 * 
 */
class user_model extends CI_Controller
{
	
	function psc($data)
	{
		$query= $this->db->select(['id','name','price'])->from('product')->where('name',$data)->get();
		return $query->result();	
	}
	function psc1($id)
	{
		$query= $this->db->select(['id','name','price'])->from('product')->where('id',$id)->get();
		return $query->result();	
	}
}

?>