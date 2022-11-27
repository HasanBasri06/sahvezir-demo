import './bootstrap';

import $, { type } from 'jquery'

$(() => {


    // type mode js codes
    $("#mod").on('click', function () {
        let className = $(this)[0].className;

        if (className == "far fa-solid fa-moon text-xl text-white cursor-pointer") {
            $(this).removeClass(className)
            $(this).addClass("fa-regular fa-sun text-xl text-white cursor-pointer")
        }
        else if (className == "fa-regular fa-sun text-xl text-white cursor-pointer") {
            $(this).removeClass(className)
            $(this).addClass("far fa-solid fa-moon text-xl text-white cursor-pointer")
        }
    })


})

$(window).on('scroll', (e) => {

    

    let event = $(window).scrollTop()
    const footerTop = $("#footer").position().top



    const navbar = $(".menuBox")

    console.log(navbar.position().top);
    console.log(event);
    console.log(footerTop);

    /**
     * navbar scroll edildiğinde oluşacak olay
     */
    if (event > 160 && event < footerTop) {
        $(".menuBox").show()
        $(".menuBox").addClass("menuFx", 10000)
    }
    else if (event > footerTop) {
        $(".menuBox").hide()
    }
    else{
        $(".menuBox").removeClass("menuFx", 10000)
    }

    function navBack(){

    }

    if(location.pathname == '/'){
        const texContent = $("#texContent")
        const yy = texContent.position().top + texContent.height() - 610
        if (event > yy) {
            $("#panel1").addClass('rightPanelOneFx')
        }
        else {
            $("#panel1").removeClass('rightPanelOneFx')
        }
    
        if (event > 575 && event < yy) {
            $("#panel1").addClass('rightPanelOne')
        }
        else {
            $("#panel1").removeClass('rightPanelOne')
        }
    }


    

})

