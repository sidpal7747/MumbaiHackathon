<html>
<head>
<title>SE A comps Timetable</title>
</head>
<script src="ttdb.js"></script>
<script>
function done(){
var s = document.getElementsByClassName('sub');
var p = document.getElementsByClassName('par');
//var d = document.getElementsByClassName('data');
for(var i=0;i<s.length;i++){
p[i].innerHTML = s[i].value;
//s[i].style.visibility = "hidden";
s[i].style.display = "none";
}
}
</script>
<body>
<input type="button"  value="Done" onclick="done()">&nbsp;&nbsp;&nbsp;<input type="button"  value="Save" onclick="savesa1()">
<table border="2px"  height="90%" width=100% cellpadding=5px>
<caption>Computer Engg.</caption>
<caption>SE-A (A1)</caption>
<tr>
<th>Time</th>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
</tr>

<tr class="trow">
<td><center>9:30-10:30</center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>

<tr class="trow">
<td><center>10:30-11:30</center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>

<tr class="trow">
<td><center>11:30-12:30</center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>

<tr class="trow">
<td><center>12:30-1:30</center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>

<tr class="trow">
<td><center>1:30-2:00</center></td>
<td colspan="5"><center>Break</td>
</tr>

<tr class="trow">
<td><center>2:00-3:00</center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>

<tr class="trow">
<td><center>3:00-4:00</center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>

<tr class="trow">
<td><center>4:00-5:00</center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>

<tr class="trow">
<td><center>5:00-6:00</center>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
<td class="data"><center><?php include 'fetchsubjecs.php';?><p class="par"></p></center></td>
</tr>
</table>
</body>
</html>
