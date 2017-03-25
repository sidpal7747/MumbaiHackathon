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
<h3 align="center">Assign Teachers With its Respective Subjects Of A2</h3>
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
$result = mysqli_query($con,"select sname from tesubjects");

while($row = mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>";
echo "<select class='sub2'>";
echo "<option value='-'>-</option>";
mysqli_data_seek($result,0);
while($rows = mysqli_fetch_assoc($result)){
echo "<option value=".$rows['sname'].">".$rows['sname']."</option>";
}
echo "</select>";
echo "<p class='par2'></p>";
echo "</td>";
echo "<td>";
echo "<select class='prac2'>";
echo "<option value='-'>-</option>";
mysqli_data_seek($result,0);
while($rows = mysqli_fetch_assoc($result)){
echo "<option value=".$rows['sname'].">".$rows['sname']."</option>";
}
echo "</select>";
echo "<p class='parp2'></p>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
$rslt = mysqli_query($con,"select count(tid) as total from teacher");
$row1=mysqli_fetch_assoc($rslt);
$no=$row1['total'];
echo "<center><input type='button' value='Done' onclick='take2()'>&nbsp;&nbsp";
echo "<input type='button' value='Save' onclick='allocate2($no)'></center>";
?>
</body>
</html>