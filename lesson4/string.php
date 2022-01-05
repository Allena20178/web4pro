<?php
//"1. Вывести на экран фразу ""hello world"", при этом все буквы большие, кроме первой.
//2. Реализовать функцию которая  будет выводить фразу в обратном порядке, например ""As soon as possible"" =>  ""possible as soon As"""

//1.
$a = 'hello world';
echo lcfirst(strtoupper($a));

//2.
$b = 'hello world';
echo strrev($b);
