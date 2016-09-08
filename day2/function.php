<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 14</h1>

<div class="pas"><b>functions in php:</b></div>
<br>
<br>
<?php
function sum($a,$b)
{
	return($a+$b);
	
}
$a=100;
$b=200;
	
echo "<br><div class='pa'> Sum Of "." ".$a." and "." ".$b." is "." ".sum($a,$b)."</div>";


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