<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Detail</title>
	<style type="text/css">
		#table1 {
			border: 2px solid;
			width:40%;
			border-radius: 14px;
			border-color: #154360;
			box-shadow: 3px 6px #e3f6fe;
		}
		td{
			text-transform: uppercase;
			font-family: verdana;
			font-size: 18px;
		}
	</style>

	  <link rel="stylesheet" type="text/css" href="a.css">
</head>
<body id="bkg">
		<div class="i_box2">
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>
<div id="navbar">
    <a href="teacher.php">Profile</a>
    <a href="attendance_teach.php" >Upload Attendance</a>
    <a href="stu_detail.php" class="active">Student Detail</a>
	<a href="upload_grade.php">Update result</a>
    <a href="change_pass_teach.php">Change Password</a>   
    <a href="Upload_teach.php">Upload Notice</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<br><br><br><br><br>

<form method="post" action="stu_detail.php" style="margin-left: 20px;position: absolute;margin-left: 550px;">
<label style="font-family: verdana; font-size: 20px;">Enter Student Id:</label><br>
<input type="text" name="uid" required>
<input type="submit" name="submit" value="Go">
</form>
<?php
if(isset($_POST['submit'])) {
	include('conn.php');
require_once('auth.php');
	$uid=$_POST['uid'];
$qry1=mysqli_query($con,"SELECT batch FROM teacher where uid='$uid'");
$row1=mysqli_fetch_array($qry1);
$oops=$row1['batch'];
if($oops!=""){
$qry1=mysqli_query($con,"SELECT * FROM student where uid='$uid'");
$qry2=mysqli_query($con,"SELECT * FROM parents where uid='$uid'");
if(mysqli_num_rows($qry1)>0) {
	$row1=mysqli_fetch_array($qry1);$row2=mysqli_fetch_array($qry2);
	echo "<center><table border=1 style='border-collapse:collapse; position:absolute;margin-top:140px; border:solid 2px #000;border-radius:20px;margin-left:470px;' cellpadding=3>";
	echo "<tr><td>College ID</td><td>" .$row1['uid']. "</td></tr><tr><td>Name</td><td>".$row1['name']. "</td></tr><tr><td>Contact</td><td>".$row1['phone']. "</td></tr><tr><td>E-Mail ID</td><td>".$row1['email']. "</td></tr><tr><td>Date of Birth</td><td>".$row1['dob']. "</td></tr><tr><td>Father`s Name</td><td>".$row2['f_name']."</td></tr><tr><td>Contact</td><td>".$row2['f_number']."</td></tr><tr><td>Mother`s Name</td><td>".$row2['m_name']. "</td></tr><tr><td>Contact</td><td>".$row2['m_number'];
	echo "</table></center>";
} else {
	echo "<p style='position:absolute;margin-left:550px;margin-top :150px;font-size:30px;'>No Data Found</p>";
}
}
}
?>
</body>
</html>
