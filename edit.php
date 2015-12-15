<?php
require_once 'Professor.php';
require_once 'header.php';
$obj = new Professor();
$user="";
  if (isset($_REQUEST['view'])){
      $user = sanitizeString($_REQUEST['view']);
  }
  else {
      $user = $_REQUEST['temp'];
  }




      $x = new Professor();
      $row = $x -> edit($user);
      $data = mysqli_fetch_assoc($row);

      $x -> edit_course($user);
      $x ->professor_id = $user;
?>
