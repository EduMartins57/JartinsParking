<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/login.css">

<body id="background">
    <?php
        session_start();
        include "cabecalho.php";
    ?>

    <h1 class="text-center">Autenticação</h1>
    <?php 
        if (isset($_SESSION['tipo'])){

            echo "<h3 class='text-center'>".$_SESSION['tipo']."</h3>";
            if ($_SESSION['tipo']=='administrador')
            header("Location: admin.php", );
            else 
                header("Location: home.php", );
        }
        else
            echo "<h3 class='text-center'>Você não está autenticado</h3>";
    ?>
        
    <br>
    <form method="post" action="autentica.php" id="form">
        <div class="form-group">
            <label for="login">E-mail</label>
            <input id="color" type="text" class="form-control" name="login" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input id="color" type="password" class="form-control" name="senha" placeholder="Senha">
        </div>
        
        <button type="submit" class="btn btn-lg btn-block btn-primary" id="autenticarBt">Autenticar</button>
    </form>

    <form method="post" action="cadastra.php">
        <button class="btn btn-lg btn-block btn-info" id="criaConta">Criar Nova Conta</button>
    </form>
    
    <form method="post" action="alteraSenha.php">
        <button class="btn btn-lg btn-block btn-info" id="esqueceConta">Esqueci minha senha</button>
    </form>
<?php
  include "rodape.php";
?>
</body>