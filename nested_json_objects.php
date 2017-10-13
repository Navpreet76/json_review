<!DOCTYPE html>
<html>
<head>
	<title>Nested JSON Objects</title>
</head>
<body>
<h1>How to access nested JSON Objects.</h1>

<h3 id="demo"></h3>
<h3 id="demo1"></h3>
<h3 id="demo2"></h3>
<h3 id="demo3"></h3>
<h3 id="demo4"></h3>

<script>
var myObj = { "name": "Navpreet", "age":40, "cars":{"car1":"Aston Martin", "car2":"Ferrari","car3":"Lamborghini", "car4":"Bentley", "car5":"Rolls Royce Phantom" }
};
document.getElementById("demo").innerHTML += myObj.cars.car2 + "<br>";
document.getElementById("demo1").innerHTML += myObj.cars.car1;
document.getElementById("demo2").innerHTML += myObj.cars.car3;
document.getElementById("demo3").innerHTML += myObj.cars.car4;
for(x in myObj){
	document.getElementById("demo4").innerHTML += myObj.cars + "<br>";
}
</script>
</body>
</html>