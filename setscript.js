function modfy(){
alert("Work in Progress");
}
function myfunc(){
var yr = document.getElementById('year');
var cs = document.getElementById('cls');
if(yr.value=="se" && cls.value=="a"){
window.location.assign("ttsea.php");
}
else if(yr.value=="se" && cls.value=="b"){
window.location.assign("ttseb.php");
}
else if(yr.value=="te" && cls.value=="a"){
window.location.assign("ttea.php");
}
else if(yr.value=="te" && cls.value=="b"){
window.location.assign("ttebb.php");
}
}
function display(){
var yr = document.getElementById('year');
var cs = document.getElementById('cls');
if(yr.value=="se" && cls.value=="a"){
window.location.assign("displaysa.php");
}
else if(yr.value=="se" && cls.value=="b"){
window.location.assign("displaysb.php");
}
else if(yr.value=="te" && cls.value=="a"){
window.location.assign("displayta.php");
}
else if(yr.value=="te" && cls.value=="b"){
window.location.assign("displaytb.php");
}
}
function assign(){
var yr = document.getElementById('year');
var cs = document.getElementById('cls');
if(yr.value=="se" && cls.value=="a"){
window.location.assign("createsa.php");
}
else if(yr.value=="se" && cls.value=="b"){
window.location.assign("createsb.php");
}
else if(yr.value=="te" && cls.value=="a"){
window.location.assign("createta.php");
}
else if(yr.value=="te" && cls.value=="b"){
window.location.assign("creatett.php");
}
}
