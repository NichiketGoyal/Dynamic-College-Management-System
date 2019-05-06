
<html>
<head>
<link rel="stylesheet" type="text/css" href="a.css">
	<style>
table {
	border-collapse: collapse;
	margin-left: -108px;
}
th {
	width:80px;
		text-align: center;
		font-size: 20px;
		font-weight: lighter;
		border-collapse: collapse;
}
	td{
		width:80px;
		text-align: center;
		font-size: 18px;
		
		border-collapse: collapse;
	}
	}
	input[type=submit]{
		margin-top: 40px;
		height: 30px;
		border-radius: 50px;
		color: white;
		text-transform: uppercase;
	}
	table {
		margin-top: 20px;
	}</style>
</head>
<body id="bkg">

<div class="i_box2">
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>
<div id="navbar">
    <a href="teacher.php">Profile</a>
    <a href="attendance_teach.php">Upload Attendance</a>
    <a href="stu_detail.php">Student Detail</a>
    <a href="upload_grade.php" class="active">Update result</a>
    <a href="change_pass_teach.php">Change Password</a>   
    <a href="upload_teach.php">Upload Notice</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<div class="text1">

<?php

include('conn.php');
require_once('auth.php');
$qry1=mysqli_query($con,"SELECT batch FROM teacher where uid='$uid'");
$row1=mysqli_fetch_array($qry1);
$oops=$row1['batch'];
$qry2=mysqli_query($con,"SELECT uid, name FROM student where uid like '$oops%'");
$qry3=mysqli_query($con,"SELECT * FROM marks where uid like '$oops%'");
$val=0;
while($row=mysqli_fetch_array($qry3)) {
	$serial=$row['uid'];
	$oop=$_POST['oops'][$val];
	$cn=$_POST['cn'][$val];
	$cst=$_POST['cst'][$val];
	$dbms=$_POST['dbms'][$val];
	$os=$_POST['os'][$val];
	mysqli_query($con,"UPDATE marks SET oops=$oop WHERE uid=$serial");
	mysqli_query($con,"UPDATE marks SET cn=$cn WHERE uid=$serial");
	mysqli_query($con,"UPDATE marks SET cst=$cst WHERE uid=$serial");
	mysqli_query($con,"UPDATE marks SET os=$os WHERE uid=$serial");
	mysqli_query($con,"UPDATE marks SET dbms=$dbms WHERE uid=$serial");
	$val++;
}
echo "<center><p style='margin-top:200px;margin-left:165px;font-size:46px;width:100%;'>Marks Updated Successfully</p></center>";
?>
</div></body></html>