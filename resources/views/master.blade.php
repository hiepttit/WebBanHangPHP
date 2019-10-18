<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gear PC & MB Shop</title>
        <!-- css of bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <base href="{{asset('')}}">
    <!-- <script src="https://kit.fontawesome.com/ef3d1a92bf.js"></script> -->
    <link rel="stylesheet" href="{{asset('source/styles/header.css')}}">
    <link rel="stylesheet" href="{{asset('source/styles/index.css')}}">
    <link rel="stylesheet" href="{{asset('source/styles/footer.css')}}">
    <link rel="stylesheet" href="{{asset('source/fontawesome-free-5.10.2-web/css/all.css')}}">
    <!-- gg fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- slide carosel  -->
    <link rel="stylesheet" href="{{asset('source/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('source/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css')}}">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('source/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

       <!-- change-color&btn-scroll -->
       <link rel="stylesheet" href="{{asset('source/styles/change-color&btn-scroll.css')}}">
       <script src="{{asset('source/js/change-color&btn-scroll.js')}}"></script>


</head>
<style>
    
</style>
<body>
      <!-- <button id="changeColor">Change</button>     -->
      <div class="btn-scroll-top">
            <button id="btn-scroll-top"><i class="fas fa-angle-up"></i></button>
        </div>
    
        <div class="color-box">
            <div class="color-items">
                <button id="green-item" class="green-item"></button>
                <button id="orange-item" class="orange-item"></button>
            </div>    
            <button class="btn-setting" id="btn-setting-color"><i class="fas fa-cog"></i></button>
        </div>
    <!-- main wraps everything (header + wrapper + footer)-->
    <div class="main contained-fluid">
        @include('header')
        @yield('content')
        @include('footer')
    </div>
    <!-- script of bootstrap 4 -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function () {
            // $('.owl-example').owlCarousel({
            //     loop: true,
            //     margin: 0,
            //     responsiveClass: true,
            //     autoplay: true,
            //     responsive: {
            //         0: {
            //             items: 1,
            //             nav: true
            //         },
            //         600: {
            //             items: 2,
            //             nav: true
            //         },
            //         1000: {
            //             items: 3,
            //             nav: false,
            //             loop: true,
            //         }
            //     }
            // })
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                navSpeed: false,
                dots: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 4,
                        nav: false,
                        loop: true,

                    }
                }
            })
        });    
    </script>
    <!-- <script>
         document.getElementById('changeColor').onclick=function(){
            console.log('123');
            document.documentElement.style.setProperty('--main-color', 'green');
        }
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.item').slideUp();

            $('.collasable .open').click(function () {
                $(this).next('.item').slideToggle();
                $(this).toggleClass('color-yellow');
            });


        });

    </script>

<!-- Header -->
<script>
    $(document).ready(function () {
        // $('#product').click(function () {
        //     $(".xy").toggleClass("xyz");
        //     $(".header-third").toggleClass("header-third-index");
        // });
        // $("#home").hover(function(){
        //     $(".add-home-hide").toggleClass("add-home-show");
        //     $(".header-third").toggleClass("header-third-index");
        // });
        // $("#element").hover(function(){
        //     $(".add-element-hide").toggleClass("add-element-show");
        //     $(".header-third").toggleClass("header-third-index");
        // });
        $("#product").click(function(){
            $(".add-product-hide").toggleClass("add-product-show");
            $(".header-third").toggleClass("header-third-index");
        });
        $("#page").hover(function(){
            $(".add-page-hide").toggleClass("add-page-show");
            $(".header-third").toggleClass("header-third-index");
        });
    });
</script>
</body>


</html>