<?php
require_once 'adb.php';
require_once 'course.php';
require_once 'functions.php';
class Professor{


  /*
    function to edit course
  @param - id
 @return - true
 */
	public function editCourse($id, $get_title, $get_fac, $get_prof, $get_obj, $get_topic, $get_ref, $get_time, $get_pre, $get_assess){
			$this->updateCourse($id, $get_title, $get_fac, $get_prof, $get_obj, $get_topic, $get_ref, $get_time, $get_pre, $get_assess);
		}

    /*
      function to update a course
    @param - id, title, faculty id, prof id, objectives, topic, references, time, prerequisites, assessments
   @return - true
   */
    function updateCourse($id, $title, $fac_id, $prof_id, $obj, $top, $ref, $time, $prq, $ass){
      $str_query="update Course set title= '$title', faculty_id='$fac_id', professor_id='$prof_id', objective='$obj', topics='$top', course_references='$ref', time_frame='$time', prerequisite='$prq', assessment='$ass'
        where course_id = '$id'";
      return queryMysql($str_query);
    }
  }

?>
