<?php
/**
 * This model contains the business logic and manages the persistence of users and roles
 * @copyright  Copyright (c) 2018 Bunthean MOV
 */
if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * This model contains the business logic and manages the persistence of users and roles
 * It is also used by the session controller for the authentication.
 */
class Supervisor_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {

    }
    /**
     * Get list all of student on supervisor dashboard
     * @param Variable $studentRole Identifier of student role
     * @param string $userRole store array of stuent role
     * @author Bunthean MOV <bunthean.mov2727@gmail.com>
     */
	public function getDataStudentList()
	{
		$this->db->select("id, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('student.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('student',$userRole);
	     return $query->result_array(); 
	}
	/**
     * Get list all of student for supervisor complete the questionnaire 
     * @param Variable $studentRole Identifier of student role
     * @param string $userRole store array of stuent role
     * @author Bunthean MOV <bunthean.mov2727@gmail.com>
     */
	public function getDataCompleteQuestionnaire()
	{
		$this->db->select("id, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('student.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('student',$userRole);
	     return $query->result_array(); 
	}
    /**
     * to Save to questionnaire and sent mail to ERO team
     * @param $data get all field in questionnair table
     * @author Bunthean MOV <bunthean.mov2727@gmail.com>
     */
    public function saveQuestionnaire($student_id,$sex,$major,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17)
    {
        $data = array('student_id' =>$student_id,
                    'gender'=>$sex,
                    'major'=>$major,
                    'question1'=>$q1,
                    'question2'=>$q2,
                    'question3'=>$q3,
                    'question4'=>$q4,
                    'question5'=>$q5,
                    'question6'=>$q6,
                    'question7'=>$q7,
                    'question8'=>$q8,
                    'question9'=>$q9,
                    'question10'=>$q10,
                    'question11'=>$q11,
                    'question12'=>$q12,
                    'question13'=>$q13,
                    'question14'=>$q14,
                    'question15'=>$q15,
                    'question16'=>$q16,
                    'question17'=>$q17);
        $this->db->insert('questionnaire', $data);

    }
/**
* To student id from student table
* @param string $data store all feild the table questionnaire 
* @param 
* @author Bunthean MOV <bunthean.mov2727@gmail.com>
*/
    public function getSId( $studentId)
    {
        $this->db->select("id");
        $this->db->from('student');
        $this->db->where('id', $studentId);
        $query = $this->db->get();
        return $query->result_array(); 
    }
 /**
 * Select all field in questionnair table to view in questionnair form
 * @author Bunthean MOV <bunthean.mov2727@gmail.com>
 */
    public function getQuestionnaire($studentId)
    {
        $this->db->select("*");
        $this->db->from('questionnaire');
        $this->db->where('questionnaire.student_id', $studentId);
        $query = $this->db->get();
        return $query->result_array();  
        $this->db->insert('questionnaire', $data);
    }
 /**
 * Select all field in questionnair table to view in questionnair form and also student's name na company's name
 * @author Bunthean MOV <bunthean.mov2727@gmail.com>
 */   
	public function getQuestionnaireInfo($stuId)
    { 
     $this->db->select("s.firstname as sFirstname,s.lastname as sLastname,c.name ");
     $this->db->from('supervisor su');
     $this->db->join('student s', 's.supervisor_id = su.id');
     $this->db->join('company c', 'c.id = su.company_id');
     $this->db->where('s.id', $stuId);
    $query = $this->db->get();
     return $query->result_array(); 
    }
/**
 * Get detail data from student to list on student profile
 * @author Bunthean MOV <bunthean.mov2727@gmail.com>
 */
	public function getDataStudentDetail($studentId)
    {
        $this->db->select("s.*, c.url, CONCAT(t.firstname, ' ', t.lastname) as tutorName ");
        $this->db->from("student s");
        $this->db->join('supervisor su', 'su.id = s.supervisor_id');
        $this->db->join('company c', 'c.id = su.company_id');
        $this->db->join('tutor t', 't.company_id = c.id');
        $this->db->where('s.id', $studentId);
        $query = $this->db->get();
        return $query-> result_array();
    }
/**
 * Count student to show on supervisor home page
 * @author Bunthean MOV <bunthean.mov2727@gmail.com>
 */
    public function countStudent()
    {
        $this->db->select('*');
        $query = $this->db->get('student');
        return $query->num_rows();
    }
/**
 * Select data email from view in database
 * @author Devith CHEA <bunthean.mov2727@gmail.com>
 */
    public function mGetEmail()
    {
        $this->db->select("*");
        $this->db->from("getemail");
        $query = $this->db->get();
        return $query->result_array();
    }


    /*Read the data from DB */
    Public function getEvents()
    {
        
        $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
        return $test = $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

    }

    /*Create new events */
    Public function addEvent()
    {

        $sql = "INSERT INTO events (title,events.start,events.end,description, color,email,userEmail) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, array($_POST['title'], $_POST['start'],$_POST['end'], $_POST['description'], $_POST['color'],$_POST['email'],$_POST['userEmail']));
        return ($this->db->affected_rows()!=1)?false:true; 

    }

    /*Update  event */

    Public function updateEvent()
    {

        $sql = "UPDATE events SET title = ?, description = ?, color = ?, email = ?  WHERE id = ?";
        $this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'],$_POST['email'], $_POST['id']));
        return ($this->db->affected_rows()!=1)?false:true;
    }

    /*Delete event */

    Public function deleteEvent()
    {

        $sql = "DELETE FROM events WHERE id = ?";
        $this->db->query($sql, array($_GET['id']));
        return ($this->db->affected_rows()!=1)?false:true;
    }

    /*Update  event */

    Public function dragUpdateEvent()
    {
            //$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

        $sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ?";
        $this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
        return ($this->db->affected_rows()!=1)?false:true;

    }

}