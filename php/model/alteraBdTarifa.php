<?php
	$tarifa = $_POST['tarifa'];
	$entrada =  $_POST['entrada'];

	include "../../config/conecta.php";
	$query=mysqli_query($conn, "update tarifas set tarifa='$tarifa',entrada='$entrada'");
	
	
	include "../view/sucessoRetiradaAdmin.php";

?>


