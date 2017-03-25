<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student</title>
<style>
div {
margin-left:auto;
margin-right:auto;
border:2px solid white;
border-radius:20px;
width:30%;
margin-top:20%;
text-align:center;
box-shadow: 10px 10px 5px black;
}
body {
background-image:url("blackboard.jpg");
background-repeat:no-repeat;
}
</style>
<script>
function done(){
var yr = document.getElementById('yr');
var cls = document.getElementById('dv');
if(yr.value=="se" && cls.value=="a"){
window.location.assign("displaysa.php");
}
else if(yr.value=="se" && cls.value=="b"){
window.location.assign("displaysb.php");
}
else if(yr.value=="te" && cls.value=="a"){
window.location.assign("displayta.php");
}
else if(yr.value=="te" && cls.value=="b"){
window.location.assign("displaytb.php");
}
}
</script>
</head>
<body text=white>
<div id="stud">
<h2>Select Year and Class:</h2>
<select id="yr">
<option value="choose">-year-</option>
<option value="se">S.E.</option>
<option value="te">T.E.</option>
</select><br><br>
<select id="dv">
<option value="choose">-class-</option>
<option value="a">A</option>
<option value="b">B</option>
</select><br><br>
<input type="button" value="Done" onclick="done()">
</div>
</body>
</html>