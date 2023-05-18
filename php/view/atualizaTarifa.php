<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/cadastroVeiculo.css">
<link rel="stylesheet" href="../../css/atualizaTarifa.css">

<body id="background">
<?php
    include "cabecalho.php";
?>
    <h1 class="text-center">Tarifa</h1>

    <form method="post" action="../model/cadastraBdTarifa.php">
    <div class="form-group">
        <label for="tarifa">Tarifa</label>
        <input type="number" class="form-control" name="tarifa" placeholder="Digite o valor da tarifa">
    </div>
    <div class="form-group">
          <?php 
          ;date_default_timezone_set("America/Sao_Paulo");
          $entrada = date("Y-m-d H:i:s");?>
          <label for="entrada">Entrada:</label>
          <input id="color" class="hora" readonly type="datetime-local"  name="entrada" value = "<?php echo $entrada;?>">
      </div>

    <form method="post" action="tarifa.php">
        <button class="btn btn-lg btn-block btn-info" id="teste">Atualizar tarifa</button>
</form>
<?php
	 include "rodapeAdmin.php";
?>
</body>