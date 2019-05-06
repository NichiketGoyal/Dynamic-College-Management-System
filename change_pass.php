<?php
include ('base.php');
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
</head>
<body id="bkg">
	<div class="i_box2">
   	<img src="pics/box1.jpg" height="550px" width="1030px">
</div>
<div id="navbar">
    <a href="home.php">Profile   </a>
    <a href="attendance.php">Attendance</a>
    <a href="time_table.php">Time Table</a>
    <a href="fee.php">Fees</a>
    <a href="grade.php" >Grade</a>
    <a href="fine.php">Fine</a>
    <a href="change_pass.php"class="active">Change Password</a>   
    <a href="downloads.php">Notices</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>

<center>
	<div class="text1"><br>
<form method="post" action="change_pass.php" style="border: 4px solid #000; padding:30px; width: 50% ;margin-left:-270px;margin-top: 60px; ">
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
$qr=mysqli_query($con,"SELECT * FROM student WHERE uid='$uid'");
$res=mysqli_fetch_array($qr);
if($opsw==$res['password']) {
	if($npsw==$cpsw) {
		mysqli_query($con,"UPDATE student SET password='$npsw' WHERE uid='$uid'");
		echo "<center><p style='position:absolute;margin-left:670px;'>Password Updated Successfully</p></center>";
	} else {
		echo "<center><p style='position:absolute;margin-left:700px;'>Password Not Matched</p></center>";
	}
}else {
	 echo "<center><p style='position:absolute;margin-left:685px;'>Old Password Is Incorrect</p></center>";
}
}
?>