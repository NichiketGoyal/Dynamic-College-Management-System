
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-size: 28px;
}

.header {
  background-color: rgb(19,35,47);
  color: #179b77;
  padding: 100px;
  text-align: center;
  font-family: verdana;
}

#navbar {
  overflow: hidden;
  background-color: #179b77;
}

#navbar a {
  float: left;
  display: block;
  color: rgb(19,35,47);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: verdana;
}

#navbar a:hover {
  background-color: rgb(19,35,47);
  color: #179b77;
  transition: .4s;
}		

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body bgcolor="#c9e2c3">



<div id="navbar">
  <a href="admins.php">Home</a>
  <a href="profile_admins.php">Profile</a>
  <a href="emp_detail.php">Employee Detail</a>
  <a href="student_admins.php">Student Detail</a>
  <a href="fine_admins.php">Add Fine</a>
  <a href="change_pass_admins.php">Change Password</a>
  <a href="open.php">Logout</a>
  <a href="upload_admins.php" style="float: right">Upload</a>
</div>
<br><br>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>

