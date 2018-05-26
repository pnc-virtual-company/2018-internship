<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tutorDas extends CI_Controller {
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


	function index()
	{
		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->suNumRow();
		$data['company'] = $this->users_model->CNumRow();
		$data['tutor'] = $this->users_model->TNumRow();
	    $data['student'] = $this->users_model->sNumRow();
	    $data['student_bar'] = $this->users_model->getCompanyName();
	    $data['numstu'] = $this->users_model->getNumStu();
		$data['activeLink'] = 'Home Page';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/index.php');
		$this->load->view('templates/footer.php');
	}
	function studentDas()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
	    $data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/student/index.php',$data);
		
		$this->load->view('templates/footer.php');
	}
	function companyDas()
	{
		// $data['activeLink'] = 'company';
		// $this->load->view('templates/header.php',$data);
		// $this->load->view('menu/tutor.php',$data);

		// $this->load->view('tutorDashboard/company/index.php',$data);
		
		// $this->load->view('templates/footer.php');

		$this->load->helper('form');
		$this->load->Model('tutor_model');
		$data['company'] = $this->tutor_model->selectCompany();
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/company/index.php',$data);
		$this->load->view('templates/footer.php');

	}

	/* detail company */
	public function detailCompany()
	{
		$companyId = $_GET['id'];
		$this->load->Model('tutor_model');
		$data['company'] = $this->tutor_model->getCompanyDataDetail2($companyId);
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/company/detail.php',$data);
		$this->load->view('templates/footer.php');
	}

	public function detailTutor()
	{
		$tutorId = $_GET['id'];
		
		$data['activeLink'] = 'tutor';
		$this->load->Model('users_model');
		$data['tutor'] = $this->users_model->getTutorData();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/tutor/detail.php',$data);
		$this->load->view('templates/footer.php');
	}

	public function getSupDataDetail()
	{
		$supId = $_GET['id'];
		$this->load->Model('tutor_model');
		$data['ss'] = $this->tutor_model->getSupDataDetail($supId);
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/supervisor/detail.php',$data);
		$this->load->view('templates/footer.php');
	}
	/* list tutor */
	function tutorList()
	{
		$data['activeLink'] = 'tutor';
		$this->load->Model('tutor_model');
		$data['tutors'] = $this->tutor_model->selectTutor();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	function tutorDtail()
	{
		$data['activeLink'] = 'tutor';
		$tutorId = $_GET['id'];
		$this->load->Model('users_model');
		$data['tutor'] = $this->users_model->getTutorDataDetail($tutorId);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/tutor/detail.php',$data);
		$this->load->view('templates/footer.php');
	}
	function barChartD()
	{
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/company/barChart.php',$data);
		
		// $this->load->view('templates/footer.php');
	}
	function cDetailDas()
	{
		
		$data['activeLink'] = 'company';
		$companyId = $_GET['id'];
		$this->load->Model('tutor_model');
		$data['company'] = $this->tutor_model->getCompanyDetail($companyId);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/company/detail.php',$data);
		$this->load->view('templates/footer.php');

	}
	function detailStudentDas()
	{
		$data['activeLink'] = 'student';
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$data['student'] = $this->users_model->viewStudentData($stuId);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/student/sDetail.php',$data);
		
		$this->load->view('templates/footer.php');
	}


	function tSupervisorDas()
	{
		// $sId = $_GET['id'];
		$data['activeLink'] = 'supervisor';
		$this->load->Model('users_model');
	    $data['supervisor'] = $this->users_model->getSupervisorData();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/supervisor/index.php',$data);
		$this->load->view('templates/footer.php');
	}

	function viewSupervisorDas()
	{
		$sId= $_GET['id'];
		$this->load->Model('tutor_model');
		$data['activeLink'] = 'supervisor';
		$data['supervisor'] = $this->tutor_model->viewSupervisor($sId);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/supervisor/detail.php',$data);
		$this->load->view('templates/footer.php');
	}

	function listCommStuDas()
	{
		$data['activeLink'] = 'comment';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/comment/index.php',$data);
		$this->load->view('templates/footer.php');
	}

	function CommStuDas()
	{
		$stuId = $_GET['id'];
		$this->load->Model('tutor_model');
		$data['comment'] = $this->tutor_model->getStuCmt($stuId);
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/comment/commentStudent.php',$data);
		$this->load->view('templates/footer.php');
	}
	 function addCommStuDas()
	 {
	 	$stuId = $_GET['id'];
	 	$data['stuId'] = $stuId;
	 	$data['activeLink'] = 'comment';
	 	$this->load->view('templates/header.php',$data);
	 	$this->load->view('menu/tutor.php',$data);
	 	$this->load->view('tutorDashboard/comment/addComment.php',$data);
	 	$this->load->view('templates/footer.php');
	 }
	public function addComment()
	{
		$stuId = $_GET['id'];	
		$this->load->helper('form');
		$comment = $this->input->post("comment");
		$this->load->Model('tutor_model');
		$data['comments'] = $this->tutor_model->insertComment($comment,$stuId);
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('templates/footer.php');
		$this->load->Model('tutor_model');	
		$data['stuComment'] = $this->tutor_model->getStuCmt($stuId);
		$data['tutorComment'] = $this->tutor_model->getTuCmt($stuId);
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/comment/commentStudent.php',$data);
		$this->load->view('templates/footer.php');

		
	}
	// function viewWorkLog()
	// {
	// 	$data['activeLink'] = 'work-log';
	// 	$this->load->view('templates/header.php',$data);
	// 	$this->load->view('menu/tutor.php',$data);
	// 	$this->load->view('tutorDashboard/student/studentWorkLog.php',$data);
	// 	$this->load->view('templates/footer.php');
	// }
	function calendar()
	{
		$data['activeLink'] = 'calendar';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/calendar/index.php',$data);
		$this->load->view('templates/footer.php');
		
		}
		
	
	function questionnair()
	{
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/supervisor/questionnair.php',$data);
		$this->load->view('templates/footer.php');
		
	}

	function displayWorkLog()

	{
		$stuId = $_GET['id'];
		$data['activeLink'] = 'student';
		$this->load->Model('tutor_model');
		$data['work'] = $this->tutor_model->selectWorkLog();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/studnet/viewWorkLog',$data);
		$this->load->view('templates/footer.php');
	}

}



?>
