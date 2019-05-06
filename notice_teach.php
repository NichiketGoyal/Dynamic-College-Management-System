<?php
include('conn.php');
require_once('auth.php');
$db=mysqli_connect('localhost','root','','project');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<style type="text/css">
	td{
		text-align: center;
	}
		tr{
			width: 50px;
			padding-top: 5px;
			padding-left: 10px;

		}
		table {
			margin-top: 80px;
			width: 50%;
			border: 2px solid;	
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
    <a href="attendance_teach.php">Attendance</a>
    <a href="stu_detail.php">Student Detail</a>
    <a href="notice_teach.php"class="active">Notices</a>
    <a href="change_pass_teach.php">Change Password</a>   
    <a href="upload_teach.php">Upload Notice</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
     
<div class="text1"><center>
<h3 style="margin-left: 300px;font-size: 50px;">Notices</h3>
<?php
$db=mysqli_connect('localhost','root','','project');
$qry0=mysqli_query($db,"SELECT * FROM notice_teach");
echo "<ul>";
while($row0=mysqli_fetch_array($qry0)) {
  echo "<li>" .$row0['text']. "</li>";
}
echo "</ul>";
?>

</center></div>
<</body>