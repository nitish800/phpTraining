<?php
#include('display_html.php');                       //includes the other page in one page.
//Retriving value from user or form
// retrive using $_POST[] $_GET[] $_REQUEST[] 

$name = $_REQUEST["p_name"]; 									//taking input name from the FORM

$fi = $_FILES["p_image"]["name"];   //geting file

$path = "image/".$fi;   //where to save image / which folder


move_uploaded_file($_FILES["p_image"]["tmp_name"],$path);  //move tmp  file to real folder, user to upload.


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
	
$sql ="insert into products (name,pimage) values ('$name','$path' )";

 //executing the $sql
 
 $result = pg_query($db,$sql);  //pg_query(<conection>,<query>); return effected no row in update,insert,delete. 
								// when use "select" query, returns a array of row and coloms.
			
if($result)
{
	echo "Succesfully Uploaded";
}
else
{
	echo "Error Upload Failed !!";
}


pg_close($db);
?>
