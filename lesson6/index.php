<?php

//"1. Реализовать форму которая содержит поля Name, Email, Message и кнопку отправки.
//При клике на Submit, данные полей сохраняются в Cookie с ключем submissions.
//Под формой вывести таблицу с предыдущими отправками.
//Может быть более чем 1 запись с данными (Name, Email, Message)  в $_COOKIE['submissions'].
//Подсказка: массив данных нужно переводить в строку.
//
//2. Продолжение задачи 1. Если записей в $_COOKIE['submissions'] больше 10, перезаписывать старые отправки."


//$userName = $userEmail = $userMessage = "";
//$errorMsg = "";
//if (isset($_POST['click'])) {
//    setcookie('name', 'value', 0,'/');
//    header('Location: http://localhost');
//    exit;
//    print("Name: " . $_POST['name']);
//    print("<br>Email: " . $_POST['email']);
//    print("<br>Сообщение: " . $_POST['message']);
//}
?>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Forma</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style ="text/css">
            table{
                border:1px solid black;
                margin-top:30px
            }
            td,tr{
                border:1px solid black;
            }
        </style>
    </head>
    <body>
    <form action="index.php" method="POST" name="Form">
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="Name" required="required">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" name='click' class="btn btn-primary">Send</button>


    </form>
    <?php
    $host= "localhost";
    $usernname= "root";
    $password= "root";
    $database= "test";
    $dbconnect = mysqli_connect($host,$usernname, $password) or die("cannot connect");
    mysqli_select_db($dbconnect, $database);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $sql = "INSERT INTO 'mytable' ('name', 'email', 'message') VALUES (':name', ':email', ':message')";
//    $new_values = array(
//        'email' => $_POST["email"],
//        'name' => $_POST["name"],
//        'message' => $_POST["message"]
//    );

//    $data = json_decode($_COOKIE['submissions'], true);
//
//    if($data[10] == null) {
//        $old_index = json_decode($_COOKIE['old_submission_index'], true);
//
//        if ($old_index == null || $old_index == 9) {
//            $old_index = 0;
//
//        } else {
//            $old_index += 1;
//
//            setcookie('old_submission_index', json_encode($old_index), time()+3600);
//        }
//
//        $data[$old_index] = $new_values;
//
//        $values = $data;
//    } else {
//
//        $values = array_push($data, $new_values);
//    }
//
//    setcookie('submissions', json_encode($values), time()+3600);


    $html="<table>";
    $html.="<tr>";
    $html.="<td>";
    $html.=$_POST['name'];
    $html.="</td>";
    $html.="<td>";
    $html.=$_POST['email'];
    $html.="</td>";
    $html.="<td>";
    $html.=$_POST['message'];
    $html.="</td>";
    $html.="</tr>";
    $html.="</table>";
    echo $html;
    ?>
    </body>
    </html>





