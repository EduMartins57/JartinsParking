<?php
	include "../../config/conecta.php";
	$id=$_POST['id'];
	$query = "delete from Usuario where login = '".$id."'";
	
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn))
		header("Location: ../view/admin.php");
	else
		header("Location: ../view/erro.php");

?>