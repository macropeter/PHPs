<html>
<head>

</head>

<body>
<?php
$n=10;//Anzahl der Elemente
$x=[]; //leeres Array erstellen
for ($i=0;$i<$n;$i++)
{
    $x[]=$i;
}
var_dump($x);

for ($i=0;$i<1000;$i++)
{
    $p1=rand(0,$n-1);
    $p2=rand(0,$n-1);
    //Dreieckstausch:
    $h=$x[$p1];
    $x[$p1]=$x[$p2];
    $x[$p2]=$h;
}

foreach ($x as $item)
{
    echo("<p>$item</p>");
}



?>
</body>

</html>
