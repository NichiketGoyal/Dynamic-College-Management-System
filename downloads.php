<?php
include ('base.php');
include('conn.php');
require_once('auth.php');
$db=mysqli_connect('localhost','root','','project');
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
</head>
<body id="bkg">
     <div class="i_box2">
    <img src="pics/box1.jpg" height="600px" width="1030px">
</div>

<div id="navbar">
    <a href="home.php" >Profile   </a>
    <a href="attendance.php" >Attendance</a>
    <a href="time_table.php">Time Table</a>
    <a href="fee.php">Fees</a>
    <a href="grade.php">Grade</a>
    <a href="fine.php">Fine</a>
    <a href="change_pass.php">Change Password</a>   
    <a href="downloads.php"class="active">Notices</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<div class="text1"><center>
<h3 style="margin-left: 280px;font-size: 50px;">Notices</h3>
<?php
$db=mysqli_connect('localhost','root','','project');
$qry0=mysqli_query($db,"SELECT * FROM notice");
echo "<ul>";
while($row0=mysqli_fetch_array($qry0)) {
  echo "<li>".$row0['btch']. "-" .$row0['text']. "</li>";
}
echo "</ul>";
?>

</center></div>
<</body>