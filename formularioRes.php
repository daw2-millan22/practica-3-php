<?php

	$color = $_POST['color'];
	$fuente = $_POST['fuente'];
	$tamanio = $_POST['Tamanio'];

	echo "<font color = $color>";
	echo "<font face = $fuente>";
	echo "<font size = $tamanio>";
	echo " ESTE ES EL TEXTO DE PRUEBA";
	echo " </font></font></font>";

	$datosCookie = isset($_POST['datosCookie']) ? $_POST['datosCookie'] : null;


	//$datosCookie=null;
	
	//$datosCookie = $_POST['datosCookie'];

	if($datosCookie!=null){
		
		setcookie("color", $_POST['color'], time() + 36000);
		setcookie("fuente", $_POST['fuente'], time() + 36000);
		setcookie("Tamanio", $_POST['Tamanio'], time() + 36000);

		echo "<br> El valor de la cookie es: ".$_COOKIE['color'].", ";
		echo $_COOKIE['fuente'].", ".$_COOKIE['Tamanio'];


	}
	
?>