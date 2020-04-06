<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
</head>

<body>
<h1>Glückszahl</h1>
<p>Dieses Programm erstellt dir eine Glückszahl zwischen 0 und der von dir eingegebenen Zahl:</p>
<form action="glueck2.php" method="POST">
<p>Gib die Maximalzahl an: 
<input type="text" name="zahl" /></p>
<input type="submit"/>
</form>

<?php
if (isset($_POST["zahl"]))
{
echo "<p>Deine Glückszahl ist:";

$x=rand(1,$_POST["zahl"]);
echo $x;
echo "</p>";

}
?>

</body>

</html>
