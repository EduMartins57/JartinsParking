<link rel="stylesheet" href="../../css/all.css">
<link rel="stylesheet" href="../../css/ListarVeiculos.css">
<link rel="stylesheet" href="../../css/carro.css">

<body id="background">
<?php
    
    session_start();
    include "cabecalho.php";
    echo '<h1 class="text-center" id="title">JARTINS PARKING</h1>';
    echo '<h3 class="text-center" id="h3">Carro no estacionamento</h3>';
    echo "<table class = 'table table-striped table-bordered'>";
    include "../../config/conecta.php";

    $ID=$_GET['ID'];
    $resultado=mysqli_query($conn,"select * from veiculos where ID='$ID'");
    $cnt=1;
    
    while($veiculos = mysqli_fetch_assoc($resultado)) {
       $entrada = $veiculos['entrada'];
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
                </td>";
       
      
       echo "<form action='removeVeiculos.php' method='post'>";
       echo "<td id='excluiVeiculo' class='excluiVeiculo'><button class='btn btn-danger'>Retirada</button></td></tr></form>"; 
       
       $entrada = $veiculos['entrada'];
       //;date_default_timezone_set("America/Sao_Paulo");
       $saida = date("Y-m-d H:i:s");  
          $permanencia = ceil(((strtotime($saida) - strtotime($entrada))/3600));
          if($permanencia>1){
           $tarifa = round(($_SESSION['tarifa'] + (($permanencia-1)*($_SESSION['tarifa']*0.5))),2);
          }
    }
    
    echo "</table>";
        
    ?>
             
       <form action="../view/fecha_conta.php"  method="POST" class="form-horizontal">      
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

              <p><b>Tarifa do Estacionamento: 
              </b><input type="hidden" class="form-control" name="TarifaEstacionamento" 
                     value="<?php echo $TarifaEstacionamento;?>" required> </p>
                     <?php echo "<pre>".$_SESSION['tarifa'].' + ('.($permanencia-1).'*'.($_SESSION['tarifa']/2).' ) = '.$TarifaEstacionamento."</pre>";?>
              
              <p><b>Status
              </b> <select type= "readonly"name="Status" class="form-control"><option value="Fora">Veiculo Fora</option>
              </select></p>
       </form>  

       <?php 
       include "rodapeMenu.php";
       ?>            
</body>






