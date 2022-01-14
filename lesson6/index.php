<?php

//"1. Реализовать форму которая содержит поля Name, Email, Message и кнопку отправки.
//При клике на Submit, данные полей сохраняются в Cookie с ключем submissions.
//Под формой вывести таблицу с предыдущими отправками.
//Может быть более чем 1 запись с данными (Name, Email, Message)  в $_COOKIE['submissions'].
//Подсказка: массив данных нужно переводить в строку.
//
//2. Продолжение задачи 1. Если записей в $_COOKIE['submissions'] больше 10, перезаписывать старые отправки."


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style ="text/css">
    body {
        margin: 5%;
    }
    table{
        border:1px solid black;
        margin-top:30px
    }
    td,tr{
        border:1px solid black;
        padding: 10px;
    }
    </style>
</head>

<body>
<form action="" method="POST" name="Form">
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
if (!isset($_COOKIE['submissions'])) $_COOKIE['submissions'] = "[]";
if (!isset($_COOKIE['position'])) $_COOKIE['position'] = 0;

$data = json_decode($_COOKIE['submissions'], true);
$position = json_decode($_COOKIE['position'], true);

if (!empty($_POST)) {

    $new_values = array(
        'name' => $_POST["name"],
        'email' => $_POST["email"],
        'message' => $_POST["message"]
    );
    unset($_POST);

    $data[$position] = $new_values;
    $position = $position + 1;
    if ($position >= 10) $position = 0;

    setcookie('position', $position, time()+3600);
    setcookie('submissions', json_encode($data), time()+3600);
}
?>

<?php if($data): ?>
    <table>
        <?php foreach($data as $submission):?>
        <tr>
            <td><?php echo $submission['name']; ?></td>
            <td><?php echo $submission['email']; ?></td>
            <td><?php echo $submission['message']; ?></td>
        <tr>
            <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>