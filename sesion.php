<?php
session_start();
?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario</title>
</head>

<body>

<?php

	if (isset($_SESSION['Usuario'])){
	echo"<p>Hola usser:(" . $_SESSION['Usuario']. 	") [<a
	href='logout.php'>Salir</a>]</p>";
	}
	else
 	{ 
?>

 <form action= "datos.php" method="post">
 <fieldset>
 <p> Usuario </p>
 <input type ="text" name= "Usuario"/> </br>
 <p><button type="submit">Ingresar</button></p>
 </form>
<?php } ?>




</body>
</html>

