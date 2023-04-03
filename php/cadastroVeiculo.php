<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/cadastroVeiculo.css">

<?php
    include "cabecalho.php";
?>
    <h1 class="text-center">Novo Cadastro</h1>

    <form method="post" action="cadastraBdVeiculo.php">
    <div class="form-group">
        <label for="automovel">Veiculo</label>
        <input type="text" class="form-control" name="automovel" placeholder="Dígite teste do Veículo">
    </div>
    <div class="form-group">
        <label for="placa">Placa</label>
        <input type="text" class="form-control" name="placa" placeholder="Dígite a placa do Veículo">
    </div>
    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" name="modelo" placeholder="Dígite o modelo do Veículo">
    </div>
    <div class="form-group">
        <label for="cor">Cor</label>
        <input type="text" class="form-control" name="cor" placeholder="Dígite a cor do Veículo">
    </div>
    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" name="marca" placeholder="Dígite o marca do Veículo">
    </div>
    <div class="form-group">
        <label for="entrada">Entrada</label>
        <input type="text" class="form-control" name="entrada" placeholder="Dígite o entrada e hora do Veículo">
    </div>    
    <button type="submit" class="btn btn-lg btn-block btn-primary" id="cadastrarBt">Cadastrar</button>
    </form>

    <p class="text-center">
        <a class="btn btn-lg btn-block btn-default" id="logOutButton" href="index.php">Index</a>
    </p>
    </div> 
	</body>
</html>