<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
</head>

<body>
<h1>Zufallszahl</h1>

<?php
$zz=$_POST["startzahl"];

function myrandom()
{
    global $zz;
    $zz=$zz*$zz;
    $zz=intdiv($zz,100);
    $zz=$zz%10000;
    return $zz;
    }


for ($i=0;$i<100;$i++)
{
    echo("<p>$i: ".myrandom()."</p>");
}
?>

</body>

</html>
