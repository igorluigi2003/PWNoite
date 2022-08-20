<?php
 //Comentarios em PHP - Linha
 /*

 */
 // echo "Hello world - Meu nome é Iguito";
  $idade = 32;
  $nome = "Fernando";
  $Altura = 1.77;
  $solteiro = true;
  //$solteiro = 1;
  //echo $solteiro;

  //echo 10 < 12;
  CONST IDADE = 10;

  echo IDADE;

 /* $nota1 = 6;
  if($nota1 >= 6)
  {
      echo "Aprovado";
  }

  else if($nota1 < 6 && $nota1 >= 2)
  {
      echo "Ainda tem chance";
  } */

  $nota1 = 8;
  $nota2 = 10;
  $media = $nota1+ $nota2;
  $media = $media / 2;

  if($media >= 6){
      echo "Aprovado";
  }

  else{
    echo "Reprovado";
  }




?>