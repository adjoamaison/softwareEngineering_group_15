<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>Uploads</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">Uploads</th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM upload";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
  </table>

	<label><a href="index.php">Upload new files...</a></label>


</div>
</body>
</html>
