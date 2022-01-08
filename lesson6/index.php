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

        <script>
            function addNewRow(val1, val2, val3){
                const tbl = document.getElementById('Table');
                const tblValue = tbl.innerHTML;
                tbl.innerHTML = tblValue + '<td><td>'+val1+'</td><td>'+val2+'</td></td>'+val3+'</td></tr>';
            }
        </script>

    </form>
    <?php
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


<?php
//setcookie("name", $value, time()+3600);
//setcookie("email", $value, time()+3600);
//setcookie("message", $value, time()+3600);
//print_r($_COOKIE);

//if ($_POST) {
//    echo '<pre>';
//    echo htmlspecialchars(print_r($_POST, true));
//    echo '</pre>';
//}

?>


