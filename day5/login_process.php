<?php
 session_start();                    
//Retriving value from user or form
// retrive using $_POST[] $_GET[] $_REQUEST[] 

$username = $_REQUEST['u_name'];
$password = $_REQUEST['u_pass'];

$host = "host=127.0.0.1"; 											//postgress server ip
$port = "port=5432"; 												//port address
$dbname = "dbname=Php_Project"; 									//database name
$credential = "user=postgres password=###alpha@@@123"; 				//username and password
$db = pg_connect("$host $port $dbname $credential");

if(!$db){
	echo "<br>Connection Error!!";
	}
//creating a sql statement string and store it in a variable $sql .
	
$sql ="select ename,gender,address,deptid,salary from emp where login='$username' and pass='$password'";

 //executing the $sql
 
 $result = pg_query($db,$sql);
 
 pg_close($db);
 ?>
 <html>
 <head>
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
</style></head>
 <body>
 <table width="500px"  height="300px" border="1px" bgcolor="#ede7f6"  >


<tr bgcolor="#b39ddb">
	<th colspan="6">Student Details.</th>
	
</tr>
 <tr>
 <td class="row1"> Name :</td>
 <td class="row1"> Gender :</td>
 <td class="row1"> Address :</td>
 <td class="row1"> DeptID :</td>
 <td class="row1"> Salary :</td>
 </tr>
 <?php
if($result){
$result_data = pg_fetch_row($result);
echo "<tr>";
echo "<td class='row1' >".$result_data[0]."</td>";
echo "<td class='row1' >".$result_data[1]."</td>";
echo "<td class='row1' >".$result_data[2]."</td>";
echo "<td class='row1' >".$result_data[3]."</td>";
echo "<td class='row1' >".$result_data[4]."</td>";
echo "</tr>";


}else{
	echo "Error Occour!!";
}
 
?>
</table>
</body>
</html>