<?php
require("ttcon.php");

$sub0 = $_POST['sub0'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$sub6 = $_POST['sub6'];
$sub7 = $_POST['sub7'];
$sub8 = $_POST['sub8'];
$sub9 = $_POST['sub9'];
$sub10 = $_POST['sub10'];
$sub11 = $_POST['sub11'];
$sub12 = $_POST['sub12'];
$sub13 = $_POST['sub13'];
$sub14 = $_POST['sub14'];
$sub15 = $_POST['sub15'];
$sub16 = $_POST['sub16'];
$sub17 = $_POST['sub17'];
$sub18 = $_POST['sub18'];
$sub19 = $_POST['sub19'];
$sub20 = $_POST['sub20'];
$sub21 = $_POST['sub21'];
$sub22 = $_POST['sub22'];
$sub23 = $_POST['sub23'];
$sub24 = $_POST['sub24'];
$sub25 = $_POST['sub25'];
$sub26 = $_POST['sub26'];
$sub27 = $_POST['sub27'];
$sub28 = $_POST['sub28'];
$sub29 = $_POST['sub29'];
$sub30 = $_POST['sub30'];
$sub31 = $_POST['sub31'];
$sub32 = $_POST['sub32'];
$sub33 = $_POST['sub33'];
$sub34 = $_POST['sub34'];
$sub35 = $_POST['sub35'];
$sub36 = $_POST['sub36'];
$sub37 = $_POST['sub37'];
$sub38 = $_POST['sub38'];
$sub39 = $_POST['sub39'];

mysqli_query($con,"truncate table ttteb");
mysqli_query($con,"insert into ttteb values('9:30-10:30','{$sub0}','{$sub1}','{$sub2}','{$sub3}','{$sub4}')");
mysqli_query($con,"insert into ttteb values('10:30-11:30','{$sub5}','{$sub6}','{$sub7}','{$sub8}','{$sub9}')");
mysqli_query($con,"insert into ttteb values('11:30-12:30','{$sub10}','{$sub11}','{$sub12}','{$sub13}','{$sub14}')");
mysqli_query($con,"insert into ttteb values('12:30-1:30','{$sub15}','{$sub16}','{$sub17}','{$sub18}','{$sub19}')");
mysqli_query($con,"insert into ttteb values('1:30-2:00','BREAK','BREAK','BREAK','BREAK','BREAK')");
mysqli_query($con,"insert into ttteb values('2:00-3:00','{$sub20}','{$sub21}','{$sub22}','{$sub23}','{$sub24}')");
mysqli_query($con,"insert into ttteb values('3:00-4:00','{$sub25}','{$sub26}','{$sub27}','{$sub28}','{$sub29}')");
mysqli_query($con,"insert into ttteb values('4:00-5:00','{$sub30}','{$sub31}','{$sub32}','{$sub33}','{$sub34}')");
mysqli_query($con,"insert into ttteb values('5:00-6:00','{$sub35}','{$sub36}','{$sub37}','{$sub38}','{$sub39}')");

?>