<?php
include ('base_accounts.php');
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
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>
<div id="navbar">
    <a href="accounts.php">Profile</a>
    <a href="salary.php">Salary</a>
    <a href="upload_fee.php">Student Fee</a>
    <a href="upload_fine.php">Student Fine</a>
    <a href="change_pass_accounts.php" class="active">Change Password</a>    
    <a href="open.php" style="float: right;">Logout</a>
</div>
<br><br><br>

<center>
	<div class="text1"><br>
<form method="post" action="change_pass_accounts.php" style="border: 4px solid #000; padding:30px; width: 50% ;margin-left: -250px; ">
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
$qr=mysqli_query($con,"SELECT * FROM acc WHERE uid='$uid'");
$res=mysqli_fetch_array($qr);
if($opsw==$res['password']) {
	if($npsw==$cpsw) {
		mysqli_query($con,"UPDATE acc SET password='$npsw' WHERE uid='$uid'");
		echo "<center><p style='position:absolute;margin-left:600px;'>Password Updated Successfully</p></center>";
	} else {
		echo "<center><p style='position:absolute;margin-left:630px;'>Password Not Matched</p></center>";
	}
}else {
	 echo "<center><p style='position:absolute;margin-left:610px;'>Old Password Is Incorrect</p></center>";
}
}
?>