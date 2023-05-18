<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/ListarVeiculos.css">

<body id="background">
<?php
    
    session_start();
    include "cabecalho.php";
    date_default_timezone_set('America/Sao_Paulo');
    echo '<h1 class="text-center" id="title">JARTINS PARKING</h1>';
    echo '<h3 class="text-center" id="h3">Carros no estacionamento</h3>';
    echo "<table class = 'table table-striped table-bordered'>";
    include "../../config/conecta.php";
    $resultado = mysqli_query($conn, "select * from veiculos");

    while($veiculos = mysqli_fetch_assoc($resultado)) {
      
                echo "<form action='visualizaVeiculos.php' method='post'><tr><td id='excluiVeiculo'>
                <input type='text' name='ID' readonly
                       value=".$veiculos['ID'].">
                <input type='text' name='automovel' readonly
                       value=".$veiculos['automovel'].">
                <input type='text' name='placa' readonly
                       value=".$veiculos['placa'].">
                <input type='text' name='modelo' readonly
                       value=".$veiculos['modelo'].">
                <input type='text' name='cor' readonly
                       value=".$veiculos['cor'].">
                <input type='text' name='marca' readonly
                       value=".$veiculos['marca'].">
                </td>";
                     
       ?>    
        
       <td id='excluiVeiculo'><p class='text-center'>
            <a class='btn btn-lg btn-block btn-secondary' id='loginButton' 
              href="visualizaVeiculos.php?ID=<?php echo $veiculos['ID'];?>">Detalhe</a></p></td>             
                       
       <?php 
          }   
       ?>
        
    <?php
    echo "</table>";
        include "rodapeMenu.php";
        ?>  
</body>


