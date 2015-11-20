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
            add();  
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
    function add(){
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
?>