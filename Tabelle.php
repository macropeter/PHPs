<!DOCTYPE html>

<html>

<head>

</head>
<body>

<?php
echo('<table border="1px solid black">');


$ogrenze=$_POST["ogrenze"];

for ($i=0;$i<=$ogrenze ;$i++ )
{
    echo("<tr>");
    echo("<td>$i</td>");
    echo("</tr>");

    
    
}
echo("</table>");
?>

</body>
</html>
