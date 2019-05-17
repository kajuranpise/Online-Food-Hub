<?php 

/**
 * 
 */
class admin_login extends CI_Model
{

	function __construct(argument)
	{
		# code...
	}
	public function login($un,$ps){
		$q=$this->db->select(['un','ps'])->form('admin')->where('un',$un)->where('ps',$ps)->get();
        return $q->row();
	}
}
?>