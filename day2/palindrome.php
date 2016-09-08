<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 16</h1>

<div class="pas"><b>Palindrome functions in php:</b></div>
<br>
<br>
<?php
function pal($a)
{
$b=0;
$j=$a;
while($a>0){
	$b=$b * 10 +($a%10);
	$a =($a - ($a%10))/10;	
}
if($b==$j)
	echo "<div class='pa'>Palindrome!</div>";
else
	echo "<div class='pa'>Not Palindrome!</div>";

}
$a=101;

	
"<br><div class='pa'> ".pal($a)."</div>";


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