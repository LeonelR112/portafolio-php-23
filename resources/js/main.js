$(window).scroll(function (e){
    let scrollPositionTop = $(window).scrollTop()
    if(scrollPositionTop > 52){
        console.log("fixed");
    }
    else{
        console.log('absolute');
    }
})