function myfunc(n,m,d){
var v = document.getElementsByClassName('sub');
var vt = document.getElementsByClassName('cat');
var tr = document.getElementsByClassName('trow');
var tda = document.getElementsByClassName('data');
var p = document.getElementsByClassName('par');
p[n].style.visibility = "visible";
p[n].innerHTML = v[n].value;
v[n].style.visibility = "hidden";
vt[n].style.visibility = "hidden";
tda[n].style.textAlign = "center";
//if(vt[n].value=="PRACTICAL"){
//p[n].innerHTML = v[n].value;
//tda[n].rowSpan = "2";
//tr[m].deleteCell(d);
//}
}
function para(k,ma,da){
var v = document.getElementsByClassName('sub');
var vt = document.getElementsByClassName('cat');
var tr = document.getElementsByClassName('trow');
var tda = document.getElementsByClassName('data');
var p = document.getElementsByClassName('par');
tda[k].rowSpan = "1";
//tr[ma].insertCell(da);
vt[k].selectedIndex = "0";
p[k].style.visibility = "hidden";
v[k].style.visibility = "visible";
vt[k].style.visibility = "visible";
tda[k].style.textAlign = "center";
}
function save(){
var v = document.getElementsByClassName('sub');
var vt = document.getElementsByClassName('cat');
var dat = document.getElementsByClassName('tdata');
//alert(v.length+" "+vt.length+" "+dat.length);
//for(var i=0;i<40;i++){
//dat[i].innerHTML = i;
//dat[i].style.textAlign = "center";
//}
}
//2527477884