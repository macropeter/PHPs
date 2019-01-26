<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
</head>

<body>
<h1>Zufallszahl</h1>

<?php
$zz=$_POST["startzahl"];
for ($i=0;$i<100;$i++)
    {
    $zz=$zz*$zz;
    $zz=intdiv($zz,100);
    $zz=$zz%10000;
    echo("<p>$zz</p>");
    }
?>

</body>

</html>
