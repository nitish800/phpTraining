<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 11</h1>

<div class="pas"><b>Armstrong no using For Loop In PHP :</b></div>
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
		echo "<div class='pa'><br><b>Armstrong :</b>".$b."</div>";
	}
	
	
	
	
}

?>
<br>
<marquee><img src="TANK.png" width="400px" height="400px"></marquee>
<style>
h1{
	text-align:center;
}
.pas{
	text-align:center;
}
.pa{
	text-align:center;
}
</style>
</body>

</html>