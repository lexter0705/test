<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            table{
            }
            td, th{
                padding: 10px;
            }
            th{
                background-color: black;
                color: white;
            }
            td{
                background-color: gray;
                color: black;
            }

        </style>
    </head>
    <body>
        <form action="AdmPannel.php" method="post">
            <h3>Пароль:</h3>
            <br>
            <input type="password" name="password">
            <button name="buttonpasword">Отправить</button>
        </form>
        <?php
            include 'connect.php';
            $password = $_POST['password'];
            if ($password == 'UTer2021'){
                echo '<form action="obr.php" method="post"><h1>Добавление</h1><h3>Введите  название товара:</h3><br><input type="text" name="name"><br><h3>Введите Цену товара:</h3><br><input type="number" name="number">';
                echo '<br><h3>Вывести на главную (1 - да, 0 - нет):</h3><br><input type="number" name="YAN" min="0" max="1"><br><h3>Описание</h3><textarea name="ops"></textarea><br><h3>Фото (Введите название фотографии):</h3><input type="text" name="img"><br><h3>Фото 2 (Введите название второй фотографии):</h3><input type="text" name="img2"><br><br><h3>Фото 3 (Введите название третьей фотографии):</h3><input type="text" name="img3"><br><button id="OTP">Отправить</button></form>';
                echo '<form action="delete.php" method="post"><h1>Удаление:</h1><br><h3>Введите ID:</h3><br><input type="number" name="id"><br><button>Отправить</button></form><table><tr><th>ID</th><th>Название</th></tr>';
                $results = $mysql->query("SELECT * FROM `towars_tbl`");
                $results = mysqli_fetch_all($results);
                foreach ($results as $result){
                    echo'<tr><td>'.$result[0].'</td><td>'.$result[1].'</td></th>';
                }
                echo "</table></body></html>";
            }
        ?>