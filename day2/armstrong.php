<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 11</h1>

<b>Armstrong no using For Loop In PHP :</b>
<br>
<br>
<?php

for($a=100;$a<1000;$a++){
    $b=0;
	$j=$a;
	while($j>0)
			{
	$ll=$j%10;
	$b=$b + ($ll* $ll * $ll);
	$j =($j - ($j%10))/10;	
			}
	if ($b == $a)
	{
		echo "<br><b>Armstrong</b> :".$b;
	}
	
	
	
	
}

?>

</body>

</html>