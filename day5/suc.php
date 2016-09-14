<?php
session_start();
$ename = $_SESSION["ss_name"];
echo "welcome $ename";
?>