<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namensliste</title>
    <style>
        td,th {
            border: 1px solid black;
        }
    </style>
    <?php
        $namen=array("Lisa","Annabell","Luisa");
    ?>
</head>
<body>
    <table>
        
        <?php
            for ($i=0;$i<=2;$i++)
            {
                echo("<tr>");
                echo("<td>");
                echo($i);
                echo("</td>");
                echo("<td>");
                echo($namen[$i]);
                echo("</td>");
                echo("</tr>");  

            }
        ?>
    </table>
</body>
</html>