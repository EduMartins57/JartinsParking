<!doctype html>
<html  lang="pt-br">
  <head>   
      <title>Jatins Parking</title>
  </head>        
             
<?php
  include "../../config/conecta.php";
  $ID=$_GET['ID'];
  $resultado=mysqli_query($conn,"select * from veiculos where ID='$ID'");
  if (mysqli_num_rows($resultado)){
     echo "Arquivo XML gerado com sucesso.."; 
     // Cabecalho do XML
     $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';

     // A raiz do meu documento XML
     $xml .= '<recibo>';
  
     while ($row=mysqli_fetch_array($resultado)) {
          $xml .= '<id>' . $row['ID'] . '</id>';
          $xml .= '<placa>' . $row['placa'].'</placa>';
          $xml .= '<marca>' . $row['marca'].'</marca>';
          $xml .= '<modelo>' . $row['modelo'] . '</modelo>';
          $xml .= '<entrada>' . $row['entrada'] . '</entrada>';
          $xml .= '<saida>' . $row['saida'] . '</saida>';
     }
     // Fechamento da raiz
     $xml .= '</recibo>';

     // Escreve o arquivo
     $fp = fopen('recibo.xml', 'w+');
     fwrite($fp, $xml);
     fclose($fp);
}
else{
     echo "não há recibo para imprimir";
}
?>