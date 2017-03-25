<html>
<head>
<title>Teacher's Databse</title>
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
function remove(s,n){
	if(s.checked){
	var xmlhttp;
var str = "rm="+n;
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
    //document.getElementById("result").innerHTML = xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","rmentry.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(str);
window.location.assign("tchrdb.php");
}
}
</script>
</head>
<body text=white bgcolor="#61815C">
<a href="admin.php"><img src="back.gif" alt="home" height=50px width=50px/></a>&nbsp;&nbsp;&nbsp;
<a href="ttstart.php"><img src="home.jpg" alt="home" height=50px width=50px/></a>
<h1 align="center">Teacher's Database</h1>
<?php
require("ttcon.php");
$sql="SELECT * FROM teacher";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>SR. NO.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Password</th>
<th>Subject 1</th>
<th>Subject 2</th>
<th>Subject 3</th>
<th>Practical 1</th>
<th>Practical 2</th>
<th>Delete</th>
</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>".$row['tid']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['tpassword']."</td>";
echo "<td>".$row['subject_1']."</td>";
echo "<td>".$row['subject_2']."</td>";
echo "<td>".$row['subject_3']."</td>";
echo "<td>".$row['prac_1']."</td>";
echo "<td>".$row['prac_2']."</td>";
echo "<td><input type='checkbox' id='".$row['tid']."' onclick='remove(this,this.id)'></td>";
echo "</tr>";
}
echo "</table><br><br>";
mysqli_close($con);
?>
</body>
</html>