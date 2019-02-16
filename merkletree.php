<!DOCTYPE html>
<?php
session_start();
?>
<html>
	
<body>
<?php 
$x=array("Alice","Bob","Chris","Dante");

function merkle($arr)
{
	foreach($arr as $item)
	{
		echo("<p>".hash("sha256",$item)."</p>");
	}
}
merkle($x);

?>

</body>
</html>
