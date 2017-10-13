<!DOCTYPE html>
<html>
<head>
	<title>JSON Parse</title>
</head>
<body>
<h3>JSON is used to exchange data to/from a web server. Received data is a string.</h3>
<h4>Parse the data with JSON.parse(), and the data becomes a JavaScript Object.</h4>
<h3>Create an Object from JSON string</h3>
<h4 id="demo"></h4>
<script>

var obj = JSON.parse('{ "name":"Navpreet", "age":40, "city":"Washington,DC" }');
document.getElementById("demo").innerHTML = obj.name + ", " + obj.age + ", " + obj.city; 
</script>

</body>
</html>