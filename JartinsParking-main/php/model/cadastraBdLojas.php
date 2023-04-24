<?php
	$loja = $_POST['loja'];
	$pagamentos =  $_POST['pagamentos'];

	include "../../config/conecta.php";
	$query = "insert into lojas (loja, pagamentos) 
        values ('$loja','$pagamentos')";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	include "../view/sucessoRetiradaAdmin.php";
	

?>

