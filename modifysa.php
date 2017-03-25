<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Time Table</title>
<style>
table {
margin-left:auto;
margin-right:auto;
border: 1px solid black;
width:70%;
}
td ,th{
border: 1px solid black;
text-align:center;
}
</style>
<script>
var c=-1;
function action(){
//alert("hello");
var txt = "";
var sel = document.getElementsByClassName("sub");
//alert(sel[c].value);
td[c].innerHTML = sel[c].value;
}
function para(n,sub){
//n.style.background = "red";
if(sub!="BREAK"){
//alert(sub);
var xmlhttp;
var str = "";
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    n.innerHTML = xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","fetchsubjecs.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(str);
c++;
}
}
</script>
</head>
<body>
<h1 align="center">SE-A(A1) TIME TABLE</h1>
<center><input type="button" onclick="action()" value="Save"/></center>
<?php
require("ttcon.php");
$res = mysqli_query($con,"select * from ttsea1");
echo "<table>
<tr>
<th>Time</th>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
</tr>";

while($row = mysqli_fetch_array($res)){

echo "<tr>";
echo "<td>".$row['timing']."</td>";
echo "<td>";
include "manage.php";
echo "<p class='para'>".$row['monday']."</p></td>";
echo "<td>";
include "manage.php";
echo "<p class='para'>".$row['tuesday']."</p></td>";
echo "<td>";
include "manage.php";
echo "<p class='para'>".$row['wednesday']."</p></td>";
echo "<td>";
include "manage.php";
echo "<p class='para'>".$row['thursday']."</p></td>";
echo "<td>";
include "manage.php";
echo "<p class='para'>".$row['friday']."</p></td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>