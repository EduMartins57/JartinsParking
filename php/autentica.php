<?php
	
	session_start();

	$login =  $_POST['login'];
	$senha =    $_POST['senha'];
	

	if(!$login || !$senha)
	{
	    header("Location: erro.php");
	}

	include "conecta.php";

	$SQL = "SELECT * 
	        FROM Usuario
	        WHERE login = '$login' AND senha=md5('$senha')";

	$result = mysqli_query($conn,$SQL) or die("Erro no banco de dados!");

	if( mysqli_num_rows($result)>0){
		$usuario=mysqli_fetch_array($result);
		$_SESSION["login"]=$usuario['login'];
		$_SESSION["senha"]=$usuario['senha'];
		$_SESSION["tipo"]=$usuario['tipo'];
	 	header("Location:login.php");
	}
	else
	 header("Location:erro.php");
?>
