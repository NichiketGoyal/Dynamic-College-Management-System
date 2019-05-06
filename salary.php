
<?php
include ('base_accounts.php');
include ('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style type="text/css">
		
  input[type=text],input[type=number] {
			border-radius: 40px;
			height: 40px;
			margin-top: 15px;
			width: 160px;
			border-color: #000;
			margin-left: -250px;

		}
		input[type=submit] {
			
			height: 30px;
			margin-top: 10px;
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
<body id="bkg">
	<div class="i_box2">
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>
<div id="navbar">
    <a href="accounts.php">Profile</a>
    <a href="salary.php" class="active">Salary</a> 
    <a href="upload_fee.php">Student Fee</a>
    <a href="upload_fine.php">Student Fine</a>   
    <a href="change_pass_accounts.php">Change Password</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<br><br><br>

<center>


<div class="text1"><br>

	<h2 style="font-family: verdana; text-transform: uppercase;margin-left: -100px; ;text-align: left;margin-top: 0px;font-size: 40px; ">Employee Salary</h2>
<form method="post" action="salary.php"><br><br>
	<input type="text" name="uid" align="left" placeholder="   Enter College ID" required><br><br><br>
	<input type="submit" name="chck" value="Check Salary">
</form>
</div>
<?php
if(isset($_POST['chck'])) {
	$uid=$_POST['uid'];
$qr=mysqli_query($con,"SELECT * FROM salary WHERE uid='$uid'");
if(mysqli_num_rows($qr)>0) {
$row=mysqli_fetch_array($qr);
echo "<center><p style='position:absolute;margin-left:550px;font-size:30px;'>Unique id:" .$row['uid']. "</p></center><br><br>";
echo "<center><p style='position:absolute;margin-left:550px;font-size:30px;'>Current Salary:" .$row['salary']. "</p></center>";
} else {
	echo "<center><p style='position:absolute;text-align:center;margin-left:590px;font-size:30px;'> No Data Found</p></center>";
}
}
?>
</center>

</body>
</html>