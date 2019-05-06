<!DOCTYPE html>
<html>
<head>
  <title>CollegeInfo | Register</title>
  <link rel="stylesheet" type="text/css" href="a.css">
  <style type="text/css">
    .head{
      font-size: 30px;
      font-family:verdana;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
  </style>
</head>
<body id="bkg">
  <br>
<div class="i_box1">
    <img src="pics/box1.jpg" height="800px" width="600px">
</div>
<div class="text2">
<form action="reg_exec.php" method="post" class="text2">
    <center><div class="head"><span class="border"> <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  </span></div>
          <br><br><br>
</center>
  <label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" pattern="[A-Za-z].{3,}" required>
    <br><br>
    <label><b>E-mail ID</b></label>
    <input type="email" placeholder="Enter e-mail ID"  name="email" required>
    <br><br>
    <label><b>Unique ID</b></label>
    <input type="text" placeholder="Enter Unique ID" pattern=".{10}" name="uid" id="uid" required>
    <br><br>
    <label><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact number"  name="phno" pattern="[0-9]{10}" required>
    <br><br>
    <label><b>New Password</b></label>
    <input type="password" placeholder="Enter New Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
    <br><br>
    
    <label><b>Date Of Birth</b></label>&nbsp;
    <input type="Date" name="dob" required><br><br>
    <label><b>Department</b></label>&nbsp;
        <select name="dept" id="a">
            <option value="0">--Select Department</option>
            <option value="1">Teaching</option>
            <option value="2">Accounts</option>
            <option  value="3">Student</option>
        </select>
        <br><br>
    <button type="submit" onclick="a()">Register</button>
</form> 
<br><br><br><br><br>
</div>
<script type="text/javascript">
  function a() {
    var x=document.getElementById('uid').value;
    var y=document.getElementById('a').value;
    if(y=="1") {
       if(if (x.match(/^(tc).*$/))) {
})
else
{
  alert("Incorrect ID");
}
    }
else if(y=="2") {
       if(if (x.match(/^(ac).*$/))) {
})
else
{
  alert("Incorrect ID");
}
    }

  }
</script>
</body>
</html>