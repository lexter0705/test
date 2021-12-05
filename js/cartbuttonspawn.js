$('document').ready(function () {
    var a = 0, b = "Cart.php?", c = null, k = 1;
    while(a != Number(localStorage.length)){
        c = localStorage.key(a)
        if(Number.isInteger(Number(c))){
            if(k == 1){
                b += c + "=" + localStorage.getItem(c)
            }
            else{
                b += "&" + c + "=" + localStorage.getItem(c)
            }
            k += 1
        }
        a += 1
    }
    $('.buttons').append("<a href='"+b+"' class='button_GKO'>Корзина</a>");
    
});