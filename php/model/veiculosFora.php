<?php
	$ID =  $_POST['ID'];
	$Convenio = $_POST['Convenio'];
	$Status =  $_POST['Status'];
	$saida =  $_POST['saida'];

	
	include "../../config/conecta.php";
	$query=mysqli_query($conn, "update veiculos set Status='$Status',Convenio='$Convenio', saida='$saida' where ID='$ID'");
	
	include "../view/sucessoRetirada.php";

?>

