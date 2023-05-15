<?php
        session_start();
        include_once('../config/conecta.php');

          $ID=$_POST['ID'];
          $Saida = $_POST['Saida'];
          $Convenio = $_POST['Convenio'];
          $Permanencia= $_POST["Permanencia"];
          $TarifaEstacionamento=$_POST['TarifaEstacionamento'];
          $Status = $_POST["Status"];
          $desconto = $_SESSION['tarifa']/2;

          if($Convenio!=''){
            $TarifaEstacionamento=$TarifaEstacionamento-$desconto;
          }
        
           $query=mysqli_query($conn, "update tabela_veiculo set Status='$Status',TarifaEstacionamento='$TarifaEstacionamento', Convenio='$Convenio', Saida='$Saida' where ID='$ID'");
            
           if(!$query){
              echo mysqli_error($conn);
          }else{
            header("location:../views/gerenciar_veiculos_fora.php?ID=$ID");
          }
          $query=mysqli_query($conn, "update tabela_loja set Saldo=Saldo + $desconto where NomeLoja='$Convenio'");
            
           if(!$query){
              echo mysqli_error($conn);
          }else{
            header("location:../views/gerenciar_veiculos_fora.php?ID=$ID");
          }
?>