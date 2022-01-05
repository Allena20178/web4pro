<?php
//"Написать функцию, которая получает в качестве аргумента сумму денег (в гривне) и возвращает массив значений сконвертированых в Евро, Доллары.
//Например, передаем 100, на выходе ['US' => 2680, 'EUR' => 3050]"

//function currency_exchange($num)
//{
//    $dollars = 26.80;
//    $euro = 30.50;
//    $exchange1 = $num * $dollars;
//    $exchange2 = $num * $euro;
//    echo("$exchange1 \n");
//    echo($exchange2);
//}
//currency_exchange(1);
//выводит
//26.8
//30.5
$dollars = (26.80);
$euro = (30.50);
function currency_exchange()
{
    $line = fgets($handle);
    $currency_dollars += $line * $dollars;
    $currency_euro += $line * $euro;
}
var_dump (currency_exchange);