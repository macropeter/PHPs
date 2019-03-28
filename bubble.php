<html>
<head>

</head>

<body>
<?php
$n=100;//Anzahl der Elemente
$x=[]; //leeres Array erstellen
for ($i=0;$i<$n;$i++)
{
    $x[]=rand(1,1000);
}
var_dump($x);

//Äußere Schleife:
for ($j=0;$j<$n-1;$j++)
{
    //Innere Schleife:
    for ($i=0;$i<$n-1;$i++)
    {
        if ($x[$i]>$x[$i+1])
        {
            //Dreieckstausch:
            $h=$x[$i];
            $x[$i]=$x[$i+1];
            $x[$i+1]=$h;
        }
    }
}
//Ausgabe des Arrays:
foreach ($x as $item)
{
    echo("<p>$item</p>");
}

?>
</body>

</html>
