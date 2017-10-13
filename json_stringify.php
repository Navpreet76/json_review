<!DOCTYPE html>
<html>
<head>
	<title>Stringify JSON</title>
</head>
<body>
<h1>When sending data to a web server, the data has to be a string.</h1>
<h3>Convert a JavaScript Object into a string with JSON.stringify().</h3>
<h4 id="demo"></h4>
<hr>
<h3>Convert JS array into JSON string</h3>
<h4 id="demo1"></h4>

<script>
var obj = { "name":"Navpreet", "age":40, "city":"Washington DC" };
var myJSON = JSON.stringify(obj);
document.getElementById("demo").innerHTML = myJSON;	
</script>
<script>
var arr = [ "John", "Peter", "Sally", "Crystal", "Thomas", "David", "Mikayla" ];
var myJSON = JSON.stringify(arr);
document.getElementById("demo1").innerHTML = myJSON;	




</script>
</body>
</html>
