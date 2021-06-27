<?php

/**
 * --> P representação de período: vem antes de dia, mês, ano e semana
 * Y anos
 * M meses
 * D dias
 * W semanas
 * -> T representação de tempo: vem antes de hora, minuoto e segundo
 * H hora
 * M minutos
 * S segundos 
 */

$data = new DateTime();

$intervalo = new DateInterval('P5Y20M10DT5M'); //Adiona um periodo de 5 Minutos
$data->add($intervalo);  //add Adiciona e sub subtrai


var_dump($data);

