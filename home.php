<?php
require_once 'functions.php';
  $error = $user = $pass = "";

  if (isset($_REQUEST['user']))
  {
    $user = sanitizeString($_REQUEST['user']);
    $pass = sanitizeString($_REQUEST['pass']);

    if ($user == "" || $pass == ""){
        echo '{"result": 0}';
      }
    else
    {
      $result = queryMySQL("SELECT username,password FROM Credentials
        WHERE username='$user' AND password='$pass'");

      if ($result->num_rows == 0)
      {
        echo '{"result": 1}';
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        echo '{"result": 2}';
      }
    }
  }
?>
