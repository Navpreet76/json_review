<!DOCTYPE html>
<html>
<head>
	<title>JSON array loop</title>
</head>
<body>
<h1>JSON Array loop:</h1>
<h2>For-in loop</h2>
<h4 id="demo"></h4>
<h2>For loop</h2>
<h4 id="demo1"></h4>
<script>
var myObj, i, x = "", y = "";
myObj = { "name":"Navpreet", "age":40, "cars":[ "R8", "Ferrari California", "Jaguar", "Lamborghini Diablo", "Lamborghini Aventador", "Spyker" ]};
for(i in myObj.cars){
	x += myObj.cars[i] + "<br>";
}	

for(i = 0; i < myObj.cars.length; i++){
	y += myObj.cars[i] + "<br>";
}
document.getElementById("demo").innerHTML = x;
document.getElementById("demo1").innerHTML = y;








</script>
</body>
</html>