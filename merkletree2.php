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
	$helpx=array();
	foreach($x as $item)
	{
		$helpx[]=hash("sha256",$item);
	}
	$help2=array();
	$help1=array();
	
	//for ($i=0;$i<count($arr);$i++)
	
		$help2[]=hash("sha256",$helpx[0].$helpx[1]);
		$help2[]=hash("sha256",$helpx[2].$helpx[3]);
		
		return hash("sha256",$help[0].$help[1]);
		
		
	
}
echo(merkle($x));

?>

</body>
</html>
