<?php
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
		textarea{
			border:1.5px solid black;
		}
	</style>

  <link rel="stylesheet" type="text/css" href="a.css">
</head>
<body id="bkg">

<div class="i_box2">
    <img src="pics/box1.jpg" height="550px" width="1030px">
</div>
<div id="navbar">
    <a href="teacher.php">Profile</a>
    <a href="attendance_teach.php" >Upload Attendance</a>
    <a href="stu_detail.php">Student Detail</a>
    <a href="upload_grade.php">Update result</a>
    <a href="change_pass_teach.php" >Change Password</a>   
    <a href="Upload_teach.php" class="active">Upload Notice</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<br><br><br><br><br>
<center><?php 
          
          if (!isset($_GET['remarks']))
          {
            echo 'Upload Notice';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo  "<p style='position: absolute;margin-left:550px;margin-top:-30px;font-size:30px;'>Uploaded Successfully</p>";
          }
          ?></center>
<center>
	<div class="text1"><br>
<form action="upload_teach.php" method="post" style="margin-left: -280px; margin-top: -30px">
	<table style="border-collapse: collapse;" cellspacing="10" cellpadding="10" >
		<tr>
			<td><input type="text" name="btch" placeholder="For Batch" required style="border: 1.5px solid black"></td>
		</tr>
		<tr>
			<td><textarea rows="10" cols="50" name="notice" placeholder="Write Here......" required></textarea></td>
		</tr>
	</table>
	<input type="submit" name="upld" value="Upload" style="background-color: #000; font-size: 20px; color: #fff; padding: 10px; width: 100px;" >
</form></div></center>
</body>
</html>
<?php
$qry1=mysqli_query($con,"SELECT batch FROM teacher where uid='$uid'");
$row1=mysqli_fetch_array($qry1);
$oops=$row1['batch'];
if($oops!=""){
if(isset($_POST['upld'])) {
	$btch=$_POST['btch'];
	$text=$_POST['notice'];
	mysqli_query($con,"INSERT INTO notice VALUES('$btch','$text')");
	header("location: upload_teach.php?remarks=success");
}
}
?>