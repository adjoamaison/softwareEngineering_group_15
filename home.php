<?php
require_once 'header.php';
require_once 'Professor.php';

if (!$loggedin) die();

  if (isset($_GET['view']))
  {
    $user = sanitizeString($_GET['view']);
  }

$prof = new Professor();

$prof -> username = $user;

$id = $prof->get_professor_id();

$row = mysqli_fetch_assoc($id);

$prof-> professor_id = $row['professor_id'];

$name = $prof-> get_professor_name();

$x = mysqli_fetch_assoc($name);

$first = $x['first_name'];
$last = $x['last_name'];


$row = $prof -> fill_table();

$data = mysqli_fetch_assoc($row);
$status = $data['professor_id'];

?>
</body>
</html>
