<?php
require("ttcon.php");
mysqli_query($con,"truncate table tesubjects");
$n = $_POST['len'];
for($i=1;$i<=$n;$i++)
{
$sub = $_POST["sub".$i];
mysqli_query($con,"insert into tesubjects(sname) values('{$sub}')");
}
echo "record updated ";
?>