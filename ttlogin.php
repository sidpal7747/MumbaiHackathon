<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
.center {
margin-left:auto;
margin-right:auto;
margin-top:13%;
width:40%;
border:3px solid white;
border-radius:12px;
padding: 0px;
box-shadow: 10px 10px 5px black;
}
h1 {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
.head{
color:white;
width:100%;
padding-top:10px;
padding-bottom:10px;
font-size:3em;
}
#name,#pass{
margin:5px;
border-radius:5px;
border:1px solid black;
width:50%;
padding:5px;
}
#name{
margin-top:10px;
}
#submit{
width:25%;
margin:10px;
padding:10px;
border-radius:5px;
}
h1 {
cursor:pointer;
}
body {
background-image:url("blackboard.jpg");
background-repeat:no-repeat;
}
img {
cursor:pointer;
}
</style>
<script>
function startpg(){
window.location.assign("ttstart.php");
}
</script>
</head>
<body>
<a href="ttstart.php"><img src="back.gif" alt="home" height=50px width=50px/></a>&nbsp;&nbsp;&nbsp;
<a href="ttstart.php"><img src="home.jpg" alt="home" height=50px width=50px/></a>
<div class="center">
<div class="head"><center>Teacher/Admin Login</center></div>
<form method="post" action="ttlogin.php">
<center>
<input type="text" id="name" name="uname" placeholder="Enter Username"><br>
<input type="password" id="pass" name="upass" placeholder="Enter Password"><br>
<input type="submit" id="submit">
</center>
</form>
</div><br><br>
<center><h3><a href="teacherreg.php" style="color:white">SIGN UP</a></h3></center>
<?php
require("ttcon.php");
session_start();
$_SESSION["admin"] = false;
$_SESSION["teacher"] = false;
if(!empty($_POST)){
if($_POST['uname']=="admin" && $_POST['upass']=="admin"){
$_SESSION["admin"] = true;
header('Location: admin.php');
}
else if($_POST['uname']=="" || $_POST['upass']==""){
echo "<script>";
echo "alert('Insert Valid Details')";
echo "</script>";
}
else {
$username = $_POST['uname'];
$userpass = $_POST['upass'];

$res = mysqli_query($con,"select * from teacher where username='$username' AND tpassword='$userpass'");
if(mysqli_num_rows($res)>0){
$row1 =  mysqli_query($con,"select fname as f from teacher where username='$username' AND tpassword='$userpass'");
$row2 = mysqli_query($con,"select lname as l from teacher where username='$username' AND tpassword='$userpass'");
$fname = mysqli_fetch_assoc($row1);
$lname = mysqli_fetch_assoc($row2);
$_SESSION["fname"] = $fname['f'];
$_SESSION["lname"] = $lname['l'];
$_SESSION["user"] = $username;
$_SESSION["pass"] = $userpass;
$_SESSION["teacher"] = true;
header('Location: teacher.php');
}
else {
echo "<script>";
echo "alert('Username OR Password is Invalid')";
echo "</script>";
}
}
}
?>
</body>
</html>
