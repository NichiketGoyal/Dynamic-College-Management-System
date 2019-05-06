<?php
include ('base_accounts.php');
include ('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Fee</title>
	<style type="text/css">
	
  input[type=text],input[type=number] {
			border-radius: 40px;
			height: 40px;

			margin-top: 15px;
			margin-left: -250px;
			width: 160px;
			border-color: #000;
		}
		input[type=submit] {
			height: 30px;
			margin-top: 20px;
			border-radius: 30px;
			color: rgb(17,39,47);
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 13px;
			padding: 5px;
			border-color: #000;
			margin-left: -250px;
		}
	</style>
</head>
<body id="bkg"><center>

<div class="i_box2">
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>
<div id="navbar" style="margin-left: 17px;">
    <a href="accounts.php">Profile</a>
    <a href="salary.php">Salary</a> 
    <a href="upload_fee.php" class="active">Student Fee</a>
    <a href="upload_fine.php">Student Fine</a>
    <a href="change_pass_accounts.php">Change Password</a>   
    <a href="open.php" style="float: right;">Logout</a>
</div>
<br><br><br>
	<div class="text1">
<h2 style="font-family: verdana; text-transform: uppercase; letter-spacing: 3px;text-align: left;font-size: 40px;margin-left: -60px;">Update Fee</h2>
<form method="post" action="upload_fee.php">
	<input type="text" name="uid" placeholder="   Enter College ID" required><br>
	<input type="number" name="fee" placeholder="    Enter amount" required style="border: 1px solid black;"><br>
	<input type="submit" name="chck" value="Update Fee">
</form></center></div>
</body>
</html>
<?php
if(isset($_POST['chck'])) {
	$uid=$_POST['uid'];
	$amnt=$_POST['fee'];
$qr=mysqli_query($con,"SELECT * FROM fee WHERE uid='$uid'");
if(mysqli_num_rows($qr)>0) {
$row=mysqli_fetch_array($qr);
$prev_amnt=$row['paid'];

$new=$prev_amnt+$amnt;
mysqli_query($con,"UPDATE fee SET paid=$new WHERE uid='$uid'");
echo "<p style='position:absolute;margin-left:550px;font-size:30px;'>Updated Successfully</p><br><br>";

} else {
	echo 'No Data Found';
}
}
?>