<?php
//Retriving value from user or form
// retrive using $_POST[] $_GET[] $_REQUEST[] 

$roll = $_REQUEST["roll"];  									//taking input name from the FORM
$address = $_REQUEST["addre"];
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
	else
	{
	echo "<br>Connection Succesful!!";
	}
	
	//creating a sql statement string and store it in a variable $sql .
	
$sql ="update student set address='$address' where roll=$roll";

 //executing the $sql
 
 $retu = pg_query($db,$sql);  //pg_query(<conection>,<query>); return effected no row in update,insert,delete. 
								// when use "select" query, returns a array of row and coloms.
			
if($retu){
	echo "<br>Register Successful!";
}
	
							//pg_close terminate the session
pg_close($db);							
			
								

























?>