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
                </td></form>";
       
      
      
       ;date_default_timezone_set("America/Sao_Paulo");
       $entrada = $veiculos['entrada'];
       $saida = date("Y-m-d H:i:s");  
       $permanencia = ceil(((strtotime($saida) - strtotime($entrada))/3600));
          
    }
    
    echo "</table>";
        
    ?>  
       <form action="../model/veiculosFora.php" method="post" class="form-horizontal">  
       
              <p><b>
              </b> &nbsp; <input  type="hidden" name="ID" value = "<?php   echo $ID;?>"></p>

              <p><b>Entrada:
              </b> &nbsp; <input readonly type="datetime-local" name="entrada" value = "<?php   echo $entrada;?>"></p>

              <p><b>Saída:
              </b> &nbsp; <input readonly type="datetime-local" name="saida" value = "<?php   echo $saida;?>"></p>

              <p><b>Permanência:
              </b> &nbsp; <input readonly name="Permanencia" value ="<?php echo $permanencia;?>"></p>     

              <p><b>Convênio:
              </b> <select name="Convenio"  class="form-control">
                     <option value=""></option> 
                            <?php                  
                            $lojas=mysqli_query($conn,"select * from lojas");
                            while ($loja=mysqli_fetch_array($lojas)) {?>
                            <option value="<?php echo $loja['loja'];?>"><?php echo $loja['loja'];?></option> 
                            <?php } ?>             
                     </select></p>

              <?php                   
              $resultado=mysqli_query($conn,"select * from tarifas");
                           
              while ($tarifas=mysqli_fetch_array($resultado)){
                     $tarifa = $tarifas['tarifa'];
              }
              ?>  
              
              <div class="form-group">
          
                     <label for="Status">Status</label>
                     <input id="color" type="text" class="form-control" name="Status" placeholder="Dentro ou Fora">
              </div>   

              <button type="submit" class="btn btn-lg btn-block btn-primary" id="cadastrarBt">Retirada</button>
       </form>
       
       <?php 
       include "rodapeMenu.php";
       ?>            
</body>






