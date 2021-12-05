
<?php
include 'connect.php';
$id = $_POST['id'];

if($mysql->query("SELECT `id` = '$id' FROM `towars_tbl`") == 0){
    die("<h1 style='color: brown;'>Такого ID НЕТ!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>");
}

$mysql->query("DELETE FROM `towars_tbl` WHERE `towars_tbl`.`id` = '$id'");
die("<h1 style='color: green;'>Выполнено!</h1><br><form action='AdmPannel.php' method='post'><input type='hidden' name='password' value='UTer2021'><button>Вернуться в паннель администратора</button></form>");