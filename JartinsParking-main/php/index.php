<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/index.css">

<body id="background">
    <?php
        session_start();
        include "../php/view/cabecalho.php";
    ?>
    <form action="" id="form">
        <h1 class="text-center" id="title">Jartins Parking</h1>
        <div class="alert alert-warning" role="alert" id="form">
            <h4 class="alert-heading" id="h4">Você não está autenticado </h4>
                <p> Continue para a tela de login</p>
        
        <p class="text-center">
            <a class="btn btn-lg btn-block btn-secondary" id="loginButton" href="../php/view/login.php">Continua</a>
        </p>
    </form>
</body>
