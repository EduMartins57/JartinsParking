<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/cadastroVeiculo.css">

<body id="background">
    <?php include "cabecalho.php";?>
        <h1 class="text-center" id="title">Cadastro de Veiculos</h1>
        <h3 id="h3">Cadastre seu veículo no estacionamento</h3>
        
    <form method="post" action="../model/veiculosDentro.php" id="form">
        <div class="form-group">
            <label for="automovel">Veiculo</label>
            <input id="color" type="text" class="form-control" name="automovel" placeholder="Dígite Carro ou Moto">
        </div>
        <div class="form-group">
            <label for="placa">Placa</label>
            <input id="color" type="text" class="form-control" name="placa" placeholder="Dígite a placa do Veículo">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input id="color" type="text" class="form-control" name="modelo" placeholder="Dígite o modelo do Veículo">
        </div>
        <div class="form-group">
            <label for="cor">Cor</label>
            <input id="color" type="text" class="form-control" name="cor" placeholder="Dígite a cor do Veículo">
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input id="color" type="text" class="form-control" name="marca" placeholder="Dígite o marca do Veículo">
        </div>
        <div class="form-group">
          <?php 
          ;date_default_timezone_set("America/Sao_Paulo");
          $entrada = date("Y-m-d H:i:s");?>
          <label for="entrada">Entrada:</label>
          <input id="color" class="hora" readonly type="datetime-local"  name="entrada" value = "<?php echo $entrada;?>">
        </div>

        <button type="submit" class="btn btn-lg btn-block btn-primary" id="cadastrarBt">Cadastrar</button>
    </form>
    
        <?php 
        include "rodapeMenu.php";
        include "rodape.php";
        ?>
	</body>
</html>