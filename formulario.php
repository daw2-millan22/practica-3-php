<?php
	session_unset()
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>
    <?php include "horaio.php" ?>
	<form method="post" action="formularioRes.php">
   <p>De que color quieres el texto:
   	<input type="color" name="color">
   </p>
   <p>Que fuente quieres usar: 
    <select name="fuente" id="textoFuente">
    	<option value="arial">Arial</option>
    	<option value="calibri">Calibri</option>
    	<option value="verdana">Verdana</option>
    	<option value="helvetica">Helvetica</option>
    </select>
   </p>
   <p>
   		De que tamaño quieres la fuente:
   		<input type="number" name="Tamanio" id="textoTamanio">
   </p>
   <p>
       Quieres guardar los datos en una cookie:
       <input type="checkbox" name="datosCookie">
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
</body>
</html>