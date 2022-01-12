<?php

//2. ""Создать масив с постами/статьями(для примера мин 6 записей) каждая запись содержит title, content, author. Где title и author обязательное поле, content может быть пустым.
//Необходимо вывести на страницу список записей (title, content, author), по 4 на страницу.
//Фон каждой второй записи должен быть светлосерым.
//Реализовать простую пагинацию, при клике на которую в url будет добавляться атрибут ?page=n, где n - номер страници."""


$main_array = [
    ['title'=>'first1', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first2', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first3', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first4', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first5', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first6', 'content'=>'first_cont', 'author'=>'author1'],
    ['title'=>'first7', 'content'=>'first_cont', 'author'=>'author1'],

];

$call_pages = round( count($main_array)/4);
// echo $call_pages;
$counter = 0;
$tmpArr = [];
if (!empty($_GET['page'])){
    $page = $_GET['page'];
    if ($page==2){
        for($i=4;$i<8;$i++){
            if (!empty($main_array[$i])){
                array_push($tmpArr,$main_array[$i]);

            }
//             echo "<pre>";
//             var_dump($tmpArr);
//             echo $i;
        }
    }
    else{
        for($i=0;$i<4;$i++){
            if (!empty($main_array[$i])){
                array_push($tmpArr,$main_array[$i]);

            }
//             echo "<pre>";
//             var_dump($tmpArr);
//             echo $i;
        }

    }
}
foreach ($tmpArr as $item){
    if ($counter <= 3){
        echo "<div class=pages>
           <div>$item[title]</div>
           <p>$item[author]</p>
           <p>$item[content]</p>
        </div>";
//         print_r($item);
    }
    $counter++;
}
for ($i=1; $i<=$call_pages;$i++){
    echo "<a href='?page=$i'><button>$i</button></a>";
}


?>

</body>

