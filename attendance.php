<?php
include ('base.php');
include('conn.php');
require_once('auth.php');
$qry1=mysqli_query($con,"SELECT * FROM attendence where uid='$uid'");
$row1=mysqli_fetch_array($qry1);
$oops=$row1['oops'];
$cn=$row1['cn'];
$cst=$row1['cst'];
$os=$row1['os'];
$dbms=$row1['dbms'];
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
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>

<div id="navbar">
    <a href="home.php" >Profile   </a>
    <a href="attendance.php" class="active">Attendance</a>
    <a href="time_table.php">Time Table</a>
    <a href="fee.php">Fees</a>
    <a href="grade.php">Grade</a>
    <a href="fine.php">Fine</a>
    <a href="change_pass.php">Change Password</a>   
    <a href="downloads.php">Notices</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<div class="text1"><br><center>
  
<h1  align="center" style="margin-top: 30px; text-transform: uppercase;color: rgb(19,35,47);margin-left: 270px;">Attendance</h1>
<table align="center" border="1" cellpadding="5" cellspacing="0" style="margin-left: 170px;">
    <tr>
		<td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Subjects</td><td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Total Lecture</td><td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Attended</td><td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Percentage</td>
	</tr>
	<tr>
		<td style="font-weight: bold;">OOPS</td><td>100</td><td><?php echo $oops; ?></td><td><?php echo round($oops/1,2); ?> </td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">Computer Networks</td><td>100</td><td><?php echo $cn; ?></td><td><?php echo round($cn/1,2); ?></td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">Client Side Tech.</td><td>100</td><td><?php echo $cst; ?></td><td><?php echo round($cst/1,2); ?></td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">D.B.M.S</td><td>100</td><td><?php echo $dbms; ?></td><td><?php echo round($dbms/1,2); ?></td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">OS</td><td>100</td><td><?php echo $os; ?></td><td><?php echo round($os/1,2); ?></td>
	</tr>
	</tr>
</table></center>
</div>


</body>
</html>