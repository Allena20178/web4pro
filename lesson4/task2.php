<?php
//2. Реализовать функцию которая будет выводить фразу в обратном порядке, например ""As soon as possible"" =>  ""possible as soon As"""

$b = 'hello world';
function mb_rev($str): string
{
    $long = "";
    for($i = mb_strlen($str); $i>=0; $i--){
        $long .= mb_substr($str, $i,1);
    }
    return $long;
}
echo mb_rev($b);