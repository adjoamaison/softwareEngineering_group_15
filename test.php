<?php
class Test extends PHPUnit_Framework_TestCase{
    /*
  just a funnttion to execute a unit test on the update course function
    @param - takes no pg_parameters
   @return - returns nothing
   */

    function updateCourseUnitTest(){
      $prof = new Professor();
      $test = $prof->updateCourse($1, "hello", "engineering", "aelaf", "learning", "software engineering", "silberschatz", "2 weekds", "programming", "excellent");
      $this->assertTrue($test);
    }
}

?>
