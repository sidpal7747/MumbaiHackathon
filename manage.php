<html>
<body>
<?php
require("ttcon.php");
$res = mysqli_query($con,"select sname from sesubjects");
echo "<select style='display:none;'>";
echo "<option value='-'>-</option>";
while($row = mysqli_fetch_assoc($res)){
echo "<option value=".$row['sname'].">".$row['sname']."</option>";
}
echo "</select>";
?>
</body>
</html>