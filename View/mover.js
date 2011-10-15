$(document).ready(function(){

var $4point = document.getElementById("4point").title;
var $5point = document.getElementById("5point").title;
var $6point = document.getElementById("6point").title;
var $8point = document.getElementById("8point").title;
var $9point = document.getElementById("9point").title;
var $10point = document.getElementById("10point").title;

var $passLine = document.getElementById("passLine").title;
var $dontPassLine = document.getElementById("dontPassLine").title;
var $field = document.getElementById("field").title;
var $come = document.getElementById("come").title;
var $dontCome = document.getElementById("dontCome").title;
var $big6 = document.getElementById("big6").title;
var $big8 = document.getElementById("big8").title;

var $seven5x1 = document.getElementById("seven5x1").title;
var $anyCraps8x1 = document.getElementById("anyCraps8x1").title;
var $10x1_3s = document.getElementById("10x1-3s").title;
var $8x1_5s = document.getElementById("8x1-5s").title;
var $10x1_4s = document.getElementById("10x1-4s").title;
var $8x1_2s = document.getElementById("8x1-2s").title;
var $16x1_3 = document.getElementById("16x1-3").title;
var $31x1_2 = document.getElementById("31x1-2").title;
var $31x1_12 = document.getElementById("31x1-12").title;
var $16x1_11_1 = document.getElementById("16x1-11-1").title;
var $16x1_11_2 = document.getElementById("16x1-11-2").title;

var $punto = document.getElementById("punto").value;

if($4point==$punto){$("#on").animate({"left": "120px", "top": "35px"}, "slow");i++;$("#off").hide();}
if($5point==$punto){$("#on").animate({"left": "165px", "top": "35px"}, "slow");i++;$("#off").hide();}
if($6point==$punto){$("#on").animate({"left": "220px", "top": "35px"}, "slow");i++;$("#off").hide();}
if($8point==$punto){$("#on").animate({"left": "280px", "top": "35px"}, "slow");i++;$("#off").hide();}
if($9point==$punto){$("#on").animate({"left": "335px", "top": "35px"}, "slow");i++;$("#off").hide();}
if($10point==$punto){$("#on").animate({"left": "390px", "top":"35px"}, "slow");i++;$("#off").hide();}

/*--------------*/
$("#clear").click(function(){
    $("#chip").animate({"left": "40px", "top": "350px"}, "slow");i++; 
    document.getElementById("valores").value = " ";
});
/*--------------*/

$("#4point").click(function(){
    $("#chip").animate({"left": "150px", "top": "75px"}, "slow");
    document.getElementById("valores").value = $4point;
});
$("#5point").click(function(){
    $("#chip").animate({"left": "200px", "top": "75px"}, "slow");i++; 
    document.getElementById("valores").value = $5point;
});
$("#6point").click(function(){
    $("#chip").animate({"left": "260px", "top": "75px"}, "slow");i++; 
    document.getElementById("valores").value = $6point;
});
$("#8point").click(function(){
    $("#chip").animate({"left": "320px", "top": "75px"}, "slow");i++; 
    document.getElementById("valores").value = $8point;
});
$("#9point").click(function(){
    $("#chip").animate({"left": "370px", "top": "75px"}, "slow");i++; 
    document.getElementById("valores").value = $9point;
});
$("#10point").click(function(){
    $("#chip").animate({"left": "420px", "top": "75px"}, "slow");i++; 
    document.getElementById("valores").value = $10point;
});
/*--------------*/
$("#passLine").click(function(){
    $("#chip").animate({"left": "50px", "top": "285px"}, "slow");i++; 
    document.getElementById("valores").value = $passLine;
});
$("#dontPassLine").click(function(){
    $("#chip").animate({"left": "70px", "top": "240px"}, "slow");i++; 
    document.getElementById("valores").value = $dontPassLine;
});
$("#field").click(function(){
    $("#chip").animate({"left": "250px", "top": "210px"}, "slow");i++; 
    document.getElementById("valores").value = $field;
});
$("#come").click(function(){
    $("#chip").animate({"left": "250px", "top": "155px"}, "slow");i++; 
    document.getElementById("valores").value = $come;
});
$("#dontCome").click(function(){
    $("#chip").animate({"left": "90px", "top": "60px"}, "slow");i++; 
    document.getElementById("valores").value = $dontCome;
});
$("#big6").click(function(){
    $("#chip").animate({"left": "420px", "top": "275px"}, "slow");i++; 
    document.getElementById("valores").value = $big6;
});
$("#big8").click(function(){
    $("#chip").animate({"left": "437px", "top": "170px"}, "slow");i++; 
    document.getElementById("valores").value = $big8;
});
/*-----------------*/
$("#seven5x1").click(function(){
    $("#chip").animate({"left": "575px", "top": "105px"}, "slow");i++; 
    document.getElementById("valores").value = $seven5x1;
});
$("#anyCraps8x1").click(function(){
    $("#chip").animate({"left": "575px", "top": "355px"}, "slow");i++; 
    document.getElementById("valores").value = $anyCraps8x1;
});
$("#10x1-3s").click(function(){
    $("#chip").animate({"left": "524px", "top": "140px"}, "slow");i++; 
    document.getElementById("valores").value = $10x1_3s;
});
$("#8x1-5s").click(function(){
    $("#chip").animate({"left": "634px", "top": "140px"}, "slow");i++; 
    document.getElementById("valores").value = $8x1_5s;
});
$("#10x1-4s").click(function(){
    $("#chip").animate({"left": "524px", "top": "200px"}, "slow");i++; 
    document.getElementById("valores").value = $10x1_4s;
});
$("#8x1-2s").click(function(){
    $("#chip").animate({"left": "634px", "top": "200px"}, "slow");i++; 
    document.getElementById("valores").value = $8x1_2s;
});
$("#16x1-3").click(function(){
    $("#chip").animate({"left": "505px", "top": "250px"}, "slow");i++; 
    document.getElementById("valores").value = $16x1_3;
});
$("#31x1-2").click(function(){
    $("#chip").animate({"left": "575px", "top": "250px"}, "slow");i++; 
    document.getElementById("valores").value = $31x1_2;
});
$("#31x1-12").click(function(){
    $("#chip").animate({"left": "652px", "top": "250px"}, "slow");i++; 
    document.getElementById("valores").value = $31x1_12;
});
$("#16x1-11-1").click(function(){
    $("#chip").animate({"left": "525px", "top": "305px"}, "slow");i++; 
    document.getElementById("valores").value = $16x1_11_1;
});
$("#16x1-11-2").click(function(){
    $("#chip").animate({"left": "625px", "top": "305px"}, "slow");i++; 
    document.getElementById("valores").value = $16x1_11_2;
});



});




