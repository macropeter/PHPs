<!DOCTYPE html>

<html>

<head>

</head>
<body>

<?php
echo('<table border="1px solid black">');

$ugrenze=$_POST["ugrenze"];
$ogrenze=$_POST["ogrenze"];

for ($i=$ugrenze;$i<=$ogrenze ;$i++ )
{
    echo("<tr>");
    echo("<td>$i</td>");
    echo("</tr>");

    
    
}
echo("</table>");
?>

</body>
</html>
