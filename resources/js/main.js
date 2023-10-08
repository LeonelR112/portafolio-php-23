let main_navbar = document.getElementById('main_navbar');
let navbar_fixed = false;

$(window).scroll(function (e){
    let scrollPositionTop = $(window).scrollTop()
    if(scrollPositionTop > 52){
        if(!navbar_fixed){
            main_navbar.style.position = 'fixed';
            main_navbar.style.background = 'rgba(20,20,20, 0.7)';
            navbar_fixed = true;
        }
    }
    else{
        if(navbar_fixed){
            main_navbar.style.position = 'absolute';
            main_navbar.style.background = 'none';
            navbar_fixed = false;
        }
    }
})