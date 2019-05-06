<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('conn.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		echo "str: ".$str;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$uid = $_POST['uid'];
	$password = $_POST['password'];
	$dept=$_POST['dept'];
 
	//Input Validations
	if($uid == '') {
		$errmsg_arr[] = 'Unique ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: open.php");
		exit();
	}
	if($dept==0) {
		$errmsg_arr[] = 'Please select an appropriate department';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: open.php");
				exit();
			}
	}
	switch($dept) {
	case 1:
	$tblname='teacher';
	break;
	case 2:
	$tblname='acc';
	break;
	case 3:
	$tblname='student';
	break;
}
 
	//Create query
	$qry="SELECT * FROM $tblname WHERE uid='$uid' AND password='$password'";
	$result=mysqli_query($con, $qry) or die("Error quering the database");
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['uid'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_TABLE'] = $tblname;
			session_write_close();
			if($dept==1) {
				header("location: teacher.php");
			}else if($dept==2){
				header("location: accounts.php");
			} else if($dept==3) {
				header("location: home.php");
			}
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: open.php");
				exit();
			}
		}
	}else {
		header("location: open.php");
		echo "<script>window.alert('Please Try Again')</script>";
	}
?>