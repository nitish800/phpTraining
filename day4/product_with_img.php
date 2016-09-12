<html>
<head><title>PHP Example</title></head>
<body bgcolor="#e53935">
<h1>Php Database Example</h1>

<div class="pas"><b>Upload Product Image in PHP</b></div>
<br>
<br>
<div class="pa">
<form id="form1" name="form1" method="post" action="file_upload.php" enctype="multipart/form-data">

<table width="400px"  height="300px"  bgcolor="#ffcdd2"  >


<tr bgcolor=#f44336>
	<th colspan="2">Upload Image</th>
	
</tr>
<tr>
	<td class="row1" >Enter Name</td>
	<td class="row1" ><input type="text" name="p_name" class="inp_size" /></td>
</tr>
<tr>
	<td class="row1" >Upload Image</td>
	<td class="row1" ><input type="file" name="p_image" class="inp_size" /></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="Submit" name="Submit" value="Upload"/><input type="Reset" value="Reset"/></td>
</tr>

</table>
</form>
</div>

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