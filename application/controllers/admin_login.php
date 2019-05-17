<?php
 class admin_login extends CI_controller{
 	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
 	public function index(){
 		$this->load->model('admin_model');
 		$this->load->view('admin_login');
 	}
 	public function login(){
 		$this->form_validation->set_rules('un','Username','required');
 		$this->form_validation->set_rules('ps','Password','required');

 		if ($this->form_validation->run()) {
 			 $un=$this->input->post('un');
 			 $ps=$this->input->post('ps');
 			 $this->load->model('admin_login1');
 			 $data=$this->admin_login1->login($un,$ps);
 			 if($data){
 			 	$this->session->set_userdata('id',$un);
 			 	return redirect('admin_home');
 			 }else{
 			 	echo "Wrong User";
 			 }
 		}else{
           $this->load->view('admin_login');
 		}
 	}
 }
?>