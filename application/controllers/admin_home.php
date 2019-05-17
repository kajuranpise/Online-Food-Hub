<?php
/**
 * 
 */
class admin_home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('admin_home');
	}
	function product_insert_open(){
		$this->load->view('product_insert');
	}
	function product_display_open(){
		$this->load->model('admin_model');
		$rl = $this->admin_model->select_data();
		$this->load->view('product_display',['d1'=>$rl]);	
	}
	function offline_order_open(){
		
		$this->load->view('offline_order');
	}
	function offline_order_display_open(){
		$this->load->model('admin_model');
		$res= $this->admin_model->offline_order_display();
		$this->load->view('offline_order_display',['r1'=>$res]);
	}
	function online_order_display_open(){
		$this->load->view('online_order_display');
	}
	function product_insert(){
		$data= $this->input->post();
		$this->load->model('admin_model');
		unset($data['submit']);
		$res= $this->admin_model->insert_product($data);
		if ($res) {
			$this->load->view('product_insert',['msg'=>'insert']);
		}else{
			$this->load->view('product_insert',['msg'=>' ']);
		}
	}
	public function p_search(){

		$this->form_validation->set_rules('search','Product Name','required');
		if ($this->form_validation->run()) {
			$pname = $this->input->post('search');
            $this->load->model('admin_model');
            $res=$this->admin_model->sproduct($pname);
            if ($res) {
            	$this->load->view('offline_order',['d2'=>$res]);
            }else{
            	$this->load->view('offline_order',['d2'=>' ']);
            }
		}else{
			echo validation_errors();
		}
	}
	public function pbook($id){
		$this->load->model('admin_model');
		$res=$this->admin_model->pbook($id);
		$this->load->view('pro_book',['r1'=>$res]);
	}
	public function p_book2(){
		$this->form_validation->set_rules('pname','Product Name','required');
		$this->form_validation->set_rules('price','Price','required');
		$this->form_validation->set_rules('name','Customer Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('pin','Pin Code','required');
		$this->form_validation->set_rules('mno','Mobile No','required');
		$this->form_validation->set_rules('email','E-mail','required');
		if ($this->form_validation->run()) {
			$pname= $this->input->post('pname');
			$price= $this->input->post('price');
			$name= $this->input->post('name');
			$address= $this->input->post('address');
			$city= $this->input->post('city');
			$pin = $this->input->post('pin');
			$mno= $this->input->post('mno');
			$email= $this->input->post('email');


			$data= array(
				'name'=>$name,
				'address'=>$address,
				'mno'=>$mno,
				'pin'=>$pin,
			 	'city'=>$city,
			 	'email'=>$email,
			 	'pname'=>$pname,
			 	'price'=>$price
			 );
			$this->load->model('admin_model');
			$res=$this->admin_model->book2($data);
			if ($res) {
				$this->load->view('book_res',['msg'=>'Product Booked']);
			}else{
				$this->load->view('book_res',['msg'=>'Sorry,Try again']);
			}
		
		}else{
			//$this->load->view('pro_book');
		    echo validation_errors(); 
		}
	}
}
?>