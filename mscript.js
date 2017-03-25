function mysub(){
var no = document.getElementById("sno").value;
if(no==""){
window.location.assign("creatett.php");
}
document.getElementById('teach').style.visibility = "hidden";
for(var i=1;i<=no;i++){
var ip = document.createElement("input");
ip.setAttribute("type","text");
ip.setAttribute("id","es"+i);
ip.setAttribute("placeholder","Enter Subject name "+i);
document.getElementById("sub").appendChild(ip);
var b = document.createElement("br");
document.getElementById("sub").appendChild(b);
var b = document.createElement("br");
document.getElementById("sub").appendChild(b);
}
var btn = document.createElement("input");
btn.setAttribute("type","button");
btn.setAttribute("onclick","sends("+no+")");
btn.setAttribute("value","Save");
document.getElementById("sub").appendChild(btn);
var b = document.createElement("br");
document.getElementById("teach").appendChild(b);
document.getElementById("sbtn").disabled = "true";
}
function sends(no){
var xmlhttp;
var str = "len="+no;
for(var i=1;i<=no;i++){
str += " &"+"sub"+i+"="+document.getElementById("es"+i).value+" ";
}
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById('para').innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","tesubject.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(str);
}
function allocate(n){
//alert(n);
var str = "len="+n;
var p = document.getElementsByClassName("par");
var pr = document.getElementsByClassName("parp");
var xmlhttp;
for(var i=0;i<n;i++){
str += " &"+"sub"+i+"="+p[i].innerHTML;
}
for(var j=0;j<n;j++){
str += " &"+"prac"+j+"="+pr[j].innerHTML;
}
//alert(str);
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    alert(xmlhttp.responseText);
    }
  }
xmlhttp.open("POST","alloctb.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(str);
}
function allocate2(n){
//alert(n);
var str = "len="+n;
var p = document.getElementsByClassName("par2");
var pr = document.getElementsByClassName("parp2");
var xmlhttp;
for(var i=0;i<n;i++){
str += " &"+"sub"+i+"="+p[i].innerHTML;
}
for(var j=0;j<n;j++){
str += " &"+"prac"+j+"="+pr[j].innerHTML;
}
//alert(str);
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    alert(xmlhttp.responseText);
    }
  }
xmlhttp.open("POST","alloctb2.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(str);
}
function allocate3(n){
//alert(n);
var str = "len="+n;
var p = document.getElementsByClassName("par3");
var pr = document.getElementsByClassName("parp3");
var xmlhttp;
for(var i=0;i<n;i++){
str += " &"+"sub"+i+"="+p[i].innerHTML;
}
for(var j=0;j<n;j++){
str += " &"+"prac"+j+"="+pr[j].innerHTML;
}
//alert(str);
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    alert(xmlhttp.responseText);
    }
  }
xmlhttp.open("POST","alloctb3.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(str);
}
function take(){
var s = document.getElementsByClassName("sub");
var sp = document.getElementsByClassName("prac");
var p = document.getElementsByClassName("par");
var pr = document.getElementsByClassName("parp");
for(var i=0;i<s.length;i++){
p[i].innerHTML = s[i].value;
s[i].style.display = "none";
}
for(var i=0;i<s.length;i++){
pr[i].innerHTML = sp[i].value;
sp[i].style.display = "none";
}
}
function take2(){
var s = document.getElementsByClassName("sub2");
var sp = document.getElementsByClassName("prac2");
var p = document.getElementsByClassName("par2");
var pr = document.getElementsByClassName("parp2");
for(var i=0;i<s.length;i++){
p[i].innerHTML = s[i].value;
s[i].style.display = "none";
}
for(var i=0;i<s.length;i++){
pr[i].innerHTML = sp[i].value;
sp[i].style.display = "none";
}
}
function take3(){
var s = document.getElementsByClassName("sub3");
var sp = document.getElementsByClassName("prac3");
var p = document.getElementsByClassName("par3");
var pr = document.getElementsByClassName("parp3");
for(var i=0;i<s.length;i++){
p[i].innerHTML = s[i].value;
s[i].style.display = "none";
}
for(var i=0;i<s.length;i++){
pr[i].innerHTML = sp[i].value;
sp[i].style.display = "none";
}
}