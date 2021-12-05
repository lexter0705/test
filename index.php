

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cartbuttonspawn.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div class="buttons"><a href="index.php" class="button_GKO">Главная</a><a href="Katalog.php" class="button_GKO">Каталог</a></div>
        </div>
        <div class="content">
            <div class="container">
                <div class="baner_sl">Ручная работа, качество, стиль!</div>
                <br>
                <div class="glavtext"><div class="text"><div style="color:red;">Акция!!!</div>Только сегодня <?php echo date('Y-m-d');?><br>Скидка на каждый комплект <div style="color:red;">50%</div></div><div class="imgtext"><img src="imgs/promo-photo.jpg" class="img_index"></div></div>
                <br>
                <div class="VeryGOODShap">
                    <?php
                        include 'connect.php';
                        $results = $mysql->query("SELECT * FROM `towars_tbl`");
                        $results = mysqli_fetch_all($results);
                        $number = 0;
                        foreach ($results as $result){
                            if((int)$result[7] == 1){
                                $number += 1;
                                ?>
                                <a href="towar.php?id=<?= $result[0] ?>&img1=<?= $result[3] ?>&img2=<?= $result[4] ?>&img2=<?= $result[5] ?>" class="Towar" style="background-image: url(imgs/<?= $result[3] ?>);">
                                    <div class="towar_info">
                                        <div class="Number"><?= $result[2]; ?>р</div>
                                        <div class="Name"><?= $result[1]; ?></div>
                                    </div>
                                </a>
                                <?php        
                                if($number == 3){
                                    $number = 0;
                                    echo "<br>";
                                    echo "<br>";
                                }                      
                            }
                        }
                    ?>
                </div>
                <div class="WhatMe">
                    <div class="whatmezg"><div style="color:red; display:inline-block;">Почему</div> мы?</div>
                    <br>
                    <br>
                    <div class="onepr"><div style="color:red; display:inline-block;">100%</div>гарантия качества</div><div class="twopr"><div style="color:red; display:inline-block;">Точные</div><br>сроки выполнения<br>заказа</div><div class="threpr"><div style="color:red; display:inline-block;">Ручная</div><br>Работа<br>С Душою!</div>
                    <br>
                    <br>
                    <div class="fourpr"><div style="color:red; display:inline-block;">Бесплатная</div> Доставка</div>
                </div>
                <br>
                <div class="WhatI">
                    <div class="whatizg"><div style="color:red; display:inline-block;">Кто</div> мы?</div>
                    <br>
                    Мы молодая быстроростущая компания.
                    Мы ставим цель возрадить на руси ручное производство.
                    Занимаемся изготовлением ручных, штучных товаров на заказ.
                    Все наши изделья это уникальные дизайнерские вещи. Все
                    наши мастера, это профессионалы с многолетним опытом и
                    открытой душой, которую они вкладывают в свои изделья.
                    Наш Дивиз: "Качество и Стиль".
                    <br>
                    <br>
                </div>
                <br>
                <br>
                <div class="WhatI">
                    <div class="whatizg"><div style="color:red; display:inline-block;">Доставка</div> и <div style="color:red; display:inline-block;">Оплата</div></div>
                    <br>
                    Мы можем доставить вам изделья любым удобным для вас способом:
                    Яндекс, Почта, СДЕК, СберДоставка и т.д, но советуем вам нашего курьера так как шапки и шарфы
                    лучше предварительно померять, почувствовать тепло и ощущения, посмотреть качество, а только потом платить!
                    Наш курьер согласует с вами время и место доставки вплоть до +-30минут
                    чтобы вам было удобно и комфортно
                    <br>
                    <br>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <br>
        <br>
    </body>
</html>