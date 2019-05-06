<?php
session_start();
 
include('conn.php');

$uid=$_POST['uid'];
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['dob'];
$password=$_POST['password'];
$dep=$_POST['dept'];
mysqli_query($con, "INSERT INTO cs(uid, name, email, dob, pswd,dept)VALUES('$uid', '$name', '$email', '$date', '$password','$dep')");
mysqli_query($con,"INSERT INTO parents(uid,f_name,f_number,m_name,m_number)VALUES('$uid',' ',' ',' ',' ')");
mysqli_query($con,"INSERT INTO staff_attend(uid,days)VALUES('$uid',0)");
header("location: add_emp.php?remarks=success");
 
mysqli_close($con);
?>