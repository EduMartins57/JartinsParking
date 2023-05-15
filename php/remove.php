<?php
	include "conecta.php";
	$id=$_POST['id'];
	$query = "delete from Usuario where login = '".$id."'";
	
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn))
		header("Location: admin.php");
	else
		header("Location: erro.php");

?>