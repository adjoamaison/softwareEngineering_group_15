<?php

require_once 'adb.php';

class Lecturers{


    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
  	public $email;
  	public $role;
    public $office;


    // Get ID
  	public function get_id(){
  		$query = "SELECT id FROM Credentials WHERE username = '$this->username'";
          $result = queryMysql($query);
  		return $result;
  	}

    // Get email
    public function get_email($email){
        $query = "SELECT id FROM Professor WHERE email='$email'";
        $result = queryMysql($query);
        return $result;
    }

    // Get full name
    public function get_lecturer_name(){
        $query = "SELECT first_name, last_name from Professor WHERE id = '$this->id'";
        $result = queryMysql($query);
        return $result;
    }

    // Get username
    public function get_username($username){
        $query = "SELECT id FROM Professor WHERE username='$username'";
        $result = queryMysql($query);
        return $result;
    }

    // Get full details
    public function get_lecturer($id){
        $query = "SELECT username, password, first_name, middle name, last_name, faculty_id, email, phone, office, role FROM Lecturers WHERE id = '$id'";
        $result = queryMysql($query);
        return $result;
    }

    // Edit username
    function edit_username($id,$username){
        $str_query= UPDATE `Lecturers` SET username=`$username` WHERE id=`$id`;
        $result = queryMysql($str_query);
  			return $result;
    }

    // Edit password
    function edit_password($id,$password){
        $str_query= UPDATE `Lecturers` SET password=`$password` WHERE id=`$id`;
        $result = queryMysql($str_query);
  			return $result;
    }

    // Edit full name
    function edit_lecturer_name($id,$fname,$lname){
        $str_query= UPDATE `Lecturers` SET first_name=`$fname`, last_name=`$lname` WHERE id=`$id`;
        $result = queryMysql($str_query);
  			return $result;
    }

    // Edit email
    function edit_email($id,$email){
        $str_query= UPDATE `Lecturers` SET email=`$email` WHERE id=`$id`;
        $result = queryMysql($str_query);
  			return $result;
    }

    // Edit role
    function edit_role($id,$role){
        $str_query= UPDATE `Lecturers` SET role=`$role` WHERE id=`$id`;
        $result = queryMysql($str_query);
  			return $result;
    }

    // Edit office
    function edit_office($id,$office){
      $str_query= UPDATE `Lecturers` SET office`$office` WHERE id=`$id`;
      $result = queryMysql($str_query);
      return $result;
    }

}
?>
