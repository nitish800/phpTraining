<html>
<head><title>PHP Example</title></head>
<body bgcolor="#e53935">
<h1>Php Database Example</h1>

<div class="pas"><b>Connecting PostgreSQL with php</b></div>
<br>
<br>
<div class="pa">
<form id="form1" name="form1" method="post" action="reg_process.php">

<table width="400px"  height="300px"  bgcolor="#ffcdd2"  >


<tr bgcolor=#f44336>
	<th colspan="2">Registration Form</th>
	
</tr>
<tr>
	<td class="row1" >Name</td>
	<td class="row1" ><input type="text" name="name_inp" class="inp_size" /></td>
</tr>
<tr>
	<td class="row1" >Address:</td>
	<td class="row1"><textarea name="addre" id="text_area" class="inp_size" ></textarea></td>
</tr>
<tr>
	<td class="row1">Gender</td>
	<td class="row1"><input type="Radio" name="gender" value="female">Female</input> <input type="Radio" value="male" name="gender"/>Male</input></td>
</tr>
<tr>
	<td class="row1">Course:</td>
	<td style="padding-left:53px;">
	<Select class="row1" name="course">
	<option>Python</option>
	<option>Android</option>
	<option>C++</option>
	<option>Java</option>
	</select>
	</td>
</tr>
<tr>
	<td class="row1">Fees :</td>
	<td class="row1"><input type="text" name="fees" class="inp_size"></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="Submit" name="Submit" value="Submit IT"/><input type="Reset" value="Reset"/></td>
</tr>

</table>
</form>
</div>

<?php
	
?>
<br>

<style>
h1{
	text-align:center;
	color:#ffffff;
}
.pas{
	text-align:center;
	font-size:50px;
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
</style>
</body>

</html>