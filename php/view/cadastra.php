<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/cadastra.css">

<html>
    <body id="background">
    <?php
        include "cabecalho.php";
    ?>
    <h1 class="text-center">Cadastro de Usuário</h1>
        <form method="post" action="../model/cadastraBd.php">
            <div class="form-group">
                <label for="tipo">Tipo de usuário</label>
                <input id="color" type="text" class="form-control" name="tipo" placeholder="Funcionário ou Administrador">
            </div>
            <div class="form-group">
                    <label for="login">Usuário</label>
                    <input id="color" type="text" class="form-control" name="nome" placeholder="Dígite seu nome">
            </div>
            <div class="form-group">
                <label for="login">E-mail</label>
                <input id="color" type="text" class="form-control" name="login" placeholder="Dígite seu E-mail">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input id="color" type="password" class="form-control" name="senha" placeholder="Dígite sua senha">
            </div>
            <button type="submit" class="btn btn-lg btn-block btn-primary" id="cadastraVeiculo">Cadastrar</button>
        </form>

        <p class="text-center">
            <a class="btn btn-lg btn-block btn-default" id="logOutButton" href="../index.php">Sair</a>
        </p>
        </div> 
	</body>
</html>