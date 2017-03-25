<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!$_SESSION['admin']){
 header("location: ttlogin.php");
	die;
   }
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<style>
span{
cursor:pointer;
display:block;
width:40%;
height:60%;	
}
a{
text-decoration:none;
color:#000;
}
#con {
margin-left:auto;
margin-right:auto;
margin-top:5%;
border:2px solid white;
width:40%; 
border-radius:25px;
box-shadow: 10px 10px 5px black;
}
</style>
<script src="setscript.js"></script>
</head>
<body text=white bgcolor="#61815C">
<a href="ttlogin.php"><img src="back.gif" alt="home" height=50px width=50px/></a>&nbsp;&nbsp;&nbsp;
<a href="ttstart.php"><img src="home.jpg" alt="home" height=50px width=50px/></a>
<div id=con>
<h2 align="center">Select Operation to perform on Time Table.</h2>
<div id="setting" align="center">
<table  id="tbl">
<tr>
<td>Select Year: </td>
<td>
<select id="year">
<option value="-">-choose-</option>
<option value="se">S.E.</option>
<option value="te">T.E.</option>
</select>
</td>
</tr>
<tr>
<td>Select Class: </td>
<td>
<select id="cls">
<option value="-">-choose-</option>
<option value="a">A</option>
<option value="b">B</option>
</select>
</td>
</tr>
</table><br><br>
</div>

<div id="main" align="center">
<span onclick="assign()">Add Subjects and Assign Teachers</span><br>
<span onclick="myfunc()">Create Time Table</span><br>
<!--<span onclick="modfy()">Modify Time Table</span><br>-->
<!--<span onclick="display()">Display Time Table</span><br>-->
<span><a href="tchrdb.php"><font color=white>Show Teacher's Database</font></a></span><br>
<span name="logout"><a href="ttlogin.php"><font color=white>Logout</font></a></span><br><br>
</div>
</div>
</body>
</html>