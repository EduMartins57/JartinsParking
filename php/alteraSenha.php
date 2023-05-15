﻿<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/alteraSenha.css">

<?php
    session_start();
    include "cabecalho.php";
?>
    <h1 class="text-center">Como usuário comum, você pode alterar sua senha</h1>

    <form method="post" action="alteraBd.php">
        <div class="form-group">
            <label for="login">E-mail</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label for="senha">Nova Senha</label>
            <input type="password" class="form-control" name="senha1">
        </div>
        <div class="form-group">
            <label for="senha">Repita Nova Senha</label>
            <input type="password" class="form-control" name="senha2">
        </div>
         <button type="submit" class="btn btn-lg btn-block btn-primary" id="alterarBt">Alterar</button>
    </form>
<?php
    include "rodape.php";
?>