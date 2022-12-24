import './bootstrap';

import $, { getScript, type } from 'jquery'



$(() => {



    $('input').attr('autocomplete', 'off');
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

    $('#changeImg').on('change', function () {
        let accountImg = $("#accountImg")
        let changeImg = $("#changeImg")


        let reader = new FileReader()
        reader.onload = function () {
            let path = reader.result
            accountImg.attr('src', path)
        }
        reader.readAsDataURL(changeImg[0].files[0])

    })

    let postBtn = $("#postBtn");
    postBtn.on('click', function(){
        $("#postSlideBox").slideToggle('fast');
    })

    $(".mobilBtn").on('click', function(){
        $(".mobilList").slideToggle('slow');
    });


})

$(window).on('scroll', (e) => {



    let event = $(window).scrollTop()
    const footerTop = $("#footer").position().top

    let windowWidth= $(window).width();

    const navbar = $(".menuBox")


    /**
     * navbar scroll edildiğinde oluşacak olay
     */
    if(windowWidth > 640){
        if (location.pathname == '/') {
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

        
    
    }
    if (event > 160 && event < footerTop) {
        $(".menuBox").show()
        $(".menuBox").addClass("menuFx", 10000)
    }
    else if (event > footerTop) {
        $(".menuBox").hide()
    }
    else {
        $(".menuBox").removeClass("menuFx")
    }

    if (location.pathname == '/login' || location.pathname == '/register') {
        $(".menuBox").removeClass("menuFx")
    }


    



})

