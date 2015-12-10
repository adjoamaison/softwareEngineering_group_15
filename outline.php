<?php

/**
 * @author: Agatha Maison
 * date: 20th November 2015
 * description: A database class for all functions relating to the course outlines
 */
	include_once("adb.php");
	class outline extends adb{
		function addOutline($oid,$cid,$obj,$lg,$sid,$rid){
			$str_query = "insert into se_outline set outline_id='$oid',courseid='$cid',
				objective='$obj', goals='$lg', schedule_id='$sid', resource='$rid'";
 			return $this->query($str_query);
		}

		function submitOutline($cid){
			$str_query="UPDATE se_outline SET submitted='1' WHERE outline_id='$cid'";
			return $this->query($str_query);
		}

		function addSchedule($id,$week, $topic, $reading){
			$str_query="insert into se_schedule set outline_id='$id', week='$week',
			 topic='$topic', assigned_reading='$reading'";
			return $this->query($str_query);
		}
	}
?>
