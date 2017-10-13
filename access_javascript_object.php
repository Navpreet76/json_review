<!DOCTYPE html>
<html>
<head>
<title>Access JavaScript Object</title>
</head>
<body>
<p id="demo"></p>

<script>

var myObj, x;

myObj = { "name": "Navpreet", "age": 40, "city": "Washington, DC" };
x = myObj.name;
document.getElementById("demo").innerHTML = x;
</script>
</body>
</html>