<?php 
class cStudent extends CI_controller {
	public function __construct() {
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
			if ($this->session->loggIn == TRUE) {
			
		}else
		{
			redirect('connection/login');

		}
		$this->load->Model('users_model');
		$this->load->Model('Calendar_model');
	}
	// Student home
	public function index() 
	{
		$data['activeLink'] = 'Home Page';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/index.php',$data);
		$this->load->view('templates/footer.php');
		// $this->load->Model('m_worklog');
		// $this->m_worklog->selectDateTime();

	}
	// home work-log with button month
	public function worklog() 
	{

		$data['activeLink'] = 'work-log';
		$this->load->Model('m_worklog');
		$data['worklog'] = $this->m_worklog->getCurrentWorklog();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/worklog.php',$data);
		$this->load->view('student/insertReportWorklog.php',$data);
		$this->load->view('templates/footer.php');
	}
	// comment page 
	public function comment() 
	{
		$data['activeLink'] = 'Comment';
		$this->load->helper('form');
		$this->load->Model('m_worklog');
		$data['comment'] = $this->m_worklog->getComment();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/comment',$data);
		$this->load->view('templates/footer.php');
	}

	// calendar page
	public function calendar() 
	{
		$data['activeLink'] = 'Calendar';
		$this->load->view('templates/header.php',$data);
		$data['email'] = $this->users_model->mGetEmail();
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/calendarStu.php',$data);
			// $this->load->view('templates/footer.php');
	}

	// update profile page
	public function userProfile() 
	{
		// $data['activeLink'] = 'Calendar';
		$this->load->view('templates/header.php');
		$this->load->view('menu/studentMenu.php');
		$this->load->view('student/updateProfile.php');
		$this->load->view('templates/footer.php');
	}
// project work-log report

	// form worklog report
	public function weekReport()
	{
		$data['activeLink'] = 'work-log';
		$this->load->helper('form');
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/worklog.php',$data);
		$this->load->view('student/insertReportWorklog.php');
		$this->load->view('templates/footer.php');
	}
	public function getStuWork()
	{
		$month = $_GET['month'];
		$week = $_GET['week'];
	}

	// form edit and process of edit
	public function weekWorklog()
	{
		$month = $_GET['month'];
		$week = $_GET['week'];
		$data['activeLink'] = 'work-log';
		$this->load->helper('form');
		$Date = $this->input->post("date");
		$startTime = $this->input->post("starttime");
		$endTime = $this->input->post("endtime");
		$workActivities = $this->input->post("activities");
		$Learner = $this->input->post("yourlearn");
		$Issoues = $this->input->post("issues");
		$Solution = $this->input->post("solution");
		$toDo = $this->input->post("todo");
		$Comment = $this->input->post("comment");
		$this->load->Model('m_worklog');
		$this->m_worklog->updateWorklog($month,$week,$Id,$Date,$startTime,$endTime,$workActivities,$Learner,$Issoues,$Solution,$toDo,$Comment);

		$data['worklog'] = $this->m_worklog->weeklyWorklog();
		$data['activeLink'] = 'work-log';
		if($this->input->post('btn-submit') != NULL ){
			echo "error";
		} else {
			redirect("cStudent/getReport");
		}
		// $this->load->Model('m_worklog');
		// $data['worklog'] = $this->m_worklog->weeklyWorklog();

		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/worklog.php',$data);
		$this->load->view('student/editWorklog.php');
		$this->load->view('templates/footer.php');
	}

	// insert data to DB
	public function newReport()
	{
		$this->load->helper('form');
		$Date = $this->input->post("date");
		$startTime = $this->input->post("starttime");
		$endTime = $this->input->post("endtime");
		$activities = $this->input->post("activities");
		$Learner = $this->input->post("yourlearn");
		$Issoues = $this->input->post("issues");
		$Solution = $this->input->post("solution");
		$Todo = $this->input->post("todo");
		$Comment = $this->input->post("comment");
		$this->load->Model('m_worklog');
		$this->m_worklog->getReport($Date,$startTime,$endTime,$activities,$Learner,$Issoues,$Solution,$Todo,$Comment);
		
		if($this->input->post('btn-submit') != NULL){
			echo "error";
		} else {
			redirect("cStudent/getReport");
		}
	}

	// select data from work-log
	public function getReport()
	{
		$data['activeLink'] = 'work-log';
		$this->load->helper('form');
		$this->load->Model('m_worklog');
		$data['worklog'] = $this->m_worklog->getComment();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/worklog.php',$data);
		$this->load->view('student/editWorklog.php');
		$this->load->view('templates/footer.php');
	}	

	public function setCmt()
	{
		$this->load->helper('form');
		$comment = $this->input->post("comment");
		$this->load->Model('m_worklog');
		$this->m_worklog->setCmt($comment);
		$data['activeLink'] = 'work-log';
		$data['worklog'] = $this->m_worklog->weeklyWorklog();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/worklog.php',$data);
		$this->load->view('student/editWorklog.php');
		$this->load->view('templates/footer.php');
	}

}
?>
