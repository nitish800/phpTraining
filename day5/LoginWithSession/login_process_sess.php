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
 if($row = pg_fetch_row($result))
 {
 $ename=$row[0];
 $_SESSION["ss_name"]=$ename;
 echo "<script>window.location='suc.php';</script>";
 }
 else
 {
	 $_SESSION["sserror"] = "err";
	 echo "<script>window.location='loginses.php';</script>";
	 
 }
 pg_close($db);
 ?>
 