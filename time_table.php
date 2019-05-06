<?php
include ('base.php');
include('conn.php');
require_once('auth.php');

?>
<?php

$qry1=mysqli_query($con,"SELECT LEFT(uid,2) FROM student where uid='$uid'");
$row1=mysqli_fetch_array($qry1);
$oops=$row1['LEFT(uid,2)'];
$qry3=mysqli_query($con,"SELECT * FROM TT where batch='$oops%'");
$row3=mysqli_fetch_array($qry3);
$iname=$row3['iname'];


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
    <img src="pics/box1.jpg" height="650px" width="1030px">
</div>

<div id="navbar">
    <a href="home.php" >Profile   </a>
    <a href="attendance.php" >Attendance</a>
    <a href="time_table.php"class="active">Time Table</a>
    <a href="fee.php">Fees</a>
    <a href="grade.php">Grade</a>
    <a href="fine.php">Fine</a>
    <a href="change_pass.php">Change Password</a>   
    <a href="downloads.php">Notices</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<div class="text1"><br><center>
<table border="0" width="845px">
  <?php echo "<img src='".$iname."' height=400px width=1000px style='float:left;margin-left:-117px; margin-top:10px;'>"; ?></td>
</table>
</center>
</div>

</body>