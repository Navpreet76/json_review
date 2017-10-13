<!DOCTYPE html>
<html>
<head>
	<title>Storing and Retreiving data from a local storage</title>
</head>
<body>
<h2>Store and Retreive data from a local storage.</h2>

<p id="demo"></p>

<script>
var myObj, myJSON, text, obj;

//Storing Data
myObj = { "name":"Navpreet", "age": 40, "city":"Washington, DC" };
myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

//Retreiving data
text = localStorage.getItem("testJSON");
obj = JSON.parse(text);
document.getElementById("demo").innerHTML = obj.name;
</script>
</body>
</html>