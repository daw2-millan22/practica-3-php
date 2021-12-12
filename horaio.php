<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php

		$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$diastotalmes = date('t');
		$diaactualmes = date('d');
		$mesactual = date('n');
		$entero = 12;
		echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')."<br>" ;

		echo "Ayer era " .$diassemana[date('N')-1]. "<br>";
		echo "El mes anterior era " .$meses[date('n')-2]."<br>";
		echo "Quedan " .$diastotalmes-$diaactualmes. " dias para acabar el mes<br>";
		echo "Quedan " .$entero-$mesactual. " meses para acabar el año<br>";
		echo "Sitio desarrollado por: Ricardo Millán <br>";
		if($mesactual<=3){
			echo "Buen invierno";
		}else if($mesactual<=6){
			echo "Buena primavera";
		}else if($mesactual<=9){
			echo "Buen verano";
		}else if($mesactual){
			echo "Buen otoño";
		}

		for($i=0;$i<10;$i++){
			echo "<br>";
		}
	?>
	<a href="formulario.php"> siguiente</a>
</body>
</html>