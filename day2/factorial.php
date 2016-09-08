<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 15</h1>

<div class="pas"><b>factorial functions in php:</b></div>
<br>
<br>
<?php
function fac($a)
{$b=1;
$c=1;
	while($b<=$a)
	{
		$c*=$b;
		$b++;
	}
	return $c;
}
$a=10;

	
echo "<br><div class='pa'> Factorial Of  "." ".$a." is "." ".fac($a)."</div>";


?>
<br>

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