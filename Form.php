
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/valid.js"></script>
    <script type="text/javascript" src="js/cartbuttonspawn.js"></script>
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
            <form id="PersonDATA" action="ObrForm.php" method="POST">
                <h1>Контакты</h1>
                <input class="input_form PersonName" placeholder="Имя" name="name" pattern="[A-Za-zА-Яа-яЁё]+">
                <br>
                <input class="input_form PersonLastName" placeholder="Фамилия" name="lastname" pattern="[A-Za-zА-Яа-яЁё]+">
                <br>
                <input id="online_phone" name="phone" type="tel" maxlength="50" class="input_form PersonNumber"
                autofocus="autofocus" required="required"
                value="+7(___)___-__-__"
                pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                placeholder="+7(___)___-__-__">
                <br>
                <input class="input_form PersonEmail" placeholder="Электронная почта: name@mail.com" name="email" type="email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required>
                <br>
                <h1>Доставка</h1>
                <input class="input_form PersonAD" placeholder="Адрес" name="location">
                <br>
                <input class="input_form PersonHome" placeholder="Дом" name="home" pattern="[1-9]+"><input class="input_form PersonPod" placeholder="Подъезд" name="homenumber" pattern="[1-9]+"><input class="input_form PersonKV" placeholder="Квартира" name="kvart"pattern="[1-9]+">
                <br>
                <?php
                    include "connect.php";
                    $results = $mysql->query("SELECT * FROM `towars_tbl`");
                    $results = mysqli_fetch_all($results);
                    foreach($results as $result){
                        if($_POST[$result[0]] != null){
                            echo "<input type='hidden' value='",$_POST[$result[0]],"' name='",$result[0],"'>";
                        }
                
                    }
                ?>
                <button class="PriceButtonForm">Заказать</button>

            </form>
            <script type="text/javascript">
            function setCursorPosition(pos, e) {
                e.focus();
                if (e.setSelectionRange) e.setSelectionRange(pos, pos);
                else if (e.createTextRange) {
                var range = e.createTextRange();
                range.collapse(true);
                range.moveEnd("character", pos);
                range.moveStart("character", pos);
                range.select()
                }
            }

            function mask(e) {
                //console.log('mask',e);
                var matrix = this.placeholder,// .defaultValue
                    i = 0,
                    def = matrix.replace(/\D/g, ""),
                    val = this.value.replace(/\D/g, "");
                def.length >= val.length && (val = def);
                matrix = matrix.replace(/[_\d]/g, function(a) {
                return val.charAt(i++) || "_"
                });
                this.value = matrix;
                i = matrix.lastIndexOf(val.substr(-1));
                i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
                setCursorPosition(i, this)
            }
            window.addEventListener("DOMContentLoaded", function() {
                var input = document.querySelector("#online_phone");
                input.addEventListener("input", mask, false);
                input.focus();
                setCursorPosition(3, input);
            });
</script>
        </div>
    </div>
</body>
</html>