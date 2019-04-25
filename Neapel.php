<html>

<head>
<meta charset="utf-8"/>
</head>
<body>

<?php


$db = mysqli_connect("localhost", "root", "", "Neapel");

if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}
else
{
    echo("Verbindung hergestellt!");

    $sql = "SELECT * FROM schueler where 1";
    $query=mysqli_query($db,$sql);
    //$query enthält das gesamte Abfrageergebnis als Tabelle/Objekt/Array...
    

    echo("<table border='2'>");
    
    //Zeilen als Arrays abrufen:
    while ($z=mysqli_fetch_array($query))
             {
                 echo("<tr>");
                 //Teile des Arrays herauslösen:
                 echo("<td>".$z["Vorname"]."</td>");
                 echo("<td>".$z["Nachname"]."</td>");
                 echo("</tr>");
             }
    echo("</table>");
        
    mysqli_close($db);
}
    ?>

</body>
</html>
