<?php
/**
 * This model contains the business logic and manages the persistence of users and roles
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      1.0.0
 */

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * This model contains the business logic and manages the persistence of users and roles
 * It is also used by the session controller for the authentication.
 */
class tutor_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {


    }

   public function selectCompany()
    {
    	
    	$this->db->select('*');
    	$query = $this->db->get('company');
    	return $query->result_array();
    }
    public function getCompanyDetail($companyId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('company', array('id' => $companyId));
        //var_dump($query);die();
        return $query->result_array();
    }

   public function selectTutor()
    {
    	
    	$this->db->select('*');
    	$query = $this->db->get('tutor');
    	return $query->result_array();
    }


    public function viewSupervisor($sId)
    {
        $this->db->select('*');
        $this->db->from('supervisor');
        $this->db->join('company', 'company.id = supervisor.id');
        $this->db->where('supervisor.id', $sId);
        $query = $this->db->get();
        return $query->result_array();
    }

    


    public function getCompanyDataDetail2($companyId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('company', array('id' => $companyId));
        return $query->result_array();
    }
    public function getTutorDataDetail($tutorId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('tutor', array('id' => $tutorId));
        return $query->result_array();
    }

    /* superviser detail */
    public function getSupDataDetail($supId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('supervisor', array('id' => $supId));
        // var_dump($query->result_array());die();
        return $query->result_array();
    }
    public function getStuCmt($stuId)
    {
        $this->db->select('*');
        $this->db->from('worklog');
        $this->db->where('student_id', $stuId);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTuCmt($stuId)
    {
        $this->db->select("comment,id,student_id");
        $this->db->from("comment");
        $this->db->where('comment.id', $stuId);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insertComment($comment,$stuId)
    {
         $data = array('comment'=>$comment,
                        'student_id' =>$stuId
                 );
        $this->db->insert('comment', $data);
    
    }

    public function selectWorkLog($stuId)
    {
        
        $this->db->select('*');
        $this->db->from('worklog');
        $query = $this->db->get();
        return $query->result_array();
    }
    

}
