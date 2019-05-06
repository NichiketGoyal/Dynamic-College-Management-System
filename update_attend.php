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
	}
</style>
</head>
<body id="bkg">

<div class="i_box2">
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>
<div id="navbar">
    <a href="teacher.php">Profile</a>
    <a href="attendance_teach.php"class="active">Upload Attendance</a>
    <a href="stu_detail.php">Student Detail</a>
    <a href="upload_grade.php" >Update result</a>
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
$qry3=mysqli_query($con,"SELECT * FROM attendence where uid like '$oops%'");
echo "<form action='atten_exec.php' method='post'><table border='1'>
<tr>
<th>College ID</th><th>OOPS</th><th>CN</th><th>CST</th><th>DBMS</th><th>OS</th>
</tr>" ;

while($row3=mysqli_fetch_array($qry3)) {
	echo "<tr><td>" .$row3['uid']. "</td><td><input type='number' name='oops[]'></td><td><input type='number' name='cn[]'></td><td><input type='number' name='cst[]'></td><td><input type='number' name='dbms[]'></td><td><input type='number' name='os[]'></td></tr>";
}
echo "<button style='width:200px;margin-left:300px'>Update Attendance</button>";

echo "</table></form>";
?>
</div>
<center>
</body>
</html>