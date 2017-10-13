<!DOCTYPE html>
<html>
<head>
	<title>Get server content JSON</title>
</head>
<body>
<h2>Use the XMLHttpRequest to get content of a file.</h2>
<h5>The content is written in JSON format but can easily be converted into a JavaScript Object.</h5>
<h4 id="demo"></h4>

<script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		var myObj = JSON.parse(this.responseText);
		document.getElementById("demo").innerHTML = myObj.name;
	}
};
xmlhttp.open("GET", "json_demo.txt", true);
xmlhttp.send();	
</script>
<h4>Take a look at <a href="json_demo.txt" target="_blank">json_demo.txt</a></h4>
</body>
</html>