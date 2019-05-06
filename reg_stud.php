<?php
session_start();
 
include('conn.php');

$uid=$_POST['uid'];
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['dob'];
$password=$_POST['password'];

mysqli_query($con, "INSERT INTO stu(uid, name, email, dob, pswd)VALUES('$uid', '$name', '$email', '$date', '$password')");
mysqli_query($con,"INSERT INTO parents(uid,f_name,f_number,m_name,m_number)VALUES('$uid',' ',' ',' ',' ')");
mysqli_query($con,"INSERT INTO attendence(uid,oops,ds,dbms,os,cst)VALUES('$uid',0,0,0,0,0)");
mysqli_query($con,"INSERT INTO fee(uid,paid)VALUES('$uid',60000)");
mysqli_query($con,"INSERT INTO result(uid,cgpa)VALUES('$uid',0)");
mysqli_query($con,"INSERT INTO marks(uid,oops,ds,dbms,os,cst)VALUES('$uid',0,0,0,0,0)");

header("location: add_stu.php?remarks=success");
 
mysqli_close($con);
?>