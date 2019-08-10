<?php

include 'operacao.php';
include 'soma.php';
include 'divisao.php';
include 'multiplicacao.php';
include 'subtracao.php';

do{
echo " Calculadora\n";
$valor1 = readline ("Qual o primeiro valor?");
$operacao = readline("[+], [-], [*], [/]  ");
$valor2 = readline ("Qual o segundo valor?");



switch($operacao){
  case '+':
  $som = new soma(); 
  echo $som->somatoria($valor1,$valor2);
  break;
  case '-':
  $subt= new subtracao();
  echo $subt->subtrair($valor1,$valor2);
  break;
  case '*':
  $mult= new multiplicacao();
  echo $mult->multiplicar($valor1,$valor2);
  break;
  case '/':
  $div= new divisao();
  echo $div->dividir($valor1,$valor2);
  break;
  default:
  echo "Isso não é uma operacao válida!!!\n\n";
  return 0;
  
} echo PHP_EOL.PHP_EOL;

}while( true);
