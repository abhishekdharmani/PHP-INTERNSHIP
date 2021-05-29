<html>
<head><title>Largest of three numbers:</title></head>
<body>
<?php
$a=6521;
$b=541;
$c=8412;
if($a>$b && $a>$c)
{
	echo $a;
}
else 
{
 	if($b>$a && $b>$c)
	{
	echo $b;}
	else
	echo $c;
}
?>
</body>
</html>