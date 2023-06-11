<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/ListarVeiculos.css">
<link rel="stylesheet" href="../../css/carro.css">
<link rel="stylesheet" href="../../css/cadastroVeiculo.css">

<body id="background">
<?php
    
    session_start();
    include "cabecalho.php";
    echo '<h1 class="text-center" id="title">JARTINS PARKING</h1>';
    echo '<h3 class="text-center" id="h3">Carro no estacionamento</h3>';
    echo "<table class = 'table table-striped table-bordered'>";
    include "../../config/conecta.php";

   
    $ID=$_POST['ID'];
    $resultado=mysqli_query($conn,"select * from veiculos where ID='$ID'"); 
    $cnt=1;
    
    while($veiculos = mysqli_fetch_assoc($resultado)) {
       $entrada = $veiculos['entrada'];
                echo "<form  method='post'><tr><td id='excluiVeiculo'>
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
                <div><p>Convênio:
                <input type='text' name='Convenio' readonly
                       value=".$veiculos['Convenio']."></div>
                <div><p>Entrada:
                <input type='datetime' name='entrada' readonly
                       value=".date("d-m-Y H:i:s",strtotime($veiculos['entrada']))."></div>
                <div><p>Saida:
                <input type='datetime' name='saida' readonly
                       value=".date("d-m-Y H:i:s",strtotime($veiculos['saida']))."></div>
              </td></form>";
    }
    echo "</table>";
        
       include "rodapeMenu.php";
       ?>            
</body>






