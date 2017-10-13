<!DOCTYPE html>
<html>
<head>
<title>Modify nested JSON</title>
</head>
<body>
<h1>How to modify values in a nested JSON Object</h1>
<h2>Adding a value</h2>
<h4 id="demo"></h4>
<hr>
<h2>Deleting a value</h2>
<h4 id="demo1"></h4>
<script>
var myObj, i, x = "", y="";
myObj = { "name": "Navpreet", "age":40, "cars":{"car1":"Aston Martin", "car2":"Ferrari","car3":"Lamborghini", "car4":"Bentley", "car5":"Rolls Royce Phantom" }	
};
myObj.cars.car4 = "Mclaren F1";

for(i in myObj.cars){
	x += myObj.cars[i] + "<br>";
}
document.getElementById("demo").innerHTML = x;

delete myObj.cars.car1;

for(i in myObj.cars){
	y += myObj.cars[i] + "<br>";
}
document.getElementById("demo1").innerHTML = y;
</script>
</body>
</html>