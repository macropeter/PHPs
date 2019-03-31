<html>
<head>

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

//Kleinstes Element suchen:
 for ($j=0;$j<$n;$j++)
 {
     $mini=$j; //zunächst gilt das erste Element als kleinstes

     for ($i=$j+1;$i<$n;$i++) //wegen $i=$j wird jetzt nur der Rest des Arrays untersucht
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

var_dump($x);

?>
</body>

</html>
