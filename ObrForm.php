<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/cartbuttonspawn.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo"><div style="color:red; display:inline-block;">Shapki</div>-handmade.ru</div>
        <div class="button_GKO telephonenumber">+7 917 511-44-77</div>
        <div class="buttons"><a href="index.php" class="button_GKO">Главная</a><a href="Katalog.php" class="button_GKO">Каталог</a></div>
   </div>
    <div class="content">
        <div class="container">




<?php
    include "connect.php";
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $home = $_POST['home'];
    $homenumber = $_POST['homenumber'];
    $kvart = $_POST['kvart'];
    $results = $mysql->query("SELECT * FROM `towars_tbl`");
    $results = mysqli_fetch_all($results);
    $obj = [];
    foreach($results as $result){
        if($_POST[$result[0]] != null){
            $obj[$result[0]] = $_POST[$result[0]];
        }

    }
    $message = 'Заказ:';
    $message = "python ObrForm.py ".$message." ".$name.$lastname." ".$phone." ".$email." ".$location." ".$home." ".$homenumber." ".$kvart;

    $result = system('python myscript.py myargs', $retval);
    echo $output;
    echo "<div class='ObrForm'>Мы приняли ваш заказ!<br> <a style='color: darkmagenta; font-size:20px;' href='index.php'>Вернутся на главную</a></div>";

    
?>
            </div>
        </div>
    </body>
</html>