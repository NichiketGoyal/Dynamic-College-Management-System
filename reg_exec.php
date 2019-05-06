<?php
session_start();
 
include('conn.php');

$uid=$_POST['uid'];
$name=$_POST['name'];
$email=$_POST['email'];
$cont=$_POST['phno'];
$date=$_POST['dob'];
$password=$_POST['password'];
$dept=$_POST['dept'];
switch($dept) {
	case 0:
	echo "<script>alert('Please Select an appropriate department')</script>";
	break;
	case 1:
	$tblname='teacher';
	mysqli_query($con,"INSERT INTO staff_att(uid,days)VALUES('$uid',0)");
	break;
	case 2:
	$tblname='acc';
	mysqli_query($con,"INSERT INTO staff_att(uid,days)VALUES('$uid',0)");
	break;
	case 3:
	$tblname='student';
	mysqli_query($con,"INSERT INTO attendence(uid,oops,os,dbms,cst,cn)VALUES('$uid',0,0,0,0,0)");
	mysqli_query($con,"INSERT INTO fee(uid,paid)VALUES('$uid',0)");
	mysqli_query($con,"INSERT INTO fine(uid,fine)VALUES('$uid',0)");
	break;
}

mysqli_query($con, "INSERT INTO $tblname(uid, name, email, dob, password, phone)VALUES('$uid', '$name', '$email', '$date', '$password','$cont')");
mysqli_query($con,"INSERT INTO addr(uid,address,landmark)VALUES('$uid',' ',' ')");
mysqli_query($con,"INSERT INTO parents(uid,f_name,f_number,m_name,m_number)VALUES('$uid',' ',' ',' ',' ')");
header("location: register.php?remarks=success");
 
mysqli_close($con);
?>