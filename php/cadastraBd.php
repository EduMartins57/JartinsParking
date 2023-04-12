<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/autentica.css">

<?php
	
	$tipo = $_POST['tipo'];
	$nome = $_POST['nome'];
	$login =  $_POST['login'];
	$senha =  $_POST['senha'];

	if(!$login || !$senha)
	{
	    include "erro.php";
	    exit;
	}

	include "conecta.php";
	$senha=md5($senha);
	$query = "insert into Usuario (tipo, nome, login, senha) values ('$tipo','$nome','$login','$senha')";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	include "sucesso.php";
