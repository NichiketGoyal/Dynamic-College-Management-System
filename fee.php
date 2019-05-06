<?php
include ('base.php');
include('conn.php');
require_once('auth.php');
$query1=mysqli_query($con,"SELECT * FROM fee where uid='$uid'");
$row1=mysqli_fetch_array($query1);
$fes=$row1['paid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>CollegeInfo | Fee</title>
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
			position: absolute;	
		}
		
	</style>
</head>
<body id="bkg">
<div class="i_box2">
   	<img src="pics/box1.jpg" height="550px" width="1030px">
</div>

<div id="navbar">
    <a href="home.php" >Profile   </a>
    <a href="attendance.php" >Attendance</a>
    <a href="time_table.php">Time Table</a>
    <a href="fee.php" class="active">Fees</a>
    <a href="grade.php">Grade</a>
    <a href="fine.php">Fine</a>
    <a href="change_pass.php">Change Password</a>   
    <a href="downloads.php">Notices</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>

<div class="text1"><br><center>
  
<h1  align="center" style="margin-top: 30px; text-transform: uppercase;color: rgb(19,35,47);margin-left: 270px;">FEES</h1>
<table align="center" border="1" cellpadding="5" cellspacing="0" style="margin-left: 260px;">
    <tr>
        <td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">College ID</td><td style="font-weight: bold;font-family: verdana; text-transform: uppercase;">Fees Paid</td>
    <tr>
        <td style="font-weight: bold;"><?php echo $uid; ?></td><td><?php echo $fes; ?> </td>
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

