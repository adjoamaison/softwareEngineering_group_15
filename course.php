<?php


/**
 * @author: Agatha Maison
 * date: 20th November 2015
 * description: A database class for all functions relating to the course outlines
 */

	include_once("adb.php");

	class course extends adb{

/**
 * description: A function to add a new course to the database
 * @param A string containing the id of the course to be added
 * @param A string containing the name of the course to be added
 * @param A string containing the description of the course to be added
 * @return An execution of the query to add to the database, 
 * returns true if successful and false if not
 */
		function addCourse($cid, $cname, $desc){
			$str_query = "insert into se_course set course_id='$cid', 
				course_name='$cname', course_description='$desc'";
			return $this->query($str_query);
		}
	}
?>