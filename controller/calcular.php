<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <title>Desafio</title>
</head>

<body>
  <div class="content">
    <div class="form">
      <h1>Notas Entregues: </h1>
      <?php calcular($_POST["entrada"]) ?>
      <a class="submit" href="../index.html">Voltar</a>
    </div>
  </div>
</body>

</html>


<?php

function calcular($entrada){

  if (($entrada <= 0) || ($entrada > 10000)) {
    echo " <div class='resultado'> <p>Por favor colocar um valor válido</p></div>";
    return;
  }

  $valor2 = 0; 
  $valor5 = 0;
  $valor10 = 0;
  $valor20 = 0;
  $valor50 = 0;
  $valor100 = 0;
  $valor200 = 0;

  while ($entrada > 0 ) {
    
    switch ($entrada) {
      case($entrada >= 200):
          $valor200++;
          $entrada = $entrada - 200;
      break;
      case ($entrada >= 100):
        $valor100++;
        $entrada = $entrada - 100;
        break;
      case ($entrada >= 50):
        $valor50++;
        $entrada = $entrada - 50;
        break;
      case ($entrada >= 20):
        $valor20++;
        $entrada = $entrada - 20;
        break;
      case ($entrada >= 10):
        $valor10++;
        $entrada = $entrada - 10;
        break;
      case (($entrada >= 5) && ($entrada % 2 == 1)):
        $valor5++;
        $entrada = $entrada - 5;
        break;
      case (($entrada >= 2) && ($entrada % 2 == 0)):
        $valor2++;
        $entrada = $entrada - 2;
      break;
      default:
        $entrada = 0;
        echo " <div class='resultado'> <p>O caixa eletrônico não consegue devolver este valor.</p></div>";
        return;
      break;
    }     
  }
  
  echo "<div class='resultado'> 
        <p>".$valor200." notas de R$200,00</p>  
        <p>".$valor100." notas de R$100,00</p> 
        <p>".$valor50." notas de R$50,00</p>  
        <p>".$valor20." notas de R$20,00</p>  
        <p>".$valor10." notas de R$10,00</p>  
        <p>".$valor5." notas de R$5,00</p>  
        <p>".$valor2." notas de R$2,00</p></div>";
}