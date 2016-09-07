<html>
<head>
<title>My First PHP APP</title>
</head>
<body>
<form id="form1" method="post" action=""></br>
<table id="loginpage">
	<tr>
		<th colspan="2" align="center" class="ti"><h1>Login Page</h1></th>
	</tr>
	<tr>
		<td>UserName :</td>
		<td><input type="text" name="user_name"></td>
	</tr>
	<tr>
		<td>PassWord :</td>
		<td><input type="password" name="user_name"></td>
	</tr>
</table/>
</form>
<div style="text-align:center">
<button type="submit" form="form1" name="Submit" ></button>
</div>
</br>

<style>
table#loginpage{
margin-left:auto;
margin-right:auto;
width:400px;
border-color:black;
padding-top:50px;
}

td{
	color:#212121;
	font-size:25px;
	font-weight:bold;
	font-family:"Comic Sans MS";
}
body{
	background-image:url(bg2.png);
	
}
.ti{
	font-size:30px;
	align:center;
	color:#90caf9;
	font-family:"Comic Sans MS";
}
button {
	display: inline-block;
    background-image:url("ss.png");
	background-color:Transparent;
	background-repeat:no-repeat;
	width:64px;
	height:64px;
	margin:0;
	border:none;
	
}

button:hover{
	 background-image:url("ss_hover.png");
}
button:active{
	
    background-image:url("ss_open.png");
	
}

</style>
</body>
</html>
