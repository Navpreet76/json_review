<!DOCTYPE html>
<html>
<head>
	<title>Loop Thru properties in a JSON Object</title>
</head>
<body>
<h3>Loop through the properties in a JSON Object.</h3>
<p id="demo"></p>
<h3>Use Bracket notation to access the property values in a JSON Object.</h3>
<p id="demo1"></p>


<script>
var myObj = { "name": "Navpreet", "age":40, "city":"Washington,DC", "car":null };
for(x in myObj){
	document.getElementById("demo").innerHTML += x + "<br>";
}
</script>

<script>
var myObj = { "name":"John Rambo", "age":55, "city":"Los Angeles", "car":null };
for(x in myObj){
	document.getElementById("demo1").innerHTML += myObj[x] + "<br>";
}	
</script>
</body>
</html>