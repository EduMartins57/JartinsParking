<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/ListarVeiculos.css">
<link rel="stylesheet" href="../../css/carro.css">

<body id="background">
<?php
    
    session_start();
    include "cabecalho.php";
    date_default_timezone_set('America/Sao_Paulo');
    echo '<h1 class="text-center" id="title">JARTINS PARKING</h1>';
    echo '<h3 class="text-center" id="h3">Carro no estacionamento</h3>';
    echo "<table class = 'table table-striped table-bordered'>";
    include "../../config/conecta.php";
    $resultado = mysqli_query($conn, "select * from veiculos where modelo='gol';");

    while($veiculos = mysqli_fetch_assoc($resultado)) {
       $entrada = $veiculos['entrada'];
       ;date_default_timezone_set("America/Sao_Paulo");
                echo "<form action='../controller/removeVeiculo.php' method='post'><tr><td id='excluiVeiculo'>
                <div><p>AUTOMOVEL:
                <input type='text' name='automovel' id='color' readonly
                       value=".$veiculos['automovel']."></div>
                <div><p>PLACA:
                <input type='text' name='placa' readonly
                       value=".$veiculos['placa']."></div>
                <div><p>MARCA:
                <input type='text' name='modelo' readonly
                       value=".$veiculos['modelo']."></div>
                <div><p>COR:
                <input type='text' name='cor' readonly
                       value=".$veiculos['cor']."></div>
                <div><p>MARCA:
                <input type='text' name='marca' readonly
                       value=".$veiculos['marca']."></div>
                <div><p>ENTRADA:
                <input type='text' name='entrada' readonly
                       value=".date("d/m/Y-h:i:s",strtotime($veiculos['entrada']))."></div>
                <div><p>SAÍDA:
                <input id='color' class='hora' type='calendar' value="; 
                echo"". date("d/m/Y-h:i:s")." ";" readonly></div>
                </td>";

                echo "<form action='removeVeiculos.php' method='post'>";
                echo "<td id='excluiVeiculo' class='excluiVeiculo'><button class='btn btn-danger'>Retirada</button></td></tr></form>";   
    }
    echo "</table>";
        include "rodapeMenu.php";
?>                   
</body>


