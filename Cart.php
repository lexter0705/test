<!DOCTYPE html>
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/otp.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo"><div style="color:red; display:inline-block;">Shapki</div>-handmade.ru</div>
        <div class="button_GKO telephonenumber">+7 917 511-44-77</div>
        <div class="buttons"><a href="index.php" class="button_GKO">Главная</a><a href="Katalog.php" class="button_GKO">Каталог</a><a href="#" class="button_GKO">Корзина</a></div>
    </div>
    <div class="content">
        <div class="container">
            <div class="cart">
                <?php
                    include "connect.php";
                    $results = $mysql->query("SELECT * FROM `towars_tbl`");
                    $results = mysqli_fetch_all($results);
                    $price = 0;
                    $colvo = 0;
                    
                    if($_GET != null){
                        
                        foreach($results as $result){
                            if($_GET[(string)$result[0]] != null){  
                                $price += $_GET[$result[0]] * $result[2];
                                $colvo += $_GET[$result[0]];
                                ?>
                                <div class="CartObj">        
                                    <img src="imgs/<?=$result[3]?>" class="imgCart">
                                    <div class="nameCart"><?=$result[1]?></div>
                                    <div class="Kol-Vo"><a class="MIN" data-id="<?=$result[0]?>">-</a><div class="Kol-Vo-Number" ><?=$_GET[$result[0]]?></div><a class="PLU" data-id="<?=$result[0]?>">+</a></div>
                                    <div class="pricecart"><?=(int)$_GET[$result[0]] * $result[2]?>р</div>
                                    <div class="garbich" data-id="<?=$result[0]?>"><img src="imgs/garbich.png" alt="" ></div>
                                </div>
                                <br>
                                <?php
                                
                            }
                        }
                    ?>

            </div>
            <?php
                Echo '<form class="ZK" action="Form.php" method="POST"><div class="price">В корзине ',$colvo,'<br> товаров на ',$price,'р</div><br>';
                foreach($results as $result){
                    if($_GET[(string)$result[0]] != null){  
                        echo "<input type='hidden' value='",$_GET[$result[0]],"' name='",$result[0],"'>";
                    }
                }
                echo '<button class="PriceButton">Оформить Заказ</button></form>';
            }
            else{
                Echo '<div class="ZK" style="font-size:40px; padding: 200px 0;">Корзина Пустая <br><a href="Katalog.php" style="color:red;">Перейти в каталог</a></div>';
            }
            ?>
        </div>
    </div>
</body>
</html>









