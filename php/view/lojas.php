<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/cadastroVeiculo.css">
<link rel="stylesheet" href="../../css/lojas.css">

<body id="background">
<?php
    include "cabecalho.php";
?>
    <h1 class="text-center">Lojas</h1>

    <form method="post" action="../model/cadastraBdLojas.php">
        <div class="form-group">
            <label for="loja">Lojas conveniadas</label>
            <input type="text" class="form-control" name="loja" placeholder="Digite a loja conveniada">
        </div>
        <div class="form-group">
            <label for="pagamentos">pagamentos</label>
            <input type="number" class="form-control" name="pagamentos" placeholder="Pagamento">
        </div>
    <form method="post" action="listarLojas.php">
        <button class="btn btn-lg btn-block btn-info" id="autenticarBt">Adicionar loja</button>
    </form>
<?php
	include "rodapeAdmin.php";
?>
</body>

