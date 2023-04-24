<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/ListarVeiculos.css">

<body id="background">
<?php
    session_start();
    include "cabecalho.php";
    echo '<h1 class="text-center">Histórico de tarifas</h1>';
    echo "<table class = 'table table-striped table-bordered'>";
    include "../../config/conecta.php";
    $resultado = mysqli_query($conn, "select * from lojas");

    while($lojas = mysqli_fetch_assoc($resultado)) {
        echo "<form method='post'><tr><td id='loja'>Loja
                <input type='text' name='loja'  readonly
                       value=".$lojas['loja'].">                  
                <input type='number' name='pagamentos'  readonly
                       value=".$lojas['pagamentos']."></td>";
                    }

    echo "</table>";
                
    include "rodapeAdmin.php";
?>
</body>