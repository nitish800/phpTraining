<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 9</h1>

<b>Reverse a NO While Loop In PHP :</b>
<br>
<br>
<?php
$a = 15246655;
$b=0;
while($a>0){
	$b=$b * 10 +($a%10);
	$a =($a - ($a%10))/10;	
}
echo "<br>".$b;

?>

</body>

</html>