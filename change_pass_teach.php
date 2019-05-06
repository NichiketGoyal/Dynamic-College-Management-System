<?php
	include('conn.php');
require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<style type="text/css">
		input[type=password] {
			border-radius: 40px;
			height: 40px;
			margin-top: 15px;
			width: 160px;
			border-color: #34495E;
		}
		input[type=submit] {
			background: #D3D9F8;
			height: 30px;
			margin-top: 10px;
			border-radius: 30px;
			color: rgb(17,39,47);
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 13px;
			padding: 5px;
			border-color: #34495E;
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
    <a href="change_pass_teach.php"class="active">Change Password</a>   
    <a href="Upload_teach.php">Upload Notice</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<br><br><br><br><br>

<center>
	<div class="text1"><br>
<form method="post" action="change_pass_teach.php" style="border: 4px solid #000; padding:30px; width: 50% ;margin-left: -270px; margin-top: -45px">
<input type="Password" name="opsw" placeholder="Current Pssword" required><br>
<input type="Password" name="npsw" placeholder="New Password" required><br>
<input type="Password" name="cpsw" placeholder="Confirm Password" required><br>
<input type="submit" name="submit" value="Change Password">
</form></div></center>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
$opsw=$_POST['opsw'];
$npsw=$_POST['npsw'];
$cpsw=$_POST['cpsw'];
$qr=mysqli_query($con,"SELECT * FROM teacher WHERE uid='$uid'");
$res=mysqli_fetch_array($qr);
if($opsw==$res['password']) {
	if($npsw==$cpsw) {
		mysqli_query($con,"UPDATE teacher SET password='$npsw' WHERE uid='$uid'");
		echo "<center><p style='position:absolute;margin-left:670px;'>Password Updated Successfully</p></center>";
	} else {
		echo "<center><p style='position:absolute;margin-left:700px;'>Password Not Matched</p></center>";
	}
}else {
	 echo "<center><p style='position:absolute;margin-left:685px;'>Old Password Is Incorrect</p></center>";
}
}
?>