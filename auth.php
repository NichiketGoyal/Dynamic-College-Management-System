<?php
	
	session_start();
	
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: open.php");
		exit();
	} else { 
		$uid = $_SESSION['SESS_MEMBER_ID'];
		$table = $_SESSION['SESS_TABLE'];
	}
?>