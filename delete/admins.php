<?php
	require_once('auth.php');

?>
<?php
$db=mysqli_connect('localhost','root','','hogwarts');
$query="SELECT * FROM $table WHERE uid='$uid'";
$res=mysqli_query($db,$query);
$row=mysqli_fetch_array($res);
$name = $row['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
  .main{
    border: solid 2px black;
    margin-bottom: 30px;
    width: 95%;
    margin-left: 30px;
    margin-right: 30px;
  }
  td{
    text-align: center;
    width: 100%;
  }
  td a{
    text-decoration: none;
    color: #033016;
    width: 100%;
  }
  td a:hover{
    background-color: rgb(19,35,47);
  color: #179b77;
  transition: .4s;
  }
	</style>
</head>
<body >
<div class="header">
  <h1>Hogwarts University</h1>
  <h3>Welcome <?php echo $name; ?></h3>
</div>
<?php
include ('base_admins.php');

?>
<table class="main">
  <tr>
    <td><a href="add_stu.php">Add Student Data</a></td>
  </tr>
  <tr>
    <td><a href="add_teach.php">Add Teacher Data</a></td>
  </tr><tr>
    <td><a href="add_emp.php">Add Employee Data</a></td>
  </tr><tr>
    <td><a href="remove_stu.php">Remove Student Data</a></td>
  </tr><tr>
    <td><a href="remove_tech.php">Remove Teacher Data</a></td>
  </tr><tr>
    <td><a href="remove_emp.php">Remove Employee Data</a></td>
  </tr>
</table>
</body>
</html>