<?php
	include_once("adb.php");
	class outline extends adb{
		function addOutline($cid,$did,$obj,$lg,$sid,$rid,$submit,$review){
			$str_query = "insert into course_outline set courseid='$cid', departmentid='$did',
				objective='$obj', goals='$lg', schedule_id='$sid', resource='$rid', submitted='$submit',
				reviewed='$review'";
			return $this->query($str_query);
		}
	}
?>