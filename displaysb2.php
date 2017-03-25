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
</head>
<body>
<h1 align="center">SE-B(B2) TIME TABLE</h1>
<?php
require("ttcon.php");
$res = mysqli_query($con,"select * from ttseb2");
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
echo "<td>".$row['monday']."</td>";
echo "<td>".$row['tuesday']."</td>";
echo "<td>".$row['wednesday']."</td>";
echo "<td>".$row['thursday']."</td>";
echo "<td>".$row['friday']."</td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>