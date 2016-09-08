<html>
<head><title>PHP Example</title></head>
<body>
<h1>Php Example 13</h1>

<div class="pas"><b>date() in php:</b></div>
<br>
<br>
<?php
	
echo "<br><div class='pa'> Today is"." ".date('l j\<\s\u\p\>S\<\/\s\u\p\> \of F Y');
if(date('L')==1)
	echo " And Its a leap Year </div>";
else
	echo " And Its not a leap Year</div>";

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