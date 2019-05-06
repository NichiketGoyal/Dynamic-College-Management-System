<?php
include ('base.php');
include('conn.php');
require_once('auth.php');
$qry1=mysqli_query($con,"SELECT * FROM stu where uid='$uid'");
$qry2=mysqli_query($con,"SELECT * FROM parents where uid='$uid'");
$row1=mysqli_fetch_array($qry1);$row2=mysqli_fetch_array($qry2);
$id=$row1['uid'];$name=$row1['name'];$email=$row1['email'];$dob=$row1['dob'];
$fname=$row2['f_name'];$fnumber=$row2['f_number'];$mname=$row2['m_name'];$mnumber=$row2['m_number'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Info</title>
	<style type="text/css">
		.info {
			border: 2px solid;
			width:40%;
			border-radius: 14px;
			border-color: #154360;
			box-shadow: 3px 6px #e3f6fe ;
		}
		td{
			text-transform: uppercase;
			font-family: verdana;
			font-size: 18px;
		}
		.update_btn{
			margin-left: 480px;
			margin-top: 20px;
			margin-bottom: 10px;
			background-color: #c1ded2;
			color: green;
			border-radius: 10px;
			height: 40px;
			width: 30%;
			cursor: pointer;
		
		}

	</style>
</head>
<body bgcolor="#d3d3d3">
<h1 align="center">Personal Info</h1>
<table class="info" border ="0" align="center" >
	<tr><td align="right">College ID:</td><td><?php echo $id; ?></td></tr>
	<tr><td align="right">Name:</td><td><?php echo $name; ?></td></tr>
	<tr><td align="right">Email:</td><td><?php echo $email; ?></td></tr>
	<tr><td align="right">Date of Birth:</td><td><?php echo $dob; ?></td></tr>
	<tr><td align="right">father`s name:</td><td><?php echo $fname; ?></td></tr>
	<tr><td align="right">Contact No.:</td><td><?php echo $fnumber; ?></td></tr>
	<tr><td align="right">mother`s Name:</td><td><?php echo $mname; ?></td></tr>
	<tr><td align="right">Contact no.:</td><td><?php echo $mnumber; ?></td></tr>
</table>
<button type="button" onclick="window.location.href='update_info.php'" class="update_btn">Update Info</button>
</body>
</html>