<?php
//Написать скрипт, который создает файл text.txt и записывает в него массив чисел от 1 до 100, каждое число в новой строке.

//$file = fopen("text.txt","x+");
//$file = fwrite($file, $array);
//$file = fclose($file);


//$array = range(1,100);
//file_put_contents("text.txt", print_r($array, true), FILE_APPEND);
//$new = file("text.txt");

function array_to_file($arr){
    $file = fopen('text.txt' , 'x+');
    foreach ($arr as $value) {
        fwrite($file, $value);
    }
    fclose($file);
}

$arr = range(1,100);
array_to_file($arr);