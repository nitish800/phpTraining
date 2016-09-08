<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 6</h1>

<b>Max No In PHP :</b>
<br>
<br>
<?php
$a = 20;
$b=30;
$c=40;
if($a>=$b && $b>=$c){
	echo "The Max Is<br>".$a;
}
elseif($b>=$a && $a>=$c)
{
	echo "The Max Is<br>".$b;
}
else
{
	echo "The Max Is<br>".$c;
}

?>

</body>

</html>