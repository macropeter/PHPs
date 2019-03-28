<html>
<head>
<meta charset="utf-8"/>
</head>

<body>
<?php
$n=10;//Anzahl der Elemente
$x=[]; //leeres Array erstellen
for ($i=0;$i<$n;$i++)
{
    $x[]=rand(1,100);
}
var_dump($x);


for ($j=0;$j<$n;$j++)
{
    $max=$j;

    for ($i=$j+1;$i<$n;$i++)
    {
        if ($x[$i]<$x[$mini])
        {
            $mini=$i;//$i ist das neue $mini!
        }
    }
    //Dreieckstausch:
    $h=$x[$j];
    $x[$j]=$x[$mini];
    $x[$mini]=$h;
}

//Ausgabe des Arrays:
foreach ($x as $item)
{
    echo("<p>$item</p>");
}

?>
</body>

</html>
