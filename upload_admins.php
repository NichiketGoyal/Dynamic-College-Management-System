<?php
include ('base_admins.php');
include('conn.php');
require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Notice</title>
	<style type="text/css">
		td{
			text-align: center;
			width: 200px;
		}
	</style>
</head>
<body id="bkg">
<center><?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'UPLOAD NOTICE';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Uploaded Successfully';
          }
          ?></center>
<center>
<form action="upload_admins.php" method="post">
	<table style="border-collapse: collapse;" cellspacing="10" cellpadding="10" >
		<tr>
			<td><textarea rows="10" cols="50" name="notice" placeholder="Write Here......" style="resize: none;" required></textarea></td>
		</tr>
	</table>
	<input type="submit" name="upld" value="Upload" style="background-color: green; font-size: 20px; color: #fff; padding: 10px; width: 100px;" >
</form></center>
</body>
</html>
<?php

if(isset($_POST['upld'])) {
	$text=$_POST['notice'];
	mysqli_query($con,"INSERT INTO teach_notice VALUES('$text')");
	header("location: upload_admins.php?remarks=success");
}
?>