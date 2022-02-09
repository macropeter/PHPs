<!DOCTYPE html>

<html>

<head>

</head>
<body>

<?php
function Caesar($buchstabe){
	$help=ord($buchstabe)+17;
	if ($help>90)
		{
		$help=$help-26;
		}
return chr($help);}

$botschaft="WUENSCHE ALLE GUTE GESUNDHEIT";
//Schleife, um Buchstabe für Buchstabe zu verschlüsseln

for ($i=0;$i<strlen($botschaft);$i++)
{
echo(Caesar($botschaft[$i]));
}
?>

</body>
</html>
