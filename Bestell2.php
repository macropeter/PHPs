<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>

<body>

<h1>Warenkorb</h1>
<?php

$x=$_POST["woll"];
$y=$_POST["lolli"];
$z=$_POST["che"];
echo("<p>");
echo("Wollmützen, $x Stück für 17,90€ = ");
echo($x*17.9);
echo("</p>");

echo("<p>");
echo("Lollis, $x Stück für 0,45€ = ");
echo($y*0.45);
echo("</p>");

echo("<p>");
echo("Che Guevara, $x Stück für 1,19€ = ");
echo($z*1.19);
echo("</p>");

$summe=$x*17.9+$y*0.45+$z*1.19;
echo("Gesamtpreis:");
echo($summe);

?>
	



</body>

</html>
