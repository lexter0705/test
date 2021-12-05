<?php
include 'connect.php';

$name = $_POST['name'];
$password = $_POST['password'];
$number = $_POST['number'];
$ops = $_POST['ops'];
$img = $_POST['img'];
$YAN = $_POST['YAN'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];

if($img == null){
    Echo "<h1 style='color: brown;'>Нет картинки!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>";
}
elseif($img2 == null){
    Echo "<h1 style='color: brown;'>Нужно минимум 2 картинки!!!!!!!!!!!!!!!!!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>";
}
elseif($img3 == null){
    Echo "<h1 style='color: brown;'>Нужно минимум 2 картинки!!!!!!!!!!!!!!!!!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>";
}
elseif($ops == null){
    Echo "<h1 style='color: brown;'>Нет описания!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>";
}
elseif($number == null){
    Echo "<h1 style='color: brown;'>Нет цены!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>";
}
elseif($name == null){
    Echo "<h1 style='color: brown;'>Нет названия!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>";

}
elseif($YAN == null || (int)$YAN > 1 || (int)$YAN < 0){
    Echo "<h1 style='color: brown;'>Введите допустимое число</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>";
}
else{
    $result = $mysql->query("INSERT INTO `towars_tbl` (`name`, `number`, `img`, `img2`, `img3`, `ops`, `YAN`) VALUES('$name', '$number', '$img', '$img2', '$img3', '$ops', '$YAN')");
    if(!$result){
        die("<h1 style='color: brown;'>ОШИБКА!!!!!!!!!!!</h1><br><a href='AdmPannel.php'>Вернуться в паннель администратора</a>");
    }
    $mysql->close();
    die("<h1 style='color: green;'>Выполнено!</h1><br><form action='AdmPannel.php' method='post'><input type='hidden' name='password' value='UTer2021'><button>Вернуться в паннель администратора</button></form>");
}