<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
</head>

<body>

  <h1>Von-Neumann Pseudozufallszahlen</h1>
  <h2>Ihre Zufallszahlen sind:</h2>
  


  <?php
    $x=122334;
    

    function myrandom()
{
    global $x;//holt die globale Var ins Boot
	$x=$x*$x;
	$x=(int)($x/1000);//(int) statt parseInt
	$x=$x % 1000000;
	return $x;
}
echo("<ol>");
    
for ($i=0;$i<10;$i++)
    {
        echo("<li>".myrandom()."</li>");
    }
echo("</ol>");
    
  ?>
</body>

</html>
