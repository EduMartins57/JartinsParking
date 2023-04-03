<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/cadastra.css">

<?php
    include "cabecalho.php";
?>
    <h1 class="text-center">Novo Cadastro</h1>

    <form method="post" action="cadastraBd.php">
    <div class="form-group">
        <label for="tipo">Tipo de usuário</label>
        <input type="text" class="form-control" name="tipo" placeholder="Funcionário ou Administrador">
    </div>
        <div class="form-group">
            <label for="login">E-mail</label>
            <input type="text" class="form-control" name="login" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Senha">
        </div>
         <button type="submit" class="btn btn-lg btn-block btn-primary" id="cadastraVeiculo">Cadastrar</button>
    </form>

    <p class="text-center">
        <a class="btn btn-lg btn-block btn-default" id="logOutButton" href="index.php">Index</a>
    </p>
    </div> 
	</body>
</html>