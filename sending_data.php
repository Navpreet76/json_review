<!DOCTYPE html>
<html>
<head>
	<title>JSON Intro</title>
</head>
<body>
<h2>Convert a JavaScript Object into a JSON string, and send it to the server.</h2>
<script>

var myObj = { "name":"John", "age":31, "city":"New York" };
var myJSON = JSON.stringify(myObj);
window.location = "sending_data.php?x=" + myJSON;	
</script>

</body>
</html>