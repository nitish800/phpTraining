<html>
<head><title>Chat Room Sign UP</title>
<style>

h1{
	text-align:center;
	color:#ffffff;
}
.pa{
	margin-left:500px;
}
.inp_size{
	width:200px;
}
.row1{
	text-align:center;
}
th{
	color:#ffffff;
}
</style>
</head>
<body bgcolor="#607d8b">
<h1>Employee Login Page</h1>
<br>
<br>
<div class="pa">
<form id="form1" name="form1" method="post" action="login_process.php">

<table width="400px"  height="300px"  bgcolor="#b0bec5"  >


<tr bgcolor="#263238">
	<th colspan="2" color="#ffffff">Login Form</th>
	
</tr>
<tr>
	<td class="row1" >Enter User_name</td>
	<td class="row1" ><input type="text" name="u_name" class="inp_size" /></td>
</tr>
<tr>
	<td class="row1" >Enter Password</td>
	<td class="row1" ><input type="password" name="u_pass" class="inp_size" /></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="Submit" name="Submit" value="Login"/><input type="Reset" value="Reset"/></td>
</tr>

</table>
</form>
</div>

</body>
</html>