<html>
<head>
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
h2 {
text-align:center;
}
</style>
</head>
<body>
<?php 
$fname = $_SESSION["fname"];
$lname = $_SESSION["lname"];
require("ttcon.php");

//SE-A
$result = mysqli_query($con,"select subjects as s from allocteachersa1 where firstname='$fname' AND lastname='$lname'");
$resultp1 = mysqli_query($con,"select practical as p1 from allocteachersa1 where firstname='$fname' AND lastname='$lname'");
$resultp2 = mysqli_query($con,"select practical as p2 from allocteachersa2 where firstname='$fname' AND lastname='$lname'");
$resultp3 = mysqli_query($con,"select practical as p3 from allocteachersa3 where firstname='$fname' AND lastname='$lname'");

$getsub = mysqli_fetch_assoc($result);
if(strpos($getsub['s'],'-')!==false){
$getsub = "";
}
else{
$getsub = $getsub['s'];
}
$getprac1 = mysqli_fetch_assoc($resultp1);
if(strpos($getprac1['p1'],'-')!==false){
$getprac1 = "";
}
else{
$getprac1 = $getprac1['p1'];
}
$getprac2 = mysqli_fetch_assoc($resultp2);
if(strpos($getprac2['p2'],'-')!==false){
$getprac2 = "";
}
else{
$getprac2 = $getprac2['p2'];
}
$getprac3 = mysqli_fetch_assoc($resultp3);
if(strpos($getprac3['p3'],'-')!==false){
$getprac3 = "";
}
else{
$getprac3 = $getprac3['p3'];
}
echo "<h2>SE-A</h2>";
echo "<table>
<tr>
<th>Lecture</th>
<th>Practical</th>
</tr>";
echo "<tr>";
$res = mysqli_query($con,"select * from ttsea1 where monday='$getsub'");
echo "<td><strong>Monday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where tuesday='$getsub'");
echo "<strong>Tuesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where wednesday='$getsub'");
echo "<strong>Wednesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where thursday='$getsub'");
echo "<strong>Thursday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where friday='$getsub'");
echo "<strong>Friday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['friday']." ".$row['timing']."<br>";
}
echo "</td>";

$res = mysqli_query($con,"select * from ttsea1 where monday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where tuesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where wednesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where thursday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea1 where friday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

$res = mysqli_query($con,"select * from ttsea2 where monday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea2 where tuesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea2 where wednesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea2 where thursday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea2 where friday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}
$res = mysqli_query($con,"select * from ttsea3 where monday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea3 where tuesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea3 where wednesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea3 where thursday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttsea3 where friday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

echo "</tr>";
echo "</table>";


//SE-B
$result = mysqli_query($con,"select subjects as s from allocteachersb1 where firstname='$fname' AND lastname='$lname'");
$resultp1 = mysqli_query($con,"select practical as p1 from allocteachersb1 where firstname='$fname' AND lastname='$lname'");
$resultp2 = mysqli_query($con,"select practical as p2 from allocteachersb2 where firstname='$fname' AND lastname='$lname'");
$resultp3 = mysqli_query($con,"select practical as p3 from allocteachersb3 where firstname='$fname' AND lastname='$lname'");

$getsub = mysqli_fetch_assoc($result);
if(strpos($getsub['s'],'-')!==false){
$getsub = "";
}
else{
$getsub = $getsub['s'];
}
$getprac1 = mysqli_fetch_assoc($resultp1);
if(strpos($getprac1['p1'],'-')!==false){
$getprac1 = "";
}
else{
$getprac1 = $getprac1['p1'];
}
$getprac2 = mysqli_fetch_assoc($resultp2);
if(strpos($getprac2['p2'],'-')!==false){
$getprac2 = "";
}
else{
$getprac2 = $getprac2['p2'];
}
$getprac3 = mysqli_fetch_assoc($resultp3);
if(strpos($getprac3['p3'],'-')!==false){
$getprac3 = "";
}
else{
$getprac3 = $getprac3['p3'];
}
echo "<h2>SE-B</h2>";
echo "<table>
<tr>
<th>Lecture</th>
<th>Practical</th>
</tr>";
echo "<tr>";
$res = mysqli_query($con,"select * from ttseb1 where monday='$getsub'");
echo "<td><strong>Monday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where tuesday='$getsub'");
echo "<strong>Tuesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where wednesday='$getsub'");
echo "<strong>Wednesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where thursday='$getsub'");
echo "<strong>Thursday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where friday='$getsub'");
echo "<strong>Friday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['friday']." ".$row['timing']."</td>";
}


$res = mysqli_query($con,"select * from ttseb1 where monday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where tuesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where wednesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where thursday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb1 where friday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

$res = mysqli_query($con,"select * from ttseb2 where monday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb2 where tuesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb2 where wednesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb2 where thursday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb2 where friday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}
$res = mysqli_query($con,"select * from ttseb3 where monday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb3 where tuesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb3 where wednesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb3 where thursday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttseb3 where friday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

echo "</tr>";
echo "</table>";


//TE-A
$result = mysqli_query($con,"select subjects as s from allocteacherta1 where firstname='$fname' AND lastname='$lname'");
$resultp1 = mysqli_query($con,"select practical as p1 from allocteacherta1 where firstname='$fname' AND lastname='$lname'");
$resultp2 = mysqli_query($con,"select practical as p2 from allocteacherta2 where firstname='$fname' AND lastname='$lname'");
$resultp3 = mysqli_query($con,"select practical as p3 from allocteacherta3 where firstname='$fname' AND lastname='$lname'");

$getsub = mysqli_fetch_assoc($result);
if(strpos($getsub['s'],'-')!==false){
$getsub = "";
}
else{
$getsub = $getsub['s'];
}
$getprac1 = mysqli_fetch_assoc($resultp1);
if(strpos($getprac1['p1'],'-')!==false){
$getprac1 = "";
}
else{
$getprac1 = $getprac1['p1'];
}
$getprac2 = mysqli_fetch_assoc($resultp2);
if(strpos($getprac2['p2'],'-')!==false){
$getprac2 = "";
}
else{
$getprac2 = $getprac2['p2'];
}
$getprac3 = mysqli_fetch_assoc($resultp3);
if(strpos($getprac3['p3'],'-')!==false){
$getprac3 = "";
}
else{
$getprac3 = $getprac3['p3'];
}
echo "<h2>TE-A</h2>";
echo "<table>
<tr>
<th>Lecture</th>
<th>Practical</th>
</tr>";
echo "<tr>";
$res = mysqli_query($con,"select * from tttea1 where monday='$getsub'");
echo "<td><strong>Monday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where tuesday='$getsub'");
echo "<strong>Tuesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where wednesday='$getsub'");
echo "<strong>Wednesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where thursday='$getsub'");
echo "<strong>Thursday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where friday='$getsub'");
echo "<strong>Friday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['friday']." ".$row['timing']."</td>";
}


$res = mysqli_query($con,"select * from tttea1 where monday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where tuesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where wednesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where thursday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea1 where friday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A1</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

$res = mysqli_query($con,"select * from tttea2 where monday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea2 where tuesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea2 where wednesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea2 where thursday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea2 where friday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A2</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}
$res = mysqli_query($con,"select * from tttea3 where monday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea3 where tuesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea3 where wednesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea3 where thursday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from tttea3 where friday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>A3</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

echo "</tr>";
echo "</table>";

//TE-B
$result = mysqli_query($con,"select subjects as s from allocteachertb1 where firstname='$fname' AND lastname='$lname'");
$resultp1 = mysqli_query($con,"select practical as p1 from allocteachertb1 where firstname='$fname' AND lastname='$lname'");
$resultp2 = mysqli_query($con,"select practical as p2 from allocteachertb2 where firstname='$fname' AND lastname='$lname'");
$resultp3 = mysqli_query($con,"select practical as p3 from allocteachertb3 where firstname='$fname' AND lastname='$lname'");

$getsub = mysqli_fetch_assoc($result);
if(strpos($getsub['s'],'-')!==false){
$getsub = "";
}
else{
$getsub = $getsub['s'];
}
$getprac1 = mysqli_fetch_assoc($resultp1);
if(strpos($getprac1['p1'],'-')!==false){
$getprac1 = "";
}
else{
$getprac1 = $getprac1['p1'];
}
$getprac2 = mysqli_fetch_assoc($resultp2);
if(strpos($getprac2['p2'],'-')!==false){
$getprac2 = "";
}
else{
$getprac2 = $getprac2['p2'];
}
$getprac3 = mysqli_fetch_assoc($resultp3);
if(strpos($getprac3['p3'],'-')!==false){
$getprac3 = "";
}
else{
$getprac3 = $getprac3['p3'];
}
echo "<h2>TE-B</h2>";
echo "<table>
<tr>
<th>Lecture</th>
<th>Practical</th>
</tr>";
echo "<tr>";
$res = mysqli_query($con,"select * from ttteb where monday='$getsub'");
echo "<td><strong>Monday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where tuesday='$getsub'");
echo "<strong>Tuesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where wednesday='$getsub'");
echo "<strong>Wednesday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where thursday='$getsub'");
echo "<strong>Thursday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where friday='$getsub'");
echo "<strong>Friday</strong>"."<br>";
while($row=mysqli_fetch_assoc($res)){
echo $row['friday']." ".$row['timing']."</td>";
}


$res = mysqli_query($con,"select * from ttteb where monday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where tuesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where wednesday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where thursday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb where friday='$getprac1'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B1</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

$res = mysqli_query($con,"select * from ttteb2 where monday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb2 where tuesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb2 where wednesday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb2 where thursday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb2 where friday='$getprac2'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B2</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}

$res = mysqli_query($con,"select * from ttteb3 where monday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Monday</strong>"."<br>";
echo $row['monday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb3 where tuesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Tuesday</strong>"."<br>";
echo $row['tuesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb3 where wednesday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Wednesday</strong>"."<br>";
echo $row['wednesday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb3 where thursday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Thursday</strong>"."<br>";
echo $row['thursday']." ".$row['timing']."<br><br>";
}
$res = mysqli_query($con,"select * from ttteb3 where friday='$getprac3'");
while($row=mysqli_fetch_assoc($res)){
echo "<td><strong>B3</strong><br>";
echo "<strong>Friday</strong>"."<br>";
echo $row['friday']." ".$row['timing']."<br><br></td>";
}
echo "</tr></table>";
?>
</body>
</html>