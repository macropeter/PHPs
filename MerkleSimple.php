<html>

<head>

</head>

<body>



<?php
$a="ich";
$b="bin";
$c="der";
$d="Peter";

//Hashwert für jedes Wort berechnen:
$helpa=hash("sha256",$a);
$helpb=hash("sha256",$b);
$helpc=hash("sha256",$c);
$helpd=hash("sha256",$d);

//die ersten zwei zusammenhängen und hashen
//Text zusammenhängen geht in PHP mit . (nicht wie + in JS)
$help1=hash("sha256",$helpa.$helpb);
//dritten und vierten Hash zusammenhängen:
$help2=hash("sha256",$helpc.$helpd);

//
$roothash=hash("sha256",$help1.$help2);        

//Simple Ausgabe:
echo($roothash);



?>
</body>

</html>
