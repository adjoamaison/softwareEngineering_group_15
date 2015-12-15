<?php
/**
 * @author: Agatha Maison
 * date: 20th November 2015
 * description: A database class for all functions relating to the course outlines
 */
    if(!isset($_REQUEST['cmd'])){
        echo '{"result":0,message:"unknown command"}';
        exit();
    }
    $cmd=$_REQUEST['cmd'];
    switch($cmd)
    {
        case 1:
            addCourse();
        break;

        case 2:
            viewCourse();
        break;

        case 3:
          addOutline();
        break;

        case 4:
          addSchedule();
        break;

        case 5:
          submitOutline();
        break;
        default:
            echo '{"result":0,"message":"unknown command"}';
        break;
    }

/**
 * description: A function that takes parameters from a given url to add a new
 * course to the database. It echos a json with result being 1 when successful
 * or 0 if query failed
 */
    function addCourse(){
        $cid = $_REQUEST["cid"];
        $cname = $_REQUEST["cname"];
        $desc = $_REQUEST["cdesc"];

        include("course.php");
        $obj=new course();

        if($obj->addCourse($cid, $cname,$desc)) {
            echo '{"result":1}';
        }else {
            echo '{"result":0}';
        }
    }

/**
 * description: A function that takes parameters from a given url to add a new
 * course to the database. It echos a json with result being 1 when successful
 * or 0 if query failed
 */
    function viewCourse(){

        include("course.php");
        $obj=new course();

        if($obj->viewCourse()) {
            $row=$obj->fetch();
                echo '{"result":1,"courses":[';
                while($row){
                    echo json_encode($row);
                    $row=$obj->fetch();
                    if($row){
                        echo ",";
                    }
                }
                echo "]}";
            }else {
            echo '{"result":0}';
        }
    }

  /**
   * description: A helper function that generates a random id
   */
    function random_id($length = 4) {
      $alphabets = range('A','Z');
      $numbers = range('0','9');
      $additional_characters = array('_','.');
      $final_array = array_merge($alphabets,$numbers,$additional_characters);

      $ran_id = '';

      while($length--) {
        $key = array_rand($final_array);
        $ran_id .= $final_array[$key];
      }
         return $ran_id;
    }

  /**
   * description: A function that takes parameters from a given url to add a new
   * course outline to the database. It echos a json with result being 1 when successful
   * or 0 if query failed
   */
   function addOutline(){
     $oid = random_id(4);
     $cid = $_REQUEST["cid"];
     $obje = $_REQUEST["obj"];
     $lg = $_REQUEST["goal"];
     $res = $_REQUEST["res"];

     include("outline.php");
     $obj=new outline();

       if($obj->addOutline($oid,$cid,$obje,$lg,$res)) {
           echo '{"result":1}';
     }else {
         echo '{"result":0}';
     }
   }

   function addSchedule(){
     $oid = $_REQUEST["id"];
     $week = $_REQUEST["week"];
     $topic = $_REQUEST["topic"];
     $read = $_REQUEST["read"];

     include("outline.php");
     $obj=new outline();
     if($obj->addSchedule($oid, $week, $topic, $read)){
       echo '{"result":1}';
     }else {
       echo '{"result":0}';
     }
   }
?>
