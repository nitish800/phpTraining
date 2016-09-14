<html>
<head><title>PHP Example</title></head>
<body bgcolor="#e53935">
<h1>Php Database Example</h1>

<div class="pas"><b>Info Update Form</b></div>
<br>
<br>
<div class="pa">
<form id="form1" name="form1" method="post" action="update_address.php">

<table width="400px"  height="300px"  bgcolor="#ffcdd2"  >


<tr bgcolor=#f44336>
	<th colspan="2">Update Form</th>
	
</tr>
<tr>
	<td class="row1" >Enter Roll</td>
	
	<td class="row1" ><input type="text" name="roll" value="<?php echo $_REQUEST["rollid"]; ?>" readonly="readonly" disabled="disabled" class="inp_size" /></td>
</tr>
<tr>
	<td class="row1" >Address:</td>
	<td class="row1"><textarea name="addre" id="text_area" class="inp_size" ></textarea></td>
</tr>
<tr>
	<td class="row1" >Enter Name</td>
	<td class="row1" ><input type="text" name="name" class="inp_size" /></td>
</tr>
<tr>
	<td class="row1" >Enter Fees</td>
	<td class="row1" ><input type="text" name="fees" class="inp_size" /></td>

</tr>
<tr>
	<td class="row1" >Enter Course</td>
	<td class="row1" ><input type="text" name="course" class="inp_size" /></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="Submit" name="Submit" value="UPDATE"/><input type="Reset" value="Reset"/></td>
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