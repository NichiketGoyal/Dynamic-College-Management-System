<!DOCTYPE html>
<html>
<head>
	<title>Register With Us</title>
	<style type="text/css">
		body, html {
    height: 100%;
    margin: 0;
}
.head {
  position: absolute;
  left: 0;
  top: 3%;
  width: 100%;
  text-align: center;
  color: #000;
  font-size: 65px;
}
.head span.border {
  background-color: rgba(0,0,0,0.8);
  color: #fff;
  padding: 18px;
  font-size: 65px;
  letter-spacing: 10px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;

}

.bg {
    /* The image used */
    background-image: url("hog2.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.modal{
	position: absolute;
	left:40px;
	top:20%;
  margin-left: 33%;
}
input[type=text], input[type=password],input[type=date],input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 20px;
    background-color: rgba(0,0,0,0.8);
    color: white;
}
button {
	 background-color: #229954;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 23px;
    font-family: verdana;
    border-radius: 50px;
}
label {color:white;
text-transform: uppercase;
 font: 14px "Lato", verdana;}
	</style>
  <script>
  function validateForm()
  {
    var a=document.forms["reg"]["uid"].value;
    var b=document.forms["reg"]["name"].value;
    var c=document.forms["reg"]["email"].value;
    var d=document.forms["reg"]["dob"].value;
    var e=document.forms["reg"]["password"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("College ID must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Email must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("Date of Birth must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("Password must be filled out");
      return false;
    }
  }
  </script>
</head>
<body>
<div class="bg"></div>
<div class="head"><span class="border"> <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?></span></div>
<div class="modal" align="center">
	<form action="reg_stud.php" method="post">
	<table>
  <tr><td><label>College ID</label></td><td><input type="text" name="uid" required></td></tr>
	<tr><td><label>Name</label></td><td><input type="text" name="name" required></td></tr>
	<tr><td><label>Email</label></td><td><input type="email" name="email"></td></tr><tr><td><label>date of birth</label></td><td><input type="date" name="dob" required></td></tr>
	<tr><td><label>Password</label></td><td><input type="password" name="password" required></td></tr>
      

	</table>
	<br>
<button type="submit" name="register">Register</button>

	</form>
</div>
</body>
</html>
