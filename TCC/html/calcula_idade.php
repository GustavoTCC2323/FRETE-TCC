<?php

include "./exibe_id.php";

$data =  $row['data_nascimento'];
$diasD = explode("-",$data);
//Data atual
$dia = date ('d');
$mes = date ('m');
$ano = date ('Y');
//Data do aniversário
$dianasc = ($diasD[2]);
$mesnasc = ($diasD[1]);
$anonasc = ($diasD[0]);
 //Calculando sua idade
 $idade = $ano - $anonasc;
if ($mes < $mesnasc){
    $idade -= 1;
}
elseif ($mes == $mesnasc and $dia <= $dianasc) {
    $idade -= 1;
}

?>