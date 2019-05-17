<?php
class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('user_model');
	}
	public function index(){
		$this->load->view('home');
	}
	public function open_contact(){
		$this->load->view('contact');
	}
	public function open_home(){
		$this->load->view('home');
	}
	public function open_product(){
		$this->load->view('product');
	}
	public function psc(){
		$data=$this->input->post('search');
		$res = $this->user_model->psc($data);
		$this->load->view('user_pro_disp',['res'=>$res]);

	}
	public function b_now($id){
		
		$res = $this->user_model->psc1($id);
		$this->load->view('user_pro_book',['res'=>$res]);
		

	}
}

?>