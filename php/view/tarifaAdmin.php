<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/cadastroVeiculo.css">

<body id="background">
<?php
    session_start();
    include "cabecalho.php";
    date_default_timezone_set('America/Sao_Paulo');
    echo '<h1 class="text-center">Tarifa Atual</h1>';
    echo "<table class = 'table table-striped table-bordered'>";
    include "../../config/conecta.php";
    $resultado = mysqli_query($conn, "select * from tarifas");

    while($tarifas = mysqli_fetch_assoc($resultado)) {
        date_default_timezone_set("America/Sao_Paulo");
        echo "<form  method='post'><tr><td id='tarifa'>Valor  
                <input type='number' name='tarifa'  readonly=''
                       value=".$tarifas['tarifa']."> Entrada        
                       <input type='datetime' name='entrada' readonly
                       value=".date("d-m-Y H:i:s",strtotime($tarifas['entrada']))."></td>";
        
                    }
                    echo "</table>";
                
    include "rodapeAdmin.php";

?>
</body>    