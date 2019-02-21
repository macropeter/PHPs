<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>

<body>
<?php     
$user=array('Alice','Bob');
$pw=array('03AC674216F3E15C761EE1A5E255F067953623C8B388B4459E13F978D7C846F4','D74FF0EE8DA3B9806B18C877DBF29BBDE50B5BD8E4DAD7A3A725000FEB82E8F1');


$name=$_POST['string'];
$hashwort=strToUpper(hash("sha256",$_POST['pw'])); //notwendig, weil sonst mit Kleinbuchstaben dargestellt

if ($name=='Bob')
{
   
    if ($hashwort==$pw[1])
    {
        echo("Login ok");
    }
    
}
else
    {echo("Anmeldung nicht möglich");}

echo($hashwort);
echo('<br/>');
echo($pw[1]);


?>
	



</body>

</html>
