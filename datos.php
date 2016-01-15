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
  $_SESSION['Usuario']=$_POST['Usuario']; 
  echo "Usuario: " . $_SESSION['Usuario'];
?>

  <a href="sesion.php">Volver</a>


</body>
</html>
