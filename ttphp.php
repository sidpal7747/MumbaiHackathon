<?php
require("ttcon.php");
if($con)
{
$mon = $_POST['mon']; 
$tue = $_POST['tue'];
$wed = $_POST['wed'];
$thu = $_POST['thu'];
$fri = $_POST['fri'];
mysqli_query($con,"insert into time_table values({'$mon'},{'$tue'},{'$wed'},{'$thu'},{'$fri'})");
$con.close();
}
?>