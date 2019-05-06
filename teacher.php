<?php
	require_once('auth.php');

?>
<?php
$db=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM $table WHERE uid='$uid'";
$res=mysqli_query($db,$query);
$row=mysqli_fetch_array($res);
$name = $row['name'];
$email=$row['email'];
$dob=$row['dob'];
$phno=$row['phone'];
$quer="SELECT * FROM addr WHERE uid='$uid'";
$re=mysqli_query($db,$quer);
$ro=mysqli_fetch_array($re);
$address=$ro['address'];
$que="SELECT * FROM parents WHERE uid='$uid'";
$resu=mysqli_query($db,$que);
$rows=mysqli_fetch_array($resu);
$fn=$rows['f_name'];
$mn=$rows['m_name'];
$qry3=mysqli_query($db,"SELECT * FROM pics WHERE uid='$uid'");
$row3=mysqli_fetch_array($qry3);
$iname=$row3['iname'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>CollegeInfo | Home</title>
  <link rel="stylesheet" type="text/css" href="a.css">
</head>
<body id="bkg">
<div class="i_box2">
    <img src="pics/box1.jpg" height="700px" width="1030px">
</div>
<div id="navbar">
    <a href="teacher.php"class="active">Profile</a>
    <a href="attendance_teach.php">Upload Attendance</a>
    <a href="stu_detail.php">Student Detail</a>
    <a href="upload_grade.php">Update result</a>
    
    <a href="change_pass_teach.php">Change Password</a>   
    <a href="upload_teach.php">Upload Notice</a>
    <a href="open.php" style="float: right;">Logout</a>
</div>
<div class="text1">
    <br><h1>Complete Info:</h1>
  <table  width="845px">
      <tr>
          <td height="200px" width="300px">
<?php echo "<img src='".$iname."' height=180px width=180px style='float:left;margin-right:-100px;margin-left:80px; border:2px solid black;margin-top:10px;'>"; ?></td>

         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>
              <br><br><b>Name:</b>&nbsp;&nbsp;<?php echo $name; ?><br> <br>
                <b>College ID:</b> <?php echo $uid; ?><br><br>
                <b>Date of Birth</b> <?php echo $dob; ?><br><br>
                <b>Email:</b><?php echo $email; ?> <br><br>
                <b>Father's Name:</b> <?php echo $fn; ?><br><br>
                <b>Mother's Name:</b> <?php echo $mn; ?><br><br>
                <b>Contact Number:</b> <?php echo $phno;?><br><br>
                <b>Address:</b> <?php echo $address; ?><br><br>
          
          </td>       
      </tr>
      
      
      
  </table>
</div>
<br><br><br><br><br>

</body>
</html>