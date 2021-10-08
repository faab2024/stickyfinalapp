
<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	text-align: center;
	background: #00ECB9;
font-family: sans-serif;
font-weight: 100;
}
h1{
color: #396;
font-weight: 100;
font-size: 40px;
margin: 40px 0px 20px;
}
#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
}
#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
	background: #00BF96;
	display: inline-block;
}
#clockdiv div > span{
	padding: 15px;
	border-radius: 3px;
	background: #00816A;
	display: inline-block;
}
smalltext{
	padding-top: 5px;
	font-size: 16px;
}
</style>
</head>
<body>
<h1>Countdown Clock</h1>
<div id="clockdiv">
<div>
	<span class="days" id="day"></span>
	<div class="smalltext">Days</div>
</div>
<div>
	<span class="hours" id="hour"></span>
	<div class="smalltext">Hours</div>
</div>
<div>
	<span class="minutes" id="minute"></span>
	<div class="smalltext">Minutes</div>
</div>
<div>
	<span class="seconds" id="second"></span>
	<div class="smalltext">Seconds</div>
</div>
</div>

<p id="demo"></p>

<script>

var dl = new Date().getTime();
var deadline=dl+1;


var x = setInterval(function() {

var now = new Date().getTime();
var t = deadline - now;

    if (t == 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "TIME UP";
		document.getElementById("day").innerHTML ='0';
		document.getElementById("hour").innerHTML ='0';
		document.getElementById("minute").innerHTML ='0' ;
		document.getElementById("second").innerHTML = '0'; 
    }

}, 1000);
</script>
</body>
</html>
