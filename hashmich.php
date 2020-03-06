<html>
  <head>
<title>Hashing</title>
</head>
<body>
<h1>Hashwert ermitteln</h1>

<form action="hashmich.php"
      method="POST">
  <input type="text" name="Eingabe">
  <input type="submit" name="Button">
</form>

<?php
     if (isset($_POST["Button"]))
     {
         $txt=$_POST["Eingabe"];
         echo(hash("sha256",$txt));
     }

?>



</body>
</html>
