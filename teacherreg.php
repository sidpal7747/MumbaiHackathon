<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teacher Registration</title>
</head>
<style>
div {
margin-top:8%;
margin-left:auto;
margin-right:auto;
border:2px solid white;
border-radius:25px;
width:50%;
background:#61815C;
box-shadow: 10px 10px 5px black;
}
body {
background-image:url("blackboard.jpg");
background-repeat:no-repeat;

}
</style>
<body text=white >
<a href="ttlogin.php"><img src="back.gif" alt="home" height=50px width=50px/></a>&nbsp;&nbsp;&nbsp;
<a href="ttstart.php"><img src="home.jpg" alt="home" height=50px width=50px/></a>
<div>
<h1 align="center">Registration Form:</h1>
<form action="teacherreg.php" method="post" enctype="multipart/form-data">
<center>
<table>
<tr>
<td>Enter Secret code:</td>
<td><input type="text" name="scode" placeholder="Enter Secret Code"/></td>
<td><span>Note: </span>Enter Secret Code given by admin</td>
</tr>
<tr>
<td>Enter First Name:</td>
<td><input type="text" name="fname" placeholder="Enter First Name"/></td>
</tr>
<tr>
<td>Enter Last Name:</td>
<td><input type="text" name="lname" placeholder="Enter Last Name"/></td>
</tr>
<tr>
<td>Enter Subject 1:</td>
<td><input type="text" name="sub1" placeholder="Enter Subject Name"/></td>
<td><span>Note: </span>Enter subject 1 compulsory</td>
</tr>
<tr>
<td>Enter Subject 2:</td>
<td><input type="text" name="sub2" placeholder="Enter Subject Name"/></td>
</tr>
<tr>
<td>Enter Subject 3:</td>
<td><input type="text" name="sub3" placeholder="Enter Subject Name"/></td>
</tr>
<tr>
<td>Enter Practical 1:</td>
<td><input type="text" name="prac1" placeholder="Enter Practical Name"/></td>
</tr>
<tr>
<td>Enter Practical 2:</td>
<td><input type="text" name="prac2" placeholder="Enter Practical Name"/></td>
</tr>
<tr>
<td>Enter Username:</td>
<td><input type="text" name="uname" placeholder="Enter Username"/></td>
<td><span>Note: </span>Username must be unique and easily identified.</td>
</tr>
<tr>
<td>Enter Password:</td>
<td><input type="password" name="upass" placeholder="Enter Password"/></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="cpass" placeholder="Enter Password again"/></td>
</tr>
<tr>
<td><input type="submit" name="save" value="Submit"></td>
</tr>
</table></center>
</form>
</div><br>
<?php
require("ttcon.php");
if(!empty($_POST)){
$scode = $_POST['scode'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sname1 = $_POST['sub1'];
$sname2 = $_POST['sub2'];
$sname3 = $_POST['sub3'];
$prac1 = $_POST['prac1'];
$prac2 = $_POST['prac2'];
$uname = $_POST['uname'];
$upass = $_POST['upass'];
$cpass = $_POST['cpass'];
if($scode=="" || $fname=="" || $lname=="" || $sname1=="" || $uname=="" || $upass=="" || $cpass==""){
echo "<script>";
echo "alert('Insert Details')";
echo "</script>";
}
else if($upass==$cpass && $scode=="kccoemsre"){
mysqli_query($con,"insert into teacher(fname,lname,username,tpassword,subject_1,subject_2,subject_3,prac_1,prac_2) values('{$fname}','{$lname}','{$uname}','{$upass}','{$sname1}','{$sname2}','{$sname3}','{$prac1}','{$prac2}')");

echo "<script>";
echo "alert('Registered Successfully');
	  window.location.assign('ttlogin.php');";
echo "</script>";
//header('Location: ttlogin.php');
}
else{ 
echo "<script>";
echo "alert('Rewrite Password OR Secret Code')";
echo "</script>";
}
mysqli_close($con);
}
?>
</body>
</html>