<?php
	include_once("adb.php");
	class course extends adb{
		function addCourse($cid, $cname, $desc){
			$str_query = "insert into se_course set courseid='$cid', course_name='$cname', course_description='$desc'";
			return $this->query($str_query);
		}
?>