<?php
	
	$tarifa = $_POST['tarifa'];
	$entrada =  date("Y-m-d H:i:s");

	include "../../config/conecta.php";
	$query = "insert into tarifas (tarifa, entrada) 
        values ('$tarifa','$entrada')";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	include "../sucesso.php";
?>
	<p class="text-center">
        <a class="btn btn-lg btn-block btn-default" id="logOutButton" href="tarifa.php">Visualizar histórico de tarifas</a>
    </p>

