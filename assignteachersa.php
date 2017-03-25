<html>
<head>
<style>
table {
margin-left:auto;
margin-right:auto;
border: 1px solid black;
width:30%;
}
td ,th{
border: 1px solid black;
text-align:center;
}
</style>
</head>
<body>
<h3 align="center">Assign Teachers With its Respective Subjects Of A1</h3>
<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Lecture</th>
<th>Practical</th>
</tr>
<?php
require("ttcon.php");
$res = mysqli_query($con,"select fname,lname from teacher");
$result = mysqli_query($con,"select sname from sesubjects");

while($row = mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>";
echo "<select class='sub'>";
echo "<option value='-'>-</option>";
mysqli_data_seek($result,0);
while($rows = mysqli_fetch_assoc($result)){
echo "<option value=".$rows['sname'].">".$rows['sname']."</option>";
}
echo "</select>";
echo "<p class='par'></p>";
echo "</td>";
echo "<td>";
echo "<select class='prac'>";
echo "<option value='-'>-</option>";
mysqli_data_seek($result,0);
while($rows = mysqli_fetch_assoc($result)){
echo "<option value=".$rows['sname'].">".$rows['sname']."</option>";
}
echo "</select>";
echo "<p class='parp'></p>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
$rslt = mysqli_query($con,"select count(tid) as total from teacher");
$row1=mysqli_fetch_assoc($rslt);
$no=$row1['total'];
echo "<center><input type='button' value='Done' onclick='take()'>&nbsp;&nbsp";
echo "<input type='button' value='Save' onclick='allocate($no)'></center>";
?>
</body>
</html>