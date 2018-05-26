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
class Users_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {

    }

    /**
     * Get the list of users or one user
     * @param int $id optional id of one user
     * @return array record of users
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getUsers($id = 0) {
        $this->db->select('users.*');
        if ($id === 0) {
            $query = $this->db->get('users');
            return $query->result_array();
        }
        $query = $this->db->get_where('users', array('users.id' => $id));
        return $query->row_array();
    }

    /**
     * Get the list of users and their roles
     * @return array record of users
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getUsersAndRoles() {
        $this->db->select('users.id, active, firstname, lastname, login, email');
        $this->db->select("GROUP_CONCAT(" . $this->db->dbprefix('roles') . ".name SEPARATOR ',') as roles_list", FALSE);
        $this->db->join('roles', 'roles.id = (' . $this->db->dbprefix('users') . '.role & ' . $this->db->dbprefix('roles') . '.id)');
        $this->db->group_by($this->db->dbprefix('users') . '.id, active, firstname, lastname, login, email');
        $query = $this->db->get('users');
        return $query->result_array();
    }

    //// count number of student company tutor and supervisor
    public function CNumRow()
    {
        $this->db->select('*');
        $query = $this->db->get('company');
        return $query->num_rows();
    }
    public function sNumRow()
    {
          $this->db->select('*');
        $query = $this->db->get('student');
        return $query->num_rows();
    }
    public function suNumRow()
    {
          $this->db->select('*');
        $query = $this->db->get('supervisor');
        return $query->num_rows();
    }
    public function tNumRow()
    {
         $this->db->select('*');
        $query = $this->db->get('tutor');
        return $query->num_rows();
    }
    public function getCompanyData() {
        $this->db->select('*');
        $query = $this->db->get('company');
        return $query->result_array();
    }
    public function getCompanyName() {
        $this->db->select('name');
        $query = $this->db->get('company');
        return $query->result_array();
    }
    public function getNumStu() {
        $this->db->select('numStu');
        $query = $this->db->get('getnumstu');
        return $query->result_array();
    }
    public function getCompanyDataDetail($companyId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('company', array('id' => $companyId));
        return $query->result_array();
    }

    public function addCompany($name,$address,$phone,$description,$location,$lat,$lng,$url)
    {
        $data = array('name'=>$name,
                     'itemdescription'=>$description,
                     'postaladdress'=>$address,
                     'location'=>$location,
                     'phone'=>$phone,
                     'lat'=>$lat,
                    'lng'=>$lng,
                     'url'=>$url);
                     $this->db->insert('company',$data);
                      
    }
    public function editCompany($id,$name,$address,$phone,$description,$location,$lat,$lng,$url)
    {
        $data = array('name'=>$name,
                     'itemdescription'=>$description,
                     'postaladdress'=>$address,
                     'location'=>$location,
                     'lat'=>$lat,
                     'lng'=>$lng,
                     'phone'=>$phone,
                     'url'=>$url);
        $this->db->where('id', $id);
        $this->db->update('company', $data);
    }
    public function deleteCompany($id)
    {
        $this->db->delete('company', array('id' => $id));
    }
    public function getTutorData()
    {
      $this->db->select("id,CONCAT(firstname,' ',lastname) AS tutorName,position");
        $query = $this->db->get('tutor');
        return $query->result_array(); 
    }
    public function getTutorDataDetail($tutorId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('tutor', array('id' => $tutorId));
        return $query->result_array();  
    }
    public function addTutor($company,$firstname,$lastname,$username,$password,$position,$sEmail,$phone,$file_name)
    {
        $this->db->select("id");
        $this->db->from("company");
        $this->db->where('name', $company);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $company_id = $row['id'];
            }
        $company_id = (int)$company_id;
        $salt = '$2a$08$' . substr(strtr(base64_encode($this->getRandomBytes(16)), '+', '.'), 0, 22) . '$';
        $hash = crypt($password, $salt);
        $data = array('firstname'=>$firstname,
                     'lastname'=>$lastname,
                     'position'=>$position,
                     'picture'=>$file_name,
                     'username' =>$username,
                     'password' =>$hash,
                     'company_id' =>$company_id,
                     'email'=>$sEmail,
                     'phone'=>$phone,
                     'userrole_id'=>'2' 
                 );
        $this->db->insert('tutor', $data);
    }
    public function editTutor($id,$company,$firstname,$lastname,$username,$password,$position,$sEmail,$phone,$file_name)
    {
        $this->db->select("id");
        $this->db->from("company");
        $this->db->where('name', $company);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $company_id = $row['id'];
            }
        $company_id = (int)$company_id;
        $data = array('firstname'=>$firstname,
                     'lastname'=>$lastname,
                     'username' =>$username,
                     'company_id' =>$company_id,
                     'position'=>$position,
                     'picture'=>$file_name,
                     'email'=>$sEmail,
                     'phone'=>$phone
                 );
        $this->db->where('id', $id);
        $this->db->update('tutor', $data);
    }
    public function deleteTutor($tutorId)
    {
        $this->db->delete('tutor', array('id' => $tutorId));
    }
    public function getSupervisorData()
    {
      $this->db->select("supervisor.id,name,CONCAT(firstname,' ',lastname) AS supervisorName");
      $this->db->from('supervisor');
      $this->db->join('company','company.id = supervisor.company_id');
      $query = $this->db->get();
     return $query->result_array(); 
    }

    public function getSuStudent()
    {
        $this->db->select('firstname,lastname');
        $this->db->from('student');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function viewSupervisor($sId)
    {
        $this->db->select('*');
        $this->db->from('supervisor');
        $this->db->join('company', 'company.id = supervisor.company_id');
        $this->db->where('supervisor.id', $sId);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getStuId($studentName)
    {
         $this->db->select('id');
        $this->db->from('getstuid');
        $this->db->where('stuName', $studentName);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $stuId = $row['id'];
            }
        return $stuId;
    }
    public function addSupervisor($company,$student,$firstname,$lastname,$username,$password,$position,$sEmail,$phone,$file_name)
    {
        $this->db->select("id");
        $this->db->from("company");
        $this->db->where('name', $company);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $company_id = $row['id'];
            }
            $company_id = (int)$company_id;
            $salt = '$2a$08$' . substr(strtr(base64_encode($this->getRandomBytes(16)), '+', '.'), 0, 22) . '$';
        $hash = crypt($password, $salt);
        $data = array('firstname'=>$firstname,
                     'lastname'=>$lastname,
                     'position'=>$position,
                     'picture'=>$file_name,
                     'username' =>$username,
                     'company_id' =>$company_id,
                     'password' =>$hash,
                     'email'=>$sEmail,
                     'phone'=>$phone,
                     'company_id'=>$company_id, 
                     'userrole_id'=>'3'
                 );
        $this->db->insert('supervisor', $data);
    }
    public function suDetail($suId)
    {
         $this->db->select('*');
        $this->db->from('supervisor');
        $this->db->where('supervisor.id', $suId);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function editSupervisor($id,$company,$student,$firstname,$lastname,$username,$password,$position,$sEmail,$phone,$file_name)
    {
        $this->db->select("id");
        $this->db->from("company");
        $this->db->where('name', $company);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $company_id = $row['id'];
            }
            $company_id = (int)$company_id;
        $data = array('firstname'=>$firstname,
                     'lastname'=>$lastname,
                     'position'=>$position,
                     'username' =>$username,
                     'picture' =>$file_name,
                     'company_id' =>$company_id,
                     'password' =>$password,
                     'email'=>$sEmail,
                     'phone'=>$phone,
                     'company_id'=>$company_id, 
                     'userrole_id'=>'3'
                 );
        $this->db->where('id', $id);
        $this->db->update('supervisor', $data);
    }
    public function deleteSupervisor($suId)
    {
        $this->db->delete('supervisor', array('id' => $suId));
    }
    public function getStudentData()
    { 
     $this->db->select("s.id,s.firstname as stuFName,s.lastname as stuLName,
                            su.firstname as suFName,su.lastname as suLName,
                            c.name,
                            t.firstname as tFName,t.lastname as tLName");
     $this->db->from('supervisor su');
     $this->db->join('student s', 's.supervisor_id = su.id');
     $this->db->join('company c', 'c.id = su.company_id');
     $this->db->join('tutor t', 't.company_id = c.id');
    $query = $this->db->get();
     return $query->result_array(); 
    }
    public function viewStudentData($stuId)
    { 
     $this->db->select("s.id,s.picture as sPic,s.firstname as stuFName,s.lastname as stuLName,
                            s.phone,s.peremail,s.schoolemail,s.batch,s.year,s.username,s.password,
                            su.firstname as suFName,su.lastname as suLName,
                            c.name,
                            t.firstname as tFName,t.lastname as tLName");
     $this->db->from('supervisor su');
     $this->db->join('student s', 's.supervisor_id = su.id');
     $this->db->join('company c', 'c.id = su.company_id');
     $this->db->join('tutor t', 't.company_id = c.id');
     $this->db->where('s.id', $stuId);
    $query = $this->db->get();
     return $query->result_array(); 
    }
    public function viewQuestionnaire($stuId)
    { 
        $this->db->select("s.id, s.firstname as sFirstname, s.lastname as sLastname, c.name, q.*");
        $this->db->from('supervisor su');
        $this->db->join('student s', 's.supervisor_id = su.id');
        $this->db->join('questionnaire q', 's.id = q.student_id');
        $this->db->join('company c', 'c.id = su.company_id');
        $this->db->join('tutor t', 't.company_id = c.id');
        $this->db->where('su.id', $stuId);
    $query = $this->db->get();
     return $query->result_array(); 

    }

     public function getSupervisor()
    {
        $this->db->select("*");
        $this->db->from('getsuid');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function newStudent($firstname,$lastname,$username,$password,$supervisor,$phone,$batch,$year,$peremail,$schoolemail,$file_name)
    {
         $this->db->select("id");
        $this->db->from("getsuid");
        $this->db->where('suName', $supervisor);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $supervisor_id = $row['id'];
            }
         $supervisor_id = (int)$supervisor_id;
        $salt = '$2a$08$' . substr(strtr(base64_encode($this->getRandomBytes(16)), '+', '.'), 0, 22) . '$';
        $hash = crypt($password, $salt);
        $data = array('supervisor_id'=>$supervisor_id,
                     'firstname'=>$firstname,
                     'lastname'=>$lastname,
                     'batch' =>$batch,
                     'year' =>$year,
                     'schoolemail' =>$schoolemail,
                     'picture' =>$file_name,
                     'peremail' =>$peremail,
                     'phone'=>$phone,
                     'password'=>$hash,
                     'username'=>$username, 
                     'userrole_id'=>'4'
                 );
        $this->db->insert('student', $data);
    }
    public function editStudent($stuId,$firstname,$lastname,$username,$password,$supervisor,$phone,$batch,$year,$peremail,$schoolemail,$file_name)
    {
        $this->db->select("id");
        $this->db->from("getsuid");
        $this->db->where('suName', $supervisor);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $supervisor_id = $row['id'];
            }
            $supervisor_id = (int)$supervisor_id;
         $data = array('supervisor_id'=>$supervisor_id,
                     'firstname'=>$firstname,
                     'lastname'=>$lastname,
                     'batch' =>$batch,
                     'year' =>$year,
                     'picture' =>$file_name,
                     'schoolemail' =>$schoolemail,
                     'peremail' =>$peremail,
                     'phone'=>$phone,
                     'password'=>$password,
                     'username'=>$username, 
                     'userrole_id'=>'4'
                      );
        $this->db->where('id', $stuId);
        $this->db->update('student', $data);
    }
    public function getMaxStuId()
    {
        $this->db->select_max('id');
        $this->db->from('student');
        $query = $this->db->get(); 
        return $query->result_array();
    }
    public function newQestionnaire($maxId)
    {
        $data = array('student_id' =>$maxId  
                    );
        $this->db->insert('questionnaire', $data);
    }
    public function deleteStudent($Id)
    {
        $this->db->delete('student', array('id' => $Id));
    }
    public function getComment($stuId)
    {
        $this->db->select("comment.comment,comment.id,comment.status");
        $this->db->from('comment');
        $this->db->join('student', 'student.id = comment.student_id');
        $this->db->where('student.id', $stuId);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getStuComment($stuId)
    {
        $this->db->select("worklog.comment,worklog.student_id");
        $this->db->from('worklog');
        $this->db->join('student', 'student.id = worklog.student_id');
        $this->db->where('student.id', $stuId);
        $query = $this->db->get();
        // var_dump($query->result_array());die();
        return $query->result_array();
    }

    /*get email from database*/
    public function mGetEmail()
    {
        $this->db->select("*");
        $this->db->from("getemail");
        $query = $this->db->get();
        return $query->result_array();
    }
    /* validation comment */
    public function validateComment($stuId)
    {
        $this->db->select("comment,id,student_id");
        $this->db->from("comment");
        $this->db->where('comment.id', $stuId);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function setValidate($id,$cmt)
    {
         $data = array('comment'=>$cmt,
                        'status'=>1
                      );
        $this->db->where('id', $id);
        $this->db->update('comment', $data);
    }
  /**
   * Get the list of roles or one role
   * 00000001 1  Admin
   * 00000010 2	User
   * 00000100 8	HR Officier / Local HR Manager
   * 00001000 16	HR Manager
   * 00010000 32	General Manager
   * 00100000 34	Global Manager
   * @param int $id optional id of one role
   * @return array record of roles
   * @author Benjamin BALET <benjamin.balet@gmail.com>
   */
  public function getRoles($id = 0) {
      if ($id === 0) {
          $query = $this->db->get('roles');
          return $query->result_array();
      }
      $query = $this->db->get_where('roles', array('id' => $id));
      return $query->row_array();
  }

    /**
     * Get the name of a given user
     * @param int $id Identifier of employee
     * @return string firstname and lastname of the employee
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getName($id) {
        $record = $this->getUsers($id);
        if (count($record) > 0) {
            return $record['firstname'] . ' ' . $record['lastname'];
        }
    }

    /**ujr5q 
     * Check if a login can be used before creating the user
     * @param string $login login identifier
     * @return bool TRUE if available, FALSE otherwise
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function isLoginAvailable($login) {
        $this->db->from('users');
        $this->db->where('login', $login);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Delete a user from the database
     * @param int $id identifier of the user
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function deleteUser($id) {
        $this->db->delete('users', array('id' => $id));
    }

    /**
     * Insert a new user into the database. Inserted data are coming from an HTML form
     * @return string deciphered password (so as to send it by e-mail in clear)
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function setUsers() {
        //Hash the clear password using bcrypt (8 iterations)
        $password = $this->input->post('password');
        $salt = '$2a$08$' . substr(strtr(base64_encode($this->getRandomBytes(16)), '+', '.'), 0, 22) . '$';
        $hash = crypt($password, $salt);

        //Role field is a binary mask
        $role = 0;
        foreach($this->input->post("role") as $role_bit){
            $role = $role | $role_bit;
        }

        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'login' => $this->input->post('login'),
            'email' => $this->input->post('email'),
            'password' => $hash,
            'role' => $role
        );
        $this->db->insert('users', $data);
        return $password;
    }

    /**
     * Update a given user in the database. Update data are coming from an HTML form
     * @return int number of affected rows
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function updateUsers() {
        //Role field is a binary mask
        $role = 0;
        foreach($this->input->post("role") as $role_bit){
            $role = $role | $role_bit;
        }
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'login' => $this->input->post('login'),
            'email' => $this->input->post('email'),
            'role' => $role
        );
        $this->db->where('id', $this->input->post('id'));
        $result = $this->db->update('users', $data);
        return $result;
    }

    /**
     * Update a given user in the database. Update data are coming from an HTML form
     * @param int $id Identifier of the user
     * @param string $password password in clear
     * @return int number of affected rows
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function resetPassword($id, $password) {
        //Hash the clear password using bcrypt (8 iterations)
        $salt = '$2a$08$' . substr(strtr(base64_encode($this->getRandomBytes(16)), '+', '.'), 0, 22) . '$';
        $hash = crypt($password, $salt);
        $data = array(
            'password' => $hash
        );
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    /**
     * Generate a random password
     * @param int $length length of the generated password
     * @return string generated password
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function randomPassword($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }

    /**
     * Load the profile of a user from the database to the session variables
     * @param array $row database record of a user
     */
    private function loadProfile($row) {
      /*
        00000001 1  Admin
        00000100 8  HR Officier / Local HR Manager
        00001000 16 HR Manager
        = 00001101 25 Can access to HR functions
       */
        $isAdmin = FALSE;
        if (((int) $row->userrole_id & 1)) {
            $isAdmin = TRUE;
        }
        $isSuperAdmin = FALSE;
        if (((int) $row->userrole_id & 25)) {
            $isSuperAdmin = TRUE;
        }

        $newdata = array(
            'login' => $row->username,
            'loggIn' => TRUE,
            'id' => $row->id,
            'role' => $row->userrole_id,
            'isAdmin' => $isAdmin,
            'isSuperAdmin' => $isSuperAdmin
        );
        $this->session->set_userdata($newdata);
    }

    /**
     * Check the provided credentials and load user's profile if they are correct
     * @param string $login user login
     * @param string $password password
     * @return bool TRUE if the user is succesfully authenticated, FALSE otherwise
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function checkCredentials($login, $password) {
        $row = $this->db->from('getusers');
        $this->db->where('username', $login);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            //No match found
            return FALSE;
        } else {
            $row = $query->row();
            $hash = crypt($password, $row->password);
            if ($hash == $row->password) {
            // var_dump($hash."".$row->password);die();
                // Password does match stored password.
                // var_dump($row);die();
                $this->loadProfile($row);
                // var_dump($row->userrole_id);die();
                return $row->userrole_id;
            } else {
                // Password does not match stored password.
                return FALSE;
            }
        }
    }
     /**
     * Check the provided credentials and load user's profile if they are correct
     * @param int $id
     * @return bool TRUE if the user is succesfully authenticated, FALSE otherwise
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function checkUserRole($id) {
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
         if ($query->num_rows() == 0) {
             //No match found
             return FALSE;
         } else {
             $row = $query->row();
            return $row->role;
         }
        }
    /**
     * Set a user as active (TRUE) or inactive (FALSE)
     * @param int $id User identifier
     * @param bool $active active (TRUE) or inactive (FALSE)
     * @return int number of affected rows
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function setActive($id, $active) {
        $this->db->set('active', $active);
        $this->db->where('id', $id);
        return $this->db->update('users');
    }


    /**
     * Check if a user is active (TRUE) or inactive (FALSE)
     * @param string $login login of a user
     * @return bool active (TRUE) or inactive (FALSE)
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function isActive($login) {
        $this->db->from('users');
        $this->db->where('login', $login);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->active;
        } else {
            return FALSE;
        }
    }

    /**
     * Try to return the user information from the login field
     * @param string $login Login
     * @return User data row or null if no user was found
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getUserByLogin($login) {
        $this->db->from('users');
        $this->db->where('login', $login);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            //No match found
            return null;
        } else {
            return $query->row();
        }
    }

    /**
     * Generate some random bytes by using openssl, dev/urandom or random
     * @param int $count length of the random string
     * @return string a string of pseudo-random bytes (must be encoded)
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    protected function getRandomBytes($length) {
        if(function_exists('openssl_random_pseudo_bytes')) {
          $rnd = openssl_random_pseudo_bytes($length, $strong);
          if ($strong === TRUE)
            return $rnd;
        }
        $sha =''; $rnd ='';
        if (file_exists('/dev/urandom')) {
          $fp = fopen('/dev/urandom', 'rb');
          if ($fp) {
              if (function_exists('stream_set_read_buffer')) {
                  stream_set_read_buffer($fp, 0);
              }
              $sha = fread($fp, $length);
              fclose($fp);
          }
        }
        for ($i=0; $i<$length; $i++) {
          $sha  = hash('sha256',$sha.mt_rand());
          $char = mt_rand(0,62);
          $rnd .= chr(hexdec($sha[$char].$sha[$char+1]));
        }
        return $rnd;
    }
    
}
