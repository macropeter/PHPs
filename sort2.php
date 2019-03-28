<!DOCTYPE html>

<html>

<head>

</head>
<body>

<?php
$x=[];
for ($i=0;$i<10;$i++)
{
    $x[]=rand(1,100);//wie array_push
}

var_dump($x);

for ($i=0;$i<9;$i++)
{
    for ($j=0;$j<9;$j++)
    {
        if ($x[$j]>$x[$j+1])
        {
            $h=$x[$j];
            $x[$j]=$x[$j+1];
            $x[$j+1]=$h;
        }
    }
}

foreach ($x as $item)
{
    echo('<p>'.$item.'</p>');
}

?>

</body>
</html>
