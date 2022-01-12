<?php
//"Написать функцию, которая получает в качестве аргумента сумму денег (в гривне) и возвращает массив значений сконвертированых в Евро, Доллары.
//Например, передаем 100, на выходе ['US' => 2680, 'EUR' => 3050]"

 function currency_exchange($num)
 {
     $dollars = 26.80;
     $euro = 30.50;
     $exchange1 = $num * $dollars;
     $exchange2 = $num * $euro;
     return ['US' => $exchange1, 'EUR' => $exchange2];
 };
print_r(currency_exchange(100));