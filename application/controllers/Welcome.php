<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//Default constructor
	function __construct()
	{
		parent::__construct();
		log_message('debug', 'URI=' . $this->uri->uri_string());
		if ($this->session->loggIn == TRUE) {
			
		}else
		{
			redirect('connection/login');

		}
	}

	public function index()
	{
		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->suNumRow();
		$data['company'] = $this->users_model->CNumRow();
		$data['tutor'] = $this->users_model->TNumRow();
		$data['student'] = $this->users_model->sNumRow();
		$data['student_bar'] = $this->users_model->getCompanyName();
		$data['numstu'] = $this->users_model->getNumStu();
		$data['activeLink'] = 'company';
		$this->load->view('IF/template/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('IF/template/footer', $data);
	}	
	public function sendMail(){
	  $this->load->library('email');
	  $this->load->model('users_model');
	  
	  $this->email->from('pnc.temporary.vc2018@passerellesnumeriques.org', 'Booking gig');
	  $this->email->to('devit.chea@student.passerellesnumeriques.org', "devit chea");
	  $this->email->subject(' R');
	  $this->email->message('Dear ');
	  if ($this->email->send()) {
	   	echo "successfully";
	  }else{
	   echo $this->email->print_debugger();
	  }
	  
	 }
}
