<?php
require("ttcon.php");
mysqli_query($con,"truncate table sesubjects");
$n = $_POST['len'];
for($i=1;$i<=$n;$i++)
{
$sub = $_POST["sub".$i];
mysqli_query($con,"insert into sesubjects(sname) values('{$sub}')");
}
echo "record updated ";
?>