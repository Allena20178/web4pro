<?php

//"1. Используй While, выведи на экран числа от 0 до 100, при этом пропусти числа 13 и 99.
//
//2. ""Создать масив с постами/статьями(для примера мин 6 записей) каждая запись содержит title, content, author. Где title и author обязательное поле, content может быть пустым.
//Необходимо вывести на страницу список записей (title, content, author), по 4 на страницу.
//Фон каждой второй записи должен быть светлосерым.
//Реализовать простую пагинацию, при клике на которую в url будет добавляться атрибут ?page=n, где n - номер страници."""
//

//Задание 1
$i = 0;
while ($i < 100)
{
    $i++;
    if($i==13 or $i==99) continue;
    echo $i . PHP_EOL;
}

//Задание 2
$main_array = [
    ['title'=>'first', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first', 'content'=>'first_cont', 'author'=>'author1']
];

$call_pages = round( count($main_array)/4);
echo $call_pages;
$counter = 0;
if (!empty($_GET['page'])){
    $page = $_GET['page'];
    if ($page==2){
        '';
    }
}
foreach ($main_array as $item){
    if ($counter <= 4){
        print_r($item);
    }
   $counter++;
}
for ($i=1; $i<=$call_pages;$i++){
    echo "<a href='?page=$i'><button>$i</button></a>";
}



