<!DOCTYPE html>
<html>
<head>
	<title>Receiving Data</title>
</head>
<body>
<h2>Convert a string written in JSON format into a JavaScript Object.</h2>

<p id="demo"></p>

<script>

var myJSON = '{ "name":"John", "age":31, "city":"New York" }';
var myObj = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myObj.name;	





</script>
</body>
</html>