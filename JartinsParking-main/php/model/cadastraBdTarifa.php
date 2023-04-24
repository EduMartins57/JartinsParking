<?php
	$tarifa = $_POST['tarifa'];
	$entrada =  $_POST['entrada'];

	include "../../config/conecta.php";
	$query = "insert into tarifas (tarifa, entrada) 
        values ('$tarifa','$entrada')";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	include "../view/sucessoRetiradaAdmin.php";

?>
