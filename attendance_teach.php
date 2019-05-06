	
<!DOCTYPE html>
<html>
<head>
	<title>CollegeInfo | Attendence</title>
	<link rel="stylesheet" type="text/css" href="a.css">
<style type="text/css">
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
    <img src="pics/box1.jpg" height="550px" width="1030px">
</div>

<div id="navbar" style="size: 2">
    <a href="teacher.php">Profile</a>
    <a href="attendance_teach.php"class="active">Upload Attendance</a>
    <a href="stu_detail.php">Student Detail</a>
    <a href="upload_grade.php">Update result</a>
    
    <a href="change_pass_teach.php">Change Password</a>   
    <a href="upload_teach.php">Upload Notice</a>
    <a href="open.php" style="float:right;">Logout</a>
</div>
<br><br><br><br><br>
<?php
include('conn.php');
require_once('auth.php');
$qry1=mysqli_query($con,"SELECT batch FROM teacher where uid='$uid'");
if(mysqli_num_rows($qry1)>0) {
$row1=mysqli_fetch_array($qry1);
$oops=$row1['batch'];
$qry2=mysqli_query($con,"SELECT uid, name FROM stu where uid like '$oops%'");
$qry3=mysqli_query($con,"SELECT * FROM attendence where uid like '$oops%'");
if($oops!=""){
echo "<center><table border=1 style='position:absolute;margin-left:350px'>
<tr>
<th>College ID</th><th>OOPS</th><th>CN</th><th>CST</th><th>DBMS</th><th>OS</th>
</tr>" ;

while($row3=mysqli_fetch_array($qry3)) {
	echo "<tr><td>" .$row3['uid']. "</td><td>" .$row3['oops']. "</td><td>" .$row3['cn']. "</td><td>" .$row3['cst']. "</td><td>"  .$row3['dbms']. "</td><td>" .$row3['os']. "</td></tr>";
}
echo "</table></center>";
echo "<a href='update_attend.php' style='text-decoration:none; ''><button style='position:absolute;margin-left: 580px;width: 200px;''> Update Attendance</button></a>";
}
}
?>
	
</body>
</html>