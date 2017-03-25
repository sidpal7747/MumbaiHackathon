<?php
$no = $_POST["len"];
require("ttcon.php");
$result = mysqli_query($con,"select * from teacher");
$c = 0;
mysqli_query($con,"truncate table allocteachertb1");
while($row = mysqli_fetch_array($result)){
$c++;
mysqli_query($con,"insert into allocteachertb1(firstname,lastname,aid) values('{$row['fname']}','{$row['lname']}',$c)");
}
$c = 0;
for($i=0;$i<$no;$i++){
$c++;
$subject = $_POST["sub".$i];
$pract = $_POST["prac".$i];
mysqli_query($con,"update allocteachertb1 set subjects='$subject' where aid=$c");
mysqli_query($con,"update allocteachertb1 set practical='$pract' where aid=$c");
}
echo "record updated";
?>