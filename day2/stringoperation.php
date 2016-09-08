<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 12</h1>

<div class="pas"><b>String operation in php:</b></div>
<br>
<br>
<?php
	
$s = "Php string";
echo "<div class='pa'> String Length :".strlen($s)."</div>";
echo "<br><div class='pa'> Reverse String :".strrev($s)."</div>";
$r = split(" ",$s);
$k = sizeof($r);
echo "<br><div class='pa'> Size of k :".$k."</div>";
for($n=0;$n<$k;$n++)
{
	echo "<br><div class='pa'>array value in Index "." ".$n." :".$r[$n]."</div>";
}
echo "<br><div class='pa'>".trim($s," ")."</div>";
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