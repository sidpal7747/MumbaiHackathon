<?php
require("ttcon.php");
$ch = $_POST['rm'];
mysqli_query($con,"delete from teacher where tid=$ch");
?>