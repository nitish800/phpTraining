<html>
<head><title>PHP Example</title></head>
<body bgcolor="#e53935">
<h1>Php Database Example</h1>


<?php
#include('display_html.php');                       //includes the other page in one page.
//Retriving value from user or form
// retrive using $_POST[] $_GET[] $_REQUEST[] 

$host = "host=127.0.0.1"; 											//postgress server ip
$port = "port=5432"; 												//port address
$dbname = "dbname=Php_Project"; 									//database name
$credential = "user=postgres password=###alpha@@@123"; 				//username and password
$db = pg_connect("$host $port $dbname $credential");
if(!$db){
	echo "<br>Connection Error!!";
	}
		
	//creating a sql statement string and store it in a variable $sql .
	
$sql ="select name,pimage from products";

 //executing the $sql
 
 $result = pg_query($db,$sql);
pg_close($db);
?>


<div class="pas"><b>Shows Product Name and Image in PHP</b></div>
<br>
<br>
<div class="pa">
<table width="400px"  height="300px"  bgcolor="#ffcdd2"  >


<tr bgcolor=#f44336>
	<th colspan="2">Name and Image</th>
	
</tr>
<tr>
	<td class="row2" >Name</td>
	<td class="row2" >Image</td>
	
</tr>

<?php
if($result){
while($result_data = pg_fetch_row($result))
{
echo "<tr>";
echo "<td class='row1' >".$result_data[0]."</td>";
echo "<td class='row1' ><img src='".$result_data[1]."' width='150px' height='150px'/></td>";
echo "</tr>";
}
}else{
	echo "Error Occour!!";
}


?>

</table>
</div>

<br>

<style>
h1{
	text-align:center;
	color:#ffffff;
}
th{
	font-size:35px;
	text-decoration:bold;
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
	font-size:20px;
}
.row2{
	font-size:35px;
	text-decoration:underline;
	text-align:center;
}
</style>
</body>

</html>