<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/sucesso.css"> 

<body id="background">
	<?php
		$automovel = $_POST['automovel'];
		$placa =  $_POST['placa'];
		$modelo =  $_POST['modelo'];
		$cor = $_POST['cor'];
		$marca =  $_POST['marca'];
		$entrada =  $_POST['entrada'];

		include "../../config/conecta.php";
		$query = "insert into veiculos (automovel, placa, modelo, cor, marca, entrada) 
			values ('$automovel','$placa','$modelo', '$cor', '$marca', '$entrada')";
		mysqli_query($conn,$query) or die(mysqli_error($conn));
		include "../view/sucessoCadastro.php";

	?>
</body>

