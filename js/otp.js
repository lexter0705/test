$('document').ready(function () { 
    $('.MIN').click(function (e) {
        var id = $(this).attr('data-id'); 
        var number = Number(localStorage.getItem(id));
        if(Number(number) > 1){
            number--;
            localStorage.setItem(id, String(number));
            var a = 0, b = "Cart.php?", h = null, k = 1;
            while(a != Number(localStorage.length)){
                h = localStorage.key(a)
                if(Number.isInteger(Number(h))){
                    if(k == 1){
                        b += h + "=" + localStorage.getItem(h)
                    }
                    else{
                        b += "&" + h + "=" + localStorage.getItem(h)
                    }
                    k += 1
                }
                a += 1
            }


            console.log(b)
            document.location.href = b
        }
    });
    $('.PLU').click(function (e) { 
        var id = $(this).attr('data-id'); 
        var number = Number(localStorage.getItem(id));
        if(Number(number) < 9){
            console.log(number)
            number++;
            localStorage.setItem(id, String(number));
            var a = 0, b = "Cart.php?", h = null, k = 1;
            while(a != Number(localStorage.length)){
                h = localStorage.key(a)
                if(Number.isInteger(Number(h))){
                    if(k == 1){
                        b += h + "=" + localStorage.getItem(h)
                    }
                    else{
                        b += "&" + h + "=" + localStorage.getItem(h)
                    }
                    k += 1
                }
                a += 1
            }
            console.log(b)
            document.location.href = b
        }
    });
    $('.garbich').click(function (e) { 
        var id = $(this).attr('data-id'); 
        localStorage.removeItem(String(id))
        var a = 0, b = "Cart.php?", h = null, k = 1;
        while(a != Number(localStorage.length)){
            h = localStorage.key(a)
            if(Number.isInteger(Number(h))){
                if(k == 1){
                    b += h + "=" + localStorage.getItem(h)
                }
                else{
                    b += "&" + h + "=" + localStorage.getItem(h)
                }
                k += 1
            }
            a += 1
        }
        console.log(b)
        document.location.href = b
    });
});