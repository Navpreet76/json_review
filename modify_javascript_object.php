<!DOCTYPE html>
<html>
<head>
<title>Modify JavaScript Object</title>
</head>
<body>
<h1 id="demo"></h1>
<script>
var myObj, x;
myObj = { "name":"Navpreet", "age":40, "city": "Washington, DC" };
myObj.name = "Tony Montana";
document.getElementById("demo").innerHTML = myObj.name;
</script>
</body>
</html>