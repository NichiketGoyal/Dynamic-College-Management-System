<?php
session_start();

unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_TABLE']); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>CollegeInfo | Login</title>
	<link rel="stylesheet" type="text/css" href="a.css">
</head>
<body id="bkg">
	<br><br><br>
<div class="i_box">
   	<img src="pics/box1.jpg" height="475px" width="550px" >
</div>
<div class="text">
	<form action="login_exec.php " method="post">
        <label><b>College ID</b></label>
        <input type="text" placeholder="Enter College ID" name="uid" required><br><br>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br><br>
        <label><b>Department</b></label>&nbsp;
        <select name="dept">
        	<option value="0">--Select A Department--</option>
        	<option value="1">Teaching</option>
        	<option value="2">Accounts</option>
        	<option value="3">Student</option>
        </select>
        <br><br>
        <label>
        <input type="checkbox" checked="checked"> Remember me
        </label><br><br>
        <button type="submit">Login</button>
        <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
    </form><br>New to University?
    <a href="register.php" style="text-decoration: none;"><u><label>Register Now!<br></label></u></a>
</div>
</body>
</html>