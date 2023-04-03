<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/index.css">

<?php
    session_start();
    include "cabecalho.php";
?>
<form action="" id="form">
<h1 class="text-center" id="title">Jartins Parking</h1>
<?php 
    if (isset($_SESSION['login'])){

        echo '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Bem-vindo '.$_SESSION['login'].'!! </h4>';
    }
    else{
        echo '<div class="alert alert-warning" role="alert" id="form">
        <h4 class="alert-heading" id="h4">Você não está autenticado </h4>
        <p> Continue para a tela de login</p>';
    }
?>
<p class="text-center">
    <a class="btn btn-lg btn-block btn-secondary" id="loginButton" href="login.php">Continua</a>
</p>

<?php
  include "rodape.php";
?>
</form>