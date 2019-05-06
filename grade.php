<?php
include ('base.php');
include('conn.php');
require_once('auth.php');
$query1=mysqli_query($con,"SELECT * from marks where uid='$uid'");
$row1=mysqli_fetch_array($query1);
$oops=$row1['oops'];
$cn=$row1['cn'];
$cst=$row1['cst'];
$os=$row1['os'];
$dbms=$row1['dbms'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>CollegeInfo | Grade Info</title>
	<link rel="stylesheet" type="text/css" href="a.css">
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
<div id="navbar">
    <a href="home.php">Profile   </a>
    <a href="attendance.php">Attendance</a>
    <a href="time_table.php">Time Table</a>
    <a href="fee.php">Fees</a>
    <a href="grade.php" class="active">Grade</a>
    <a href="fine.php">Fine</a>
    <a href="change_pass.php">Change Password</a>   
    <a href="downloads.php">Notices</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>

<div class="text1"><br><center>
  
<h1  align="center" style="margin-top: 5px; text-transform: uppercase;color: rgb(19,35,47);margin-left: 320px">Grades</h1>
<table align="center" border="1" cellpadding="5" cellspacing="0" style="margin-left: 220px;">
    <tr>
		<td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Subjects</td><td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Marks</td><td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Percentage</td>
	</tr>
	<tr>
		<td style="font-weight: bold;">OOPS</td><td><?php echo $oops; ?></td><td><?php echo round($oops/0.4,2); ?> </td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">Computer Networks</td><td><?php echo $cn; ?></td><td><?php echo round($cn/0.4,2); ?></td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">Client Side Tech.</td><td><?php echo $cst; ?></td><td><?php echo round($cst/0.4,2); ?></td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">D.B.M.S</td><td><?php echo $dbms; ?></td><td><?php echo round($dbms/0.4,2); ?></td>
	</tr>
	</tr>
	<tr>
		<td style="font-weight: bold;">OS</td><td><?php echo $os; ?></td><td><?php echo round($os/0.4,2); ?></td>
	</tr>
	</tr>
</table></center>
</div>




<br><br><br><br><br>
<script>
        window.onscroll = function() {myFunction()};
        var navbar = document.getElementById("navbar"); 
        var sticky = navbar.offsetTop;

        function myFunction()
        {
            if (window.pageYOffset >= sticky)
            {
                navbar.classList.add("sticky")
            }
            else
            {
               navbar.classList.remove("sticky");
            }
        }
    </script>
</body>
</html>