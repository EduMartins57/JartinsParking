<?php
	include "conecta.php";
	$id=$_POST['placa'];
	$query = "delete from Veiculos where placa = '".$id."'";
	
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn))
		header("Location: listarVeiculos.php");
	else
		header("");
		//Location: erro.php
?>