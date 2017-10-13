<!DOCTYPE html>
<html>
<head>
	<title>Looping through arrays inside arrays</title>
</head>
<body>
<h2>Looping through arrays inside arrays in JSON</h2>
<h4 id="demo"></h4>


<script>

var myObj, i, j, x = "";
myObj = { "name":"Navpreet", "age":40, "cars":[
{ "name":"Ford", "models":[ "Fiesta", "Mustang", "F-150", "Focus", "500"] },
{ "name":"BMW", "models":[ "335", "X3", "X5", "7-Series", "6-Series", "M-Series"] },
{ "name":"Fiat", "models":[ "500", "Panda", "Fiat Sucks", "Bad Commercials"] }
	]
}	

for(i in myObj.cars){
	x += "<h2>" + myObj.cars[i].name + "</h2>";
	for(j in myObj.cars[i].models){
		x += myObj.cars[i].models[j] + "<br>";
	}
}
document.getElementById("demo").innerHTML = x;
</script>
</body>
</html>