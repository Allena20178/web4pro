<?php
//"вывести отдельно ключи,отдельно значения массива  $array_list.
//Выводить в строчку,через пробел
//$array_list = array(["random_key"=>"random key"], " ",['key'=>'tttteeeessst']," ", ["string"=>"new"]);

//$array_list = ["random_key"=>"random key", " ",'key'=>'tttteeeessst'," ", "string"=>"new"];
//echo((implode($array_list)));
//print_r(array_keys($array_list));


$array_list = ["random_key" => "random key", 'key' => 'tttteeeessst', "string" => "new"];
foreach ($array_list as $key => $value) {
    echo $key, " ";
}
foreach ($array_list as $key => $value) {
    echo $value, " ";
}
