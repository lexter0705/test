<?php
    include 'connect.php';
    $id = $_GET['id'];

    $result = $mysql->query("SELECT * FROM `towars_tbl` WHERE `id` = '$id'");
    $result =  mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/slidertowar.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <script type="text/javascript" src="js/cartbuttonspawn.js"></script>
    <link href="style/style.css" rel="stylesheet" type="text/css">
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(86319071, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
        });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/86319071" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1JHH920QGP"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1JHH920QGP');
        </script>
</head>
<body>
    <div class="header">
            <div class="logo"><div style="color:red; display:inline-block;">Shapki</div>-handmade.ru</div>
            <div class="button_GKO telephonenumber">+7 917 511-44-77</div>
            <div class="buttons"><a href="index.php" class="button_GKO">Главная</a><a href="Katalog.php" class="button_GKO">Каталог</a></div></div>
    <div class="content">
        <div class="container">
            <div class="slider">
                <a href="#" id="left"><</a>
                <a href="#" id="right">></a>
            </div>
            <div class="haracter">
                <div class="Price"><?= $result[2] ?>р</div>
                <br>
                <br>
                <div class="NameHaracter"><?= $result[1] ?></div>
                <br>
                <a class="btn">Добавить В Корзину</a>
            </div>
            <div class="haracter1">
                <div class="NameHaracter">Описание:</div>
                <br>
                <?= $result[6] ?>
            </div>
        </div>

    </div>

</body>
</html>