<!DOCTYPE html>
<html>
<head>

</head>

<body>

<h1>User login</h1>

<form action="CookieZaehler.php" method="POST">
	<p>Benutzername eingeben: <input type="text" name="Name" /></p>
	<p><input type="submit" name="geklickt" value="Log in" /></p>

</form>
 
<?php
	$arr1=array("Alice","Bob","Carol");
	
	if (isset($_POST["geklickt"]))
	{
		$name=$_POST["Name"];
		if (in_array($name,$arr1))
		
		echo "<p>Willkommen, ".$name."</p>";
		if (!isset($_COOKIE[$name]))
			{
				echo "<p>Zum ersten Mal hier!</p>";
				setcookie($name,'1');
			}
		else
			{	
				$x=(int)$_COOKIE[$name];
				echo "<p>Du bist zum $x.Mal hier</p>";
				setcookie($name,(string)($x+1),time()+3600*24);
			}
		}


	
?> 
	
	



</body>

</html>
