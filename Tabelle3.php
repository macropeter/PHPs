<!DOCTYPE html>

<html>

<head>

</head>
<body>

<?php
echo('<table border="1px solid black">');


$ogrenze=$_POST["ogrenze"];

for ($i=1;$i<=$ogrenze ;$i++ )
{
    echo("<tr>");
    if ($i%5==0)
        echo("<td>plink</td>");
    else
        echo("<td>$i</td>");
    echo("</tr>");

    
    
}
echo("</table>");
?>

</body>
</html>
