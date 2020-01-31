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
    $x=time(); //Zeit abfragen (incl. Millisek)
    echo($x);
function myrandom()
{
    global $x;
	$x=$x*$x;
	$x=(int)($x/1000);
	$x=$x % 1000000;
	return $x;
}
echo("<table>");
    
for ($i=0;$i<1000;$i++)
    {
        echo("<tr><td>".myrandom()."</td></tr>");
    }
echo("</table>");
    
  ?>
</body>

</html>
