<?php
	include "../../config/conecta.php";
	$id=$_REQUEST['ID'];
	$query = "delete from veiculos where ID ='".$id."'";
	
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn))
		header("Location: ../view/sucessoRetirada.php");
	else
		header("Location: ../view/erroAdmin.php");

?>
