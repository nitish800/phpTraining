<html>
<head><title>PHP Example</title></head>
<body bgcolor="#eceff1">
<h1>Php Database Example</h1>

<div class="pas"><b>User Info:</b></div>
<br>
<br>
<div class="pa">
<?php
#include('display_html.php');                       //includes the other page in one page.
//Retriving value from user or form
// retrive using $_POST[] $_GET[] $_REQUEST[] 

$roll = $_REQUEST["roll"];  									//taking input name from the FORM
#$address = $_REQUEST["addre"];
#$gender = $_REQUEST["gender"];
#$course = $_REQUEST["course"];
#$fees = $_REQUEST["fees"];

									//database Connectivity

$host = "host=127.0.0.1"; 											//postgress server ip
$port = "port=5432"; 												//port address
$dbname = "dbname=Php_Project"; 									//database name
$credential = "user=postgres password=###alpha@@@123"; 				//username and password


									//creating a database connectivity sesion and storing it in variable $db


$db = pg_connect("$host $port $dbname $credential");

									//Checking for conection error.

	if(!$db){
	echo "<br>Connection Error!!";
	}
		
	//creating a sql statement string and store it in a variable $sql .
	
$sql ="Select * from Student where roll=$roll";

 //executing the $sql
 
 $result = pg_query($db,$sql);  //pg_query(<conection>,<query>); return effected no row in update,insert,delete. 
								// when use "select" query, returns a array of row and coloms.
			


?>
<table width="500px"  height="300px" border="1px" bgcolor="#ede7f6"  >


<tr bgcolor="#b39ddb">
	<th colspan="7">Student Details.</th>
	
</tr>
<tr>
	<td class="row1" >Roll</td>
	<td class="row1" >Name</td>
	<td class="row1" >Address</td>
	<td class="row1" >Gender</td>
	<td class="ros1" >Course</td>
	<td class="row1" >Fees</td>
	<td class="row1" >Edit</td>

</tr>
<?php
if($result){
while($result_data = pg_fetch_row($result))
{
echo "<tr>";
echo "<td class='row1' >".$result_data[0]."</td>";
echo "<td class='row1' >".$result_data[1]."</td>";
echo "<td class='row1' >".$result_data[2]."</td>";
echo "<td class='row1' >".$result_data[3]."</td>";
echo "<td class='row1' >".$result_data[4]."</td>";
echo "<td class='row1' >".$result_data[5]."</td>";
echo "<td class='row1' ><a href='update.php?rollid=".$result_data[0]."'><img src='edit.png' width='20px' height='20px'></a></td>";
echo "</tr>";
}
}else{
	echo "Error Occour!!";
}
	
							//pg_close terminate the session
pg_close($db);							
?>
</table>
</div>

<br>

<style>
h1{
	text-align:center;
	color:#000000;
}
.pas{
	text-align:center;
	font-size:50px;
	color:#000000;
	
}
.pa{
	margin-left:400px;
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



