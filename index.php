<?php
require_once 'header.php';
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        echo {"result": 0};
    else
    {
      $result = queryMySQL("SELECT username,password FROM Credentials
        WHERE username='$user' AND password='$pass'");

      if ($result->num_rows == 0)
      {
        echo {"result": 1};
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("You are now logged in. Please <a href='test.html?view=$user'>" .
            "click here</a> to continue.<br><br>");
      }
    }
  }
?>
