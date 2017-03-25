<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Time Table</title>
<style>
#start {
margin-left:auto;
margin-right:auto;
margin-top:20%;
width:40%;
border:2px solid white;
border-radius:20px;
box-shadow: 10px 10px 5px black;
}
body {
background-image:url("blackboard.jpg");
background-repeat:no-repeat;

}
#h {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
#b1,#b2{
border-radius:5px;
}
</style>
<script>
function student(){
window.location.assign("student.php");
}
function teacher(){
window.location.assign("ttlogin.php");
}
</script>
</head>
<body>
<div id="start">
<h1 align="center" id="h"><font font color=white>Time Table Generator System</h1>
<h1 align="center">Select Your Post</font></h1>
<center><input type="button" id="b1" value="I am a Teacher/Admin" onclick="teacher()"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="b2" value="I am a Student" onclick="student()"/></ceter>
<br><br>
</div>
</body>
</html>