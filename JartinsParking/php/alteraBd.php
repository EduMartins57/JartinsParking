<?php
	
	$login =  $_POST['login'];
	$senha1 =  $_POST['senha1'];
	$senha2 =  $_POST['senha2'];


	if($senha1 != $senha2)
	{
	    header("Location: erro.php");
	    exit;
	}

	include "conecta.php";
	$query = "update Usuario SET senha = '".md5($senha1)."' where login = '$login'";
	echo $query;
	
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	header("Location: index.php");
?>
