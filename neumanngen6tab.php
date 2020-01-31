<!DOCTYPE html>
<html>

  <head>
    
  <meta charset="utf-8">
    <style>
      td {border: 2px solid black;}
    </style>
    
  </head>

<body>

  <h1>Von-Neumann Pseudozufallszahlen</h1>
  <h2>Ihre Zufallszahlen sind:</h2>
  

<!-- Skriptbereich beginnt: -->
  <?php
    $x=122334; //var ist nicht erforderlich
    
function myrandom()
{
    global $x; //holt die globale Var in die Function
	$x=$x*$x;
	$x=(int)($x/1000);/*(int) statt parseInt
	$x=$x % 1000000;
	return $x; //was an die aufrufende Stelle zurückgegeben wird.
}
echo("<table>");
    
for ($i=0;$i<10;$i++)
    {
        echo("<tr><td>".myrandom()."</td></tr>");
    }
echo("</table>");
    
  ?>
</body>

</html>
