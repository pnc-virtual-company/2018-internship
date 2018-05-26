<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_IF extends CI_Controller {

	//Default constructor
	function __construct()
	{
		parent::__construct();
		log_message('debug', 'URI=' . $this->uri->uri_string()); 
		$this->load->helper(array('form','url'));
		if ($this->session->loggIn == TRUE) {
			
		}else
		{
			redirect('connection/login');

		}
	}
	// view login
	public function index()
	{
		$this->load->view('login/login');
	}
	/*==============================*/

	public function loadDoUpload()
	{
		$this->load->view('image.php');

	}
	public function home()
	{

		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->suNumRow();
		$data['company'] = $this->users_model->CNumRow();
		$data['tutor'] = $this->users_model->TNumRow();
		$data['student'] = $this->users_model->sNumRow();
		$data['student_bar'] = $this->users_model->getCompanyName();
		$data['numstu'] = $this->users_model->getNumStu();
		$data['activeLink'] = 'Home';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/index.php',$data);
		$this->load->view('templates/footer.php');

	}
	// Company Function 
	public function company()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function detailCompany()
	{
		$companyId = $_GET['id'];
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyDataDetail($companyId);
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/detail.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function editeCompany()
	{
		$companyId = $_GET['id'];
		$this->load->Model('users_model');
		// var_dump($companyId);die();
		$data['company'] = $this->users_model->getCompanyDataDetail($companyId);
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/edite.php');
		$this->load->view('templates/footer.php');
	}
	public function seEediteCompany()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$companyId = $_GET['id'];
		$name = $this->input->post("name");
		$description = $this->input->post("itemdescription");
		$location = $this->input->post("address");
		$phone = $this->input->post("phone");
		$lat = $this->input->post("lat");
		$lng = $this->input->post("long");
		$address = $this->input->post("postaladdress");
		$url = $this->input->post("url");
		$this->users_model->editCompany($companyId,$name,$address,$phone,$description,$location,$lat,$lng,$url);
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function createCompany()
	{
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/add.php');
		$this->load->view('templates/footer.php');
	}
	public function addCompany()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "Company Name",'trim|required|min_length[0]|max_length[100]');
		$this->form_validation->set_rules("itemdescription" ,"Company discription",'trim|required|min_length[0]|max_length[200]');
		$this->form_validation->set_rules("postaladdress" ,"Company Address",'trim|required|min_length[0]|max_length[100]');

		$this->form_validation->set_rules("address" ,"Company location",'trim|required|min_length[0]|max_length[100]');
		 // $this->form_validation->set_rules("phone" ,"Mobile Number",'trim|required|min_length[0]|max_length[20]|required|regex_match[/^[0-9]{10}$/]');

		$this->form_validation->set_rules("url" ,"Company Website",'trim|required|min_length[0]|max_length[50]');
		if ($this->form_validation->run() == FALSE) {
			$data['activeLink'] = 'Company';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/index.php',$data);
			$this->load->view('pages/company/add.php');
			$this->load->view('templates/footer.php');
		}else{
			$this->load->helper('form');
			$this->load->Model('users_model');
			$name = $this->input->post("name");
			$description = $this->input->post("itemdescription");
			$phone = $this->input->post("phone");
			$address = $this->input->post("postaladdress");
			$location = $this->input->post("address");
			$lat =$this->input->post("lat");
			$lng =$this->input->post("long");
			$url = $this->input->post("url");
			$this->users_model->addCompany($name,$address,$phone,$description,$location,$lat,$lng,$url);
			$data['company'] = $this->users_model->getCompanyData();
		    $data['activeLink'] = 'Company';
		    $this->load->view('templates/header.php',$data);
		    $this->load->view('menu/index.php',$data);
		    $this->load->view('pages/company/index.php',$data);
		    $this->load->view('templates/footer.php');
		}
	}

	public function deleteCompany()
	{
		$this->load->Model('users_model');
		$companyId = $_GET['id'];
		$this->users_model->deleteCompany($companyId);
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/index.php',$data);
		$this->load->view('templates/footer.php');
		
	}
	// End of Company function 

	// Tutor Function
	public function tutor()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['tutor'] = $this->users_model->getTutorData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function loadAddTutor()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/addNew.php',$data);
		$this->load->view('templates/footer.php');
	}
	/* send email with create tutor and send password to user*/
	public function addTutor($chars_min=6, $chars_max=8, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
	{
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules("firstname", "First Name",'trim|required|min_length[3]|max_length[15]');
		// $this->form_validation->set_rules("lastname" ,"Last Name",'trim|required|min_length[3]|max_length[20]');
		// $this->form_validation->set_rules("userName" ,"User Name",'trim|required|min_length[3]|max_length[100]');
		// $this->form_validation->set_rules("position" ,"Position",'trim|required|min_length[3]|max_length[50]');
		// $this->form_validation->set_rules("phone" ,"Mobile Number",'trim|required|min_length[0]|max_length[25]');
		// $this->form_validation->set_rules("sEmail" ,"School Email",'trim|required|min_length[0]|max_length[100]');
		// $this->form_validation->set_rules("company" ,"Company Name",'trim|required|min_length[0]|max_length[50]');

		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->helper('form');
		// 	$this->load->Model('users_model');
		// 	$data['company'] = $this->users_model->getCompanyData();
		// 	$data['activeLink'] = 'Tutor';
		// 	$this->load->view('templates/header.php',$data);
		// 	$this->load->view('menu/index.php',$data);
		// 	$this->load->view('pages/tutor/addNew.php',$data);
		// 	$this->load->view('templates/footer.php');
		// }else{
			$length = rand($chars_min, $chars_max);
			$selection = 'aeuoyibcdfghjklmnpqrstvwxz';
			if($include_numbers) {
				$selection .= "1234567890";
			}
			if($include_special_chars) {
				$selection .= "!@\"#$%&[]{}?|";
			}

			$password = "";
			for($i=0; $i<$length; $i++) {
				$current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
				$password .=  $current_letter;
			}  
/*			 $config = array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'devit.chea@student.passerellesnumeriques.org',
			  'smtp_pass' => '070220506',
			  'mailtype' => 'html',
			  'charset' => 'utf-8',
			  'wordwrap' => TRUE,
			  'newline' => "\r\n"
			);              
			  
			$this->load->library('email', $config);

			$this->email->from('devit.chea@student.passerellesnumeriques.org', 'ERO Team');
			$this->email->to($this->input->post('sEmail'));
			$this->email->subject('Password and User Loin to System');
			$this->email->message($password);
			if ($this->email->send()) {
				return true;
			}else{
				echo $this->email->print_debugger();
			}*/

			$this->load->helper('form');
			$firstname = $this->input->post("firstname");
			$lastname = $this->input->post("lastname");
			$username = $this->input->post("userName");
			$password = 123;
			//$password = $password;
			$position = $this->input->post("position");
			$sEmail = $this->input->post("sEmail");
			$company = $this->input->post("company");
			$phone = $this->input->post("phone");
			// Upload Images
			$config['upload_path']          = './assets/images/users/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10024;
			$config['max_width']            = 10024;
			$config['max_height']           = 7680;
			$this->load->library('Upload',$config);
			if (!$this->upload->do_upload('image')) {
				$error = array('error'=>$this->upload->display_errors());
				echo "Error Upload Image!";die();
			}
			$iData = array('upload_data'=>$this->upload->data());
			foreach ($iData as $iData):
				$file_name = $iData['file_name'];
			endforeach;


			$this->load->Model('users_model');
			$this->users_model->addTutor($company,$firstname,$lastname,$username,$password,$position,$sEmail,$phone,$file_name);
			$data['tutor'] = $this->users_model->getTutorData();
			$data['activeLink'] = 'Tutor';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/index.php',$data);
			$this->load->view('pages/tutor/index.php',$data);
			$this->load->view('templates/footer.php');	

		//}
	}
	public function detailTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->Model('users_model');
		$data['tutor'] = $this->users_model->getTutorDataDetail($tutorId);
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/detailTutor.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function loadEditTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->Model('users_model');
		$data['tutor'] = $this->users_model->getTutorDataDetail($tutorId);
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/editTutor.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function editTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$userName = $this->input->post("username");
		$password = $this->input->post("password");
		$position = $this->input->post("position");
		$sEmail = $this->input->post("sEmail");
		$company = $this->input->post("company");
		$phone = $this->input->post("phone");
		// Upload Images
		$config['upload_path']          = './assets/images/users/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10024;
		$config['max_width']            = 10024;
		$config['max_height']           = 7680;
		$this->load->library('Upload',$config);
		if (!$this->upload->do_upload('image')) {
			$error = array('error'=>$this->upload->display_errors());
			echo "Error Upload Image!";die();
		}
		$iData = array('upload_data'=>$this->upload->data());
		foreach ($iData as $iData):
			$file_name = $iData['file_name'];
		endforeach;
		$this->load->Model('users_model');
		$this->users_model->editTutor($tutorId,$company,$firstname,$lastname,$userName,$password,$position,$sEmail,$phone,$file_name);
		$data['tutor'] = $this->users_model->getTutorData($tutorId);
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function deleteTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->Model('users_model');
		$this->users_model->deleteTutor($tutorId);
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['tutor'] = $this->users_model->getTutorData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	// End of tutor function 
	public function supervisor()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->getSupervisorData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/index.php');
		$this->load->view('templates/footer.php');
	}


	public function createSupervisor()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyData();
		$data['student'] = $this->users_model->getSuStudent();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/createSupervisor.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function addSupervisor($chars_min=6, $chars_max=8, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
	{

		$length = rand($chars_min, $chars_max);
		$selection = 'aeuoyibcdfghjklmnpqrstvwxz';
		if($include_numbers) {
			$selection .= "1234567890";
		}
		if($include_special_chars) {
			$selection .= "!@\"#$%&[]{}?|";
		}
		
		$password = "";
		for($i=0; $i<$length; $i++) {
			$current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
			$password .=  $current_letter;
		}   
		$this->load->library('form_validation');
		$this->form_validation->set_rules("firstname", "First Name",'trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules("lastname" ,"Last Name",'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules("username" ,"User Name",'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules("position" ,"Position",'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules("phone" ,"Mobile Number",'trim|required|min_length[0]|max_length[25]');
		$this->form_validation->set_rules("email" ,"School Email",'trim|required|min_length[0]|max_length[100]');
		$this->form_validation->set_rules("company" ,"Company Name",'trim|required|min_length[0]|max_length[50]');             

		if ($this->form_validation->run() == FALSE) {
			$this->load->helper('form');
			$this->load->Model('users_model');
			$data['company'] = $this->users_model->getCompanyData();
			$data['student'] = $this->users_model->getSuStudent();
			$data['activeLink'] = 'supervisor';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/index.php',$data);
			$this->load->view('pages/supervisor/createSupervisor.php',$data);
			$this->load->view('templates/footer.php');
		}else{

			$this->load->helper('form');
			$firstname = $this->input->post("firstname");
			$lastname = $this->input->post("lastname");
			$username = $this->input->post("username");
			$password = $password;
			$position = $this->input->post("position");
			$sEmail = $this->input->post("email");
			$phone = $this->input->post("phone");
			$company = $this->input->post("company");
			$student = $this->input->post("student");
			// Upload Images
			$config['upload_path']          = './assets/images/users/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10024;
			$config['max_width']            = 10024;
			$config['max_height']           = 7680;
			$this->load->library('Upload',$config);
			if (!$this->upload->do_upload('image')) {
				$error = array('error'=>$this->upload->display_errors());
				echo "Error Upload Image!";die();
			}
			$iData = array('upload_data'=>$this->upload->data());
			foreach ($iData as $iData):
				$file_name = $iData['file_name'];
			endforeach;
			$this->load->Model('users_model');
			$studntId = $this->users_model->getStuId($student);
			$this->load->Model('users_model');
			$this->users_model->addSupervisor($company,$studntId,$firstname,$lastname,$username,$password,$position,$sEmail,$phone,$file_name);
			$this->load->helper('form');
			$this->load->Model('users_model');
			$data['supervisor'] = $this->users_model->getSupervisorData();
			$data['activeLink'] = 'supervisor';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/index.php',$data);
			$this->load->view('pages/supervisor/index.php');
			$this->load->view('templates/footer.php');		
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'devit.chea@student.passerellesnumeriques.org',
				'smtp_pass' => '070220506',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'wordwrap' => TRUE,
				'newline' => "\r\n"
			);
			$this->load->library('email' ,$config);

			$this->email->from('devit.chea@student.passerellesnumeriques.org', 'ERO Team');
			$this->email->to($this->input->post('email'));
			$this->email->subject('Password and Username login to Student Folloup System');
			$this->email->message('Dear '.$firstname.' '.$lastname.', '."\r\n".
				'I would like to inform you that your account was created successfully'.
				' you can login to Selection committee application by username <b><u>'.$username.'</u></b> and password <b><u>'.$password.'</u></b>'."\r\n".
				'best regards,'."\r\n".
				'Admin'
			);
			if ($this->email->send()) {
				return true;
			}else{
				echo $this->email->print_debugger();
			}
		}

	}
	
	public function deleteSupervisor()
	{
		$suId = $_GET['id'];
		$this->load->Model('users_model');
		$this->users_model->deleteSupervisor($suId);
		$data['supervisor'] = $this->users_model->getSupervisorData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/index.php');
		$this->load->view('templates/footer.php');
	}
	public function viewSupervisor()
	{
		$sId = $_GET['id'];
		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->viewSupervisor($sId);
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/view.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function loadEditSupervisor()
	{
		$suId = $_GET['id'];
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['suDetail'] = $this->users_model->suDetail($suId);
		$data['company'] = $this->users_model->getCompanyData();
		$data['student'] = $this->users_model->getSuStudent();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/edit.php');
		$this->load->view('templates/footer.php');
	}
	public function editSupervisor()
	{
		$suId = $_GET['id'];
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$company = $this->input->post("company");
		$student = $this->input->post("student");
		// Upload Images
		$config['upload_path']          = './assets/images/users/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10024;
		$config['max_width']            = 10024;
		$config['max_height']           = 7680;
		$this->load->library('Upload',$config);
		if (!$this->upload->do_upload('image')) {
			$error = array('error'=>$this->upload->display_errors());
			echo "Error Upload Image!";die();
		}
		$iData = array('upload_data'=>$this->upload->data());
		foreach ($iData as $iData):
			$file_name = $iData['file_name'];
		endforeach;
		$this->load->Model('users_model');
		$studntId = $this->users_model->getStuId($student);
		$position = $this->input->post("position");
		$sEmail = $this->input->post("email");
		$phone = $this->input->post("phone");
		$this->users_model->editSupervisor($suId,$company,$studntId,$firstname,$lastname,$username,$password,$position,$sEmail,$phone,$file_name);
		$data['supervisor'] = $this->users_model->getSupervisorData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function questionniare()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/questionnair.php');
		$this->load->view('templates/footer.php');
	}

	// student
	public function student()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function viewStudentData()
	{
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$data['student'] = $this->users_model->viewStudentData($stuId);
		// var_dump($data['student']);die();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/viewstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function updateStudent()
	{
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$data['sSupervisor'] = $this->users_model->getSupervisor(); 
		$data['student'] = $this->users_model->viewStudentData($stuId);
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/editstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function editStudent()
	{
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$supervisor = $this->input->post("supervisor");
		$phone = $this->input->post("phone");
		$batch = $this->input->post("batch");
		$year = $this->input->post("year");
		$peremail = $this->input->post("peremail");
		$schoolemail = $this->input->post("schoolemail");
		// Upload Images
		$config['upload_path']          = './assets/images/users/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10024;
		$config['max_width']            = 10024;
		$config['max_height']           = 7680;
		$this->load->library('Upload',$config);
		if (!$this->upload->do_upload('image')) {
			$error = array('error'=>$this->upload->display_errors());
			echo "Error Upload Image!";die();
		}
		$iData = array('upload_data'=>$this->upload->data());
		foreach ($iData as $iData):
			$file_name = $iData['file_name'];
		endforeach;
		$this->load->Model('users_model');
		$this->users_model->editStudent($stuId,$firstname,$lastname,$username,$password,$supervisor,$phone,$batch,$year,$peremail,$schoolemail,$file_name);
		$data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function addStudent()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['sSupervisor'] = $this->users_model->getSupervisor();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/addstudent' );
		$this->load->view('templates/footer.php');
	}
	public function newStudent($chars_min=6, $chars_max=8, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("firstname", "First Name",'trim|required|min_length[2]|max_length[15]');
		$this->form_validation->set_rules("lastname" ,"Last Name",'trim|required|min_length[2]|max_length[15]');
		$this->form_validation->set_rules("username" ,"User Name",'trim|required|min_length[0]|max_length[50]');
		$this->form_validation->set_rules("phone" ,"Phone Number",'trim|required|min_length[3]|max_length[25]');
		$this->form_validation->set_rules("batch" ,"Batch",'trim|required|min_length[0]|max_length[100]');
		$this->form_validation->set_rules("supervisor" ,"Supervisor",'trim|required|min_length[1]|max_length[100]');
		$this->form_validation->set_rules("year" ,"Year",'trim|required|min_length[1]|max_length[10]');
		$this->form_validation->set_rules("peremail" ,"Personal email",'trim|required|min_length[0]|max_length[100]|required');
		$this->form_validation->set_rules("schoolemail" ,"School email",'trim|required|min_length[0]|max_length[100]');
		//$this->form_validation->set_rules("image" ,"Choose File",'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->helper('form');
			$this->load->Model('users_model');
			$data['sSupervisor'] = $this->users_model->getSupervisor();
			$data['activeLink'] = 'student';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/index.php',$data);
			$this->load->view('pages/student/addstudent' );
			$this->load->view('templates/footer.php');
		}else{
			$length = rand($chars_min, $chars_max);
			$selection = 'aeuoyibcdfghjklmnpqrstvwxz';
			if($include_numbers) {
				$selection .= "1234567890";
			}
			if($include_special_chars) {
				$selection .= "!@\"#$%&[]{}?|";
			}

			$password = "";
			for($i=0; $i<$length; $i++) {
				$current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
				$password .=  $current_letter;
			}

			$this->load->helper('form');
			$firstname = $this->input->post("firstname");
			$lastname = $this->input->post("lastname");
			$username = $this->input->post("username");
			$password = $password;
			$supervisor = $this->input->post("supervisor");
			$phone = $this->input->post("phone");
			$batch = $this->input->post("batch");
			$year = $this->input->post("year");
			$peremail = $this->input->post("peremail");
			$schoolemail = $this->input->post("schoolemail");
		// Upload Images
			$config['upload_path']          = './assets/images/users/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10024;
			$config['max_width']            = 10024;
			$config['max_height']           = 7680;
			$this->load->library('Upload',$config);
			if (!$this->upload->do_upload('image')) {
				$error = array('error'=>$this->upload->display_errors());
				echo "Error Upload Image!";die();
			}
			$iData = array('upload_data'=>$this->upload->data());
			foreach ($iData as $iData):
				$file_name = $iData['file_name'];
			endforeach;
			$this->load->Model('users_model');
			$this->users_model->newStudent($firstname,$lastname,$username,$password,$supervisor,$phone,$batch,$year,$peremail,$schoolemail,$file_name);
			$this->load->helper('form');
			$this->load->Model('users_model');
			$data['student'] = $this->users_model->getStudentData();
			$data['activeLink'] = 'student';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/index.php',$data);
			$this->load->view('pages/student/index.php',$data);
			$this->load->view('templates/footer.php');			
			$config = array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'devit.chea@student.passerellesnumeriques.org',
			  'smtp_pass' => '070220506',
			  'mailtype' => 'html',
			  'charset' => 'utf-8',
			  'wordwrap' => TRUE,
			  'newline' => "\r\n"
			);
			$this->load->library('email',$config);

			$this->email->from('devit.chea@student.passerellesnumeriques.org', 'ERO Team');
			$this->email->to($this->input->post('schoolemail','peremail'));
			$this->email->subject('Password and User Loin to System');
			$this->email->message('Dear '.$firstname.' '.$lastname.', '."\r\n".
				'I would like to inform you that your account was created successfully'.
				' you can login to Selection committee application by username <b><u>'.$username.'</u></b> and password <b><u>'.$password.'</u></b>'."\r\n".
				'best regards,'."\r\n".
				'Admin'
			);
			if ($this->email->send()) {
				return true;
			}else{
				echo $this->email->print_debugger();
			}
		}	
	}

	public function editCommnetTutor()
	{
		$stuId = $_GET['id'];
		$data['activeLink'] = 'student';
		$this->load->Model('users_model');
		$data['stuComment'] = $this->users_model->getStuComment($stuId);
		$data['comment'] = $this->users_model->validateComment($stuId);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/addComment.php',$data);
		$this->load->view('templates/footer.php');			
	}
	public function validateComment()
	{
		$cmtId = $_GET['id'];
		$id = $_GET['stuId'];
		$this->load->helper('form');
		$this->load->Model('users_model');
		$stuComment = $this->input->post("stuComment");
		$this->users_model->setValidate($cmtId,$stuComment);
		$data['comment'] = $this->users_model->getComment($id);
		$data['stuComment'] = $this->users_model->getStuComment($id);
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/comment.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function deleteStudent()
	{
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$this->users_model->deleteStudent($stuId);
		$data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function worklog()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/worklog.php');
		$this->load->view('templates/footer.php');
	} 
	public function weekWorklog(){
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/worklog.php');
		$this->load->view('pages/student/weekWorklog.php');
		$this->load->view('templates/footer.php');
		
	}

// calenders
	public function calendar()
	{
		$data['activeLink'] = 'calendar';

		$this->load->Model('users_model');
		$data['email'] = $this->users_model->mGetEmail();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/calendar/calendar');
		$this->load->view('templates/footer.php');
	}

	/*Get all Events */

	Public function getEvents()
	{
		$result=$this->Calendar_model->getEvents();
		echo json_encode($result);
	}
	/* send email to someone*/
	public function eroSendMail(){
		$this->load->library('email');
		$this->load->model('users_model');
		$this->email->from('devit.chea@student.passerellesnumeriques.org', 'ERO Team');
		$this->email->to($this->input->post('email'));
		$this->email->subject($this->input->post('title'));
		$this->email->message($this->input->post('description'));
		if ($this->email->send()) {
			return true;
		}else{
			return $this->email->print_debugger();;
		}

	}

	/*Add new event */
	Public function addEvent()
	{
		$result=$this->Calendar_model->addEvent();
		echo $result;
		$this->eroSendMail();
	}
	/*Update Event */
	Public function updateEvent()
	{
		$result=$this->Calendar_model->updateEvent();
		echo $result;
		$this->eroSendMail();
	}
	/*Delete Event*/
	Public function deleteEvent()
	{
		$result=$this->Calendar_model->deleteEvent();
		echo $result;
		$this->eroSendMail();

	}
	Public function dragUpdateEvent()
	{	

		$result=$this->Calendar_model->dragUpdateEvent();
		echo $result;
	}
	// comment 
	public function comment()
	{
		$stuId = $_GET['id'];
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['comment'] = $this->users_model->getComment($stuId);
		$data['stuComment'] = $this->users_model->getStuComment($stuId);
		// var_dump($data['stuComment']);die();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/comment.php',$data);
		$this->load->view('templates/footer.php');
	}
	//add comment
	public function addComment()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/addComment.php');
		$this->load->view('templates/footer.php');
	}
	public function viewQuestionnaire()
	{
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$data['student'] = $this->users_model->viewQuestionnaire($stuId);
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/viewQuestionnair.php', $data);
		$this->load->view('templates/footer.php');
	}
}
