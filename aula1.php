<?php

//variaveis
$anoNovo = "";

$nome = "Jo�o";
$sobrenome = "Rocha";
$completo = $nome.$sobrenome;//concatenacao
echo($completo);//Jo�oRocha
$completo = "$nome" " "."$sobrenome;
echo($completo);//Jo�o Rocha

echo "<br/>";//quebra de linha

exit;//o php para a execu��o

unset($nome);//limpar a vari�vel
if (isset($nome){//se $nome existe
 echo($nome);
}





?>