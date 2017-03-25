<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SE A Time Table</title>
<script src="mscripsa.js"></script>
<script>
function assign(){
document.getElementById('teach').style.visibility = "visible";
}
</script>
<style>
#sub {
border:2px solid white;
width:20%;
border-radius:20px;
text-align:center;
margin-left:auto;
margin-right:auto;
}
</style>
</head>
<body text=white bgcolor="#61815C">
<a href="admin.php"><img src="back.gif" alt="home" height=50px width=50px/></a>&nbsp;&nbsp;&nbsp;
<a href="ttstart.php"><img src="home.jpg" alt="home" height=50px width=50px/></a>
<div id="sub">
<strong>Add Subjects & Practicals:</strong><br><br>
<input type="number" id="sno" placeholder="Enter no. of Subjects"><br><br>
<input type="button" value="Done" onclick="mysub()" id="sbtn">&nbsp;&nbsp;
<input type="button" value="I already added subjects" onclick="assign()"><br><br>
</div>
<div id="teach" style="visibility:hidden">
<?php include 'assignteachersa.php';?>
<?php include 'assignteachersa2.php';?>
<?php include 'assignteachersa3.php';?>
</div>
</body>
</html>