<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/index.css">
<link rel="stylesheet" href="../../css/home.css">

<body id="background">
    <?php
        session_start();
        include "cabecalho.php";
    ?>
    <form action="" id="form">
        <h1 class="text-center" id="title">Jartins Parking</h1>
    <?php 
        if (isset($_SESSION['nome'])){

            echo '<div class="alert alert-success" role="alert" id="home"><h4 class="alert-heading" id="h4">Bem-vindo '.$_SESSION['nome'].'!! </h4>';
        }
        else{
            echo '<div class="alert alert-warning" role="alert" id="form">
            <h4 class="alert-heading" id="h4">Você não está autenticado </h4>
            <p> Continue para a tela de login</p>';
        }
    ?>
	
		<p class="text-center">
            <a class="btn btn-lg btn-block btn-secondary" id="loginButton" href="cadastroVeiculo.php">Cadastro de Veiculo</a>
        </p>

		<p class="text-center">
            <a class="btn btn-lg btn-block btn-secondary" id="loginButton" href="listarVeiculos.php">Visualizar Veiculos</a>
        </p>

        <p class="text-center">
            <a class="btn btn-lg btn-block btn-secondary" id="loginButton" href="listarLojas.php">Histórico de Lojas</a>
        </p>

        <p class="text-center">
            <a class="btn btn-lg btn-block btn-secondary" id="loginButton" href="tarifa.php">Tarifa atual</a>
        </p>

    <?php
    include "rodape.php";
    ?>
    </form>
</body>
