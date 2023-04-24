<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/alteraSenha.css">
<link rel="stylesheet" href="../../css/cadastra.css">

<?php
    session_start();
    include "cabecalho.php";
?>
    <body id="background">
    <h1 class="text-center">Como usuário comum, você pode alterar sua senha</h1>

    <form method="post" action="../model/alteraBd.php">
        <div class="form-group">
            <label for="login">E-mail</label>
            <input id="color" type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label for="senha">Nova Senha</label>
            <input id="color" type="password" class="form-control" name="senha1">
        </div>
        <div class="form-group">
            <label for="senha">Repita Nova Senha</label>
            <input id="color" type="password" class="form-control" name="senha2">
        </div>
         <button type="submit" class="btn btn-lg btn-block btn-primary" id="alterarBt">Alterar</button>
    </form>
</body>
<?php
    include "rodape.php";
?>