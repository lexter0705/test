$('document').ready(function(){
    var number, stylebg1, stylebg2
    number = 0;
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
    $('.slider').css('background-image', 'url(imgs/'+_GET_Values[1]);
    $('#right').click(function () { 
        number += 1;
        if(number == 3){
            number = 0;
        }
        if(number == 0){
            $('.slider').css('background-image', 'url(imgs/'+_GET_Values[1]);
        }
        else if(number == 1){
            $('.slider').css('background-image', 'url(imgs/'+_GET_Values[2]);
        }
        else if(number == 2){
            $('.slider').css('background-image', 'url(imgs/'+_GET_Values[3]);
        }
    });
    $('#left').click(function () { 
        number -= 1;
        if(number == -1){
            number = 2;
        }
        if(number == 0){
            $('.slider').css('background-image', 'url(imgs/'+_GET_Values[1]);
        }
        else if(number == 1){
            $('.slider').css('background-image', 'url(imgs/'+_GET_Values[2]);
        }
        else if(number == 2){
            $('.slider').css('background-image', 'url(imgs/'+_GET_Values[3]);
        }
    });

});