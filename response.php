<?php    
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
    
        function add(){
            $cid = $_REQUEST["cid"];
            $cname = $_REQUEST["cname"];
            $desc = $_REQUEST["cdesc"];

            include("course.php");
            $obj=new course();
            
            if($obj->addCourse($cid, $cname,$desc)) {               
                echo '{"result":1}';        
            }
            else {
                echo '{"result":0}';        
            }
        }
?>