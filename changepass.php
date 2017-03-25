<html>
<head>
<title>Change Password</title>
<style>
#cp{
width:50%;
margin-top:10%;
border:2px solid white;
border-radius:20px;
margin-left:auto;
margin-right:auto;
box-shadow: 10px 10px 5px black;
}
</style>
</head>
<body text=white bgcolor="#61815C">
<a href="teacher.php"><img src="back.gif" alt="home" height=50px width=50px/></a>&nbsp;&nbsp;&nbsp;
<a href="ttstart.php"><img src="home.jpg" alt="home" height=50px width=50px/></a>
<div id="cp">
<h2 align="center">Change Password</h2>
<form method="post" action="changepass.php">
<center><table>
<tr>
<td>Enter Old Password:</td>
<td><input type="password" name="opass"></td>
</tr>
<tr>
<td>Enter New Password:</td>
<td><input type="password" name="npass"></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="cpass"></td>
</tr>
</table></center><br>
<center><input type="submit" value="Submit"></center>
</form>
</div>
<?php
require("ttcon.php");
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!empty($_POST)){
$old = $_POST['opass'];
$new = $_POST['npass'];
$conf = $_POST['cpass'];
if($old!="" || $new!="" || $conf!=""){
$ruser = $_SESSION["user"];
$rpass = $_SESSION["pass"];
if($old==$rpass && $new==$conf){
$v = mysqli_query($con,"update teacher set tpassword='$new' where username='$ruser'");
if ($v)
echo "<script>";
echo "alert('Password Updated');
	  window.location.assign('teacher.php');";
echo "</script>";
}else{
echo "<script>";
echo "alert('Invalid Password')";
echo "</script>";
}
}else {
echo "<script>";
echo "alert('Enter Password')";
echo "</script>";
}
}
?>
</body>
</html>