<?php

//"1. Реализовать форму которая содержит поля Name, Email, Message и кнопку отправки.
//При клике на Submit, данные полей сохраняются в Cookie с ключем submissions.
//Под формой вывести таблицу с предыдущими отправками.
//Может быть более чем 1 запись с данными (Name, Email, Message)  в $_COOKIE['submissions'].
//Подсказка: массив данных нужно переводить в строку.
//
//2. Продолжение задачи 1. Если записей в $_COOKIE['submissions'] больше 10, перезаписывать старые отправки."

$NameErr = $ageErr = "";
$ame = $Email = $age = "";
$lastName = test_input($_POST["lastName"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
        $firstNameErr = "First name is required";
    } else {
        $firstName = ($_POST["firstName"]);
    }

    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } else {
        $age = test_input($_POST["age"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "<h2>Приятно познакомиться:</h2>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";
echo $age;