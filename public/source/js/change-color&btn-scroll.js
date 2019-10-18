$(document).ready(function () {
    $('#btn-scroll-top').hide();
    $(document).scroll(function () {
        var y = $(this).scrollTop();

        if (y >= $(window).height() - 500) {
            $('#btn-scroll-top').fadeIn();
        } else {
            $('#btn-scroll-top').fadeOut();
        }
    });


    $('#btn-scroll-top').click(function () {
        $("html, body").animate({ scrollTop: 0 }, "medium");
        return false;
    });
    $('#btn-setting-color').click(function () {
        $(".color-box").toggleClass("color-box-toggle");
        $('#btn-setting-color').toggleClass("btn-color-toggle");
    });
    document.getElementById('green-item').onclick=function(){
        
        document.documentElement.style.setProperty('--main-color', 'green');
    }
    document.getElementById('orange-item').onclick=function(){
        
        document.documentElement.style.setProperty('--main-color', 'orange');
    }
});