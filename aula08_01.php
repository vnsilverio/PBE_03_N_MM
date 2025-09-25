<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01</title>
</head>
<body>
    <h1>Aula 08_01 - 25/09/25</h1>
    <h2>Relacionais</h2>
  
  <?php
  $a=10;
  $b="10";
  echo "Igualdade = ".($a==$b)."<br>"; //verdadeiro/true
  echo "Idêntico = ".($a===$b)."<br>"; //falso/false pois possui o mesmo valor mas nao o mesmo tipo
  echo "Não igual = ".($a!=$b)."<br>"; //falso/false pois são iguais
  echo "Não Idêntico = ".($a!==$b)."<br>";//verdadeiro/true pois são identicos

//duas coisas iguais não são identicas, mas duas coisas identicas são iguais.
//a negação não quer dizer que algo é false/falso


  $a=10;
  $b=10;
  $c=11;
  echo "Menor: ".($a<$b)."<br>"; //false
  echo "Menor ou igual: ".($a<=$b)."<br>"; //menor OU igual /true
  echo "Maior: ".($c>$b)."<br>"; //true
  echo "Maior ou igual: ".($c>=$b)."<br>";//true

/*
=   atribuir/ receber
==  iguais
=== identicos 
*/
  ?>

   <h2>Operadores Lógicos</h2>

  <?php
  $a=50;
  $b=120;
  $c= ($a<=$b); //true
  $d= !($a<=$b); //false
  var_dump($c);
  echo "<br>";
  var_dump($d);
  $e=(($a<=$b) && ($a>=200)); //false  pois apenas uma das condições é verdadeira
  echo "<br>";
  var_dump($e);
  $f=(($a<=$b) || ($a>=200)); // true  pois uma condição é verdadeira 
  echo "<br>";
  var_dump($f);
  $g=(($a<=$b) xor ($a>=200)); // true  pois as cindições são diferentes 
  echo "<br>";
  var_dump($g);
  ?>

  
  <h2>Operador Ternário</h2>
  <?php
  $a=50;
  $b=120;
  $c=200;
  $d=($a<=$b) ? "Verdadeiro" : "Falso";
  $e=($a>=$c) ? "Verdadeiro" : "Falso";
  echo "d = $d<br>e = $e";
  ?>

  

  
</body>
</html>
