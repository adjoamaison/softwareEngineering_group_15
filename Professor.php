<?php
require_once 'adb.php';
require_once 'course.php';
require_once 'functions.php';
class Professor{

	public function edit_course(){
		if (isset($_REQUEST'id']) &&
      isset($_REQUEST'title'])
      isset($_REQUEST['faculty']) &&
			isset($_REQUEST['prof']) &&
			isset($_REQUEST['obj']) &&
			isset($_REQUEST['topics']) &&
      isset($_REQUEST['ref']) &&
			isset($_REQUEST['time']) &&
			isset($_REQUEST['pre']) &&
			isset($_REQUEST['assess']) ){
            $get_id= $_REQUEST['title');
            $get_title= $_REQUEST['title');
		        $get_fac= $_REQUEST['faculty');
		        $get_prof = $_REQUEST['prof');
		        $get_obj = $_REQUEST['obj');
            $get_topic = $_REQUEST['topics');
            $get_ref = $_REQUEST['ref');
            $get_time = $_REQUEST['time');
            $get_pre = $_REQUEST['pre');
            $get_assess = $_REQUEST['assess');
			$this->update_course($get_id, $get_title, $get_fac, $get_prof, $get_obj, $get_topic, $get_ref, $get_time, $get_pre, $get_assess);
      echo '{"result": 1}';
    }else{
      echo '{"result": 0}';
    }
		}
?>
