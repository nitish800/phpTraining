<html>
<head><title>JS Example</title>
<script>
function abc()
{
	document.getElementById("p_name").focus();
}

function tb()
{
	var nm = document.getElementById("p_name").value;
	if(nm == "")
	{
		alert("enter some text first");
		document.getElementById("p_name").focus();
	}

}

</script>
</head>
<body onload="abc()">

<form method="get" action="process.php">
Enter Name: <input type="text" name="p_name" id="p_name"  /><br>
<input type="button" onclick="tb()" value="Register"/>

</form>
</body>

</html>