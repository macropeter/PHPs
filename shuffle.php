<html>
<head>

</head>

<body>
<?php

/*Knuth-Shuffle: man kann beweisen, dass jede
  Möglichkeit gleich wahrscheinlich ist*/

$n=10;//Anzahl der Elemente
$x=[]; //leeres Array erstellen
for ($i=0;$i<$n;$i++)
{
    $x[]=$i; //push: ein Element an das Array anhängen
}
//var_dump($x);

for ($i=0;$i<$n-1;$i++)
{

    $r=rand($i,$n-1);
    //Dreieckstausch:
    $h=$x[$i];
    $x[$i]=$x[$r];
    $x[$r]=$h;
}
//Ausgabe:
foreach ($x as $item)
{
    echo("<p>$item</p>");
}

?>
</body>

</html>
