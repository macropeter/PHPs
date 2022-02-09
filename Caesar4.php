<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies setzen</title>

    <?php
    function caesar($x,$k)
    {
        $erg="";
              for ($i=0;$i<strlen($x);$i++)
              {
                  $hlf=ord($x[$i])+$k;
                  if ($hlf>=97+26)
                      $hlf-=26;
                  $erg.=chr($hlf);
              }
              return $erg;
          }
?>

</head>
<body>

  <h1>Cäsarmethode</h1>
  <form action="Caesar4.php" method="POST">
    <p>Gib den String ein, der kodiert werden soll:
      
    
    
<?php                                          
echo('<input type="text" name="Eingabe" value="');

if (isset($_POST["Button"]))
{
   echo(caesar($_POST["Eingabe"],$_POST["key"]));       
}

echo('"/>');
    ?>

    </p>
    <p>
    <input type="text" name="key" value="3"/>
      </p>
    <p>
    <input type="submit"
	   name="Button"
           value="Los!"/>
    </p>
 </form>
</body>
