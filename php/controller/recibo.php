<!doctype html>
<html  lang="pt-br">
  <head>   
      <title>Jatins Parking</title>
  </head>        
             
<?php
  include "../../config/conecta.php";
  $ID=$_GET['ID'];
  $ret=mysqli_query($conn,"select * from veiculos where ID='$ID'");
  $cnt=1;
  while ($row=mysqli_fetch_array($ret)) {
?>

<div  id="exampl">
  <table border="1" class="table table-bordered mg-b-0">
    <tr>
      <th colspan="4" style="text-align: center; font-size:22px;">Jatins Parking estacionamento</th>
    </tr>
    <tr>
      <th>ID</th>
      <td><?php  echo $row['ID'];?></td>
      <th>Modelo</th>
      <td><?php  echo $row['modelo'];?></td>
    </tr>
    <tr>
      <th>Automovel</th>
      <td><?php  echo $row['automovel'];?></td>
      <th>Marca</th>
      <td><?php  echo $row['marca'];?></td>
    </tr>
    <th>Cor</th>
    <td><?php  echo $row['cor'];?></td>
    <th>Placa</th>
    <td><?php  echo $row['placa'];?></td>
    <tr>
        <th>Entrada</th>
        <td><?php  echo $row['entrada'];?></td>
        <th>Saída</th>
        <td><?php  echo $row['saida'];?></td>  
    </tr>
    <th>Convenio	</th>
        <td><?php  echo $row['Convenio'];?></td> 
    <th>Status</th>
        <td> <?php  
          if($row['Status']=="")
          {
            echo "Veiculo Dentro";
          }
          if($row['Status']=="Fora")
          {
            echo "Veiculo Fora";
          };?>
        </td>
    <tr>
        </tr>
  </table>
  <a href="reciboxml.php?ID=<?php echo $row['ID'];?>"><i><img src="../../images/printer.png"/></i> </a>
          
<?php }?>
</div>
          