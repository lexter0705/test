

$('document').ready(function(){
    var str = ""
    var _GET_Keys;
    var _GET_Values; 
    var _GET_Count = 0;
    get = new String(window.location); 
    x = get.indexOf('?'); 
    if(x!=-1) 
    { 
        l = get.length; 
        get = get.substr(x+1, l-x);
        l = get.split('&'); 
        x = 0; 
        _GET_Count = l.length; 
        _GET_Keys = new Array(_GET_Count); 
        _GET_Values = new Array(_GET_Count);
        for(i in l) 
        { 
        get = l[i].split('='); 
        _GET_Keys[x] = get[0]; 
        _GET_Values[x] = get[1]; 
        x++; 
        window['carts'] = _GET_Values
        }
    } 



    var cart = {};
    var id = _GET_Values[0]
    var number;
    if(Number(localStorage.getItem(id)) > 0){
        number = Number(localStorage.getItem(id))
    }
    else{
        number = 0;
    }
    function ButtonRemove(){
        var i = 0;
        while(i < localStorage.length){
            var key = localStorage.key(i);
            var value = localStorage.getItem(key);
            if(i == 0){
                str += String(key)+"="+String(value)
            }
            else{
                str += "&"+String(key)+"="+String(value)
            }
            i += 1;
        }
        if(number > 0){
            $('.btn').remove();
            $('.haracter').append("<a class='btnCart' href='Cart.php?"+str+"'>В корзине "+number+"шт</a>");
        }
    }

    ButtonRemove();
    $('.btn').click(function () {
        if(cart[id]=undefined){
            number = 1;
        }
        else{
            number++;
        }
        cart[id] = number;

        console.log(cart);
        localStorage.setItem(id, JSON.stringify(number));

        window.location.reload();
    });
    $('.btnCart').click(function () {
        var l = 0;
        var strpl = "";
        while(l < localStorage.length){
            var key = localStorage.key(l);
            var value = localStorage.getItem(key);
            if(l == 0){
                strpl += String(key)+"="+String(value)
            }
            else{
                strpl += "&"+String(key)+"="+String(value)
            }
            l += 1;
        }
        $('.btnCart').remove();
        $('.haracter').append("<a class='btnCart' href='Cart.php?"+str+"'>В корзине "+number+"шт</a>");
    });

    



    




});