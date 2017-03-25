<html>
<head>
<title>Teacher</title>
<script>
function change(){
//document.getElementById("res").style.display = "none";
//document.getElementById("result").style.display = "initial";
window.location.assign("changepass.php");
}
function timetable(){
document.getElementById("result").style.display = "none";
document.getElementById("res").style.display = "inline";
}
function logout(){
window.location.assign("ttlogin.php");
}
</script>
</head>
<body text=white bgcolor="#61815C">
<a href="ttlogin.php"><img src="back.gif" alt="home" height=50px width=50px/></a>&nbsp;&nbsp;&nbsp;
<a href="ttstart.php"><img src="home.jpg" alt="home" height=50px width=50px/></a>
<h2 align="center">
<?php session_start(); 
if(!$_SESSION['teacher']){
 header("location: ttlogin.php");
	die;
   }
$fuser = $_SESSION["fname"];
$luser = $_SESSION["lname"];
echo "WELCOME ".$fuser." ".$luser;
?></h2>
<center>
<input type="button" value="Show My Time Table" onclick="timetable()">&nbsp;&nbsp;
<input type="button" value="Change Password" onclick="change()">&nbsp;&nbsp;
<input type="button" value="Logout" onclick="logout()">
</center><br><br><br>
<div id="result" style="display:none">
<?php 
include 'changepass.php';
?>
</div>
<div id="res" style="display:none">
<?php 
include 'try.php';
?>
</div>
</body>
</html>