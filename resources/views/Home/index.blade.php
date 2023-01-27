<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Eflyer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('Home.css')
</head>

<body>
    <!-- banner bg main start -->
    <div class="banner_bg_main">
        <!-- header top section start -->
        <div class="container">
            <div class="header_section_top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_menu">
                            <ul>
                                <li><a>Bueno</a></li>
                                <li><a>Barato</a></li>
                                <li><a>Seguro</a></li>
                                <li><a>Confiable</a></li>
                                <li><a>Calidad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top section start -->
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"><a href="{{Route('welcome')}}"><img class="" src="{{asset('logoblanco.png')}}"></a></div>
                        <div class="buynow_bt"><a class="bg-success" href="{{Route('login')}}">Iniciar Sesión</a></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->

        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Deseas adquerir <br>Netflix</h1>
                                    <div class="buynow_bt"><a class="bg-primary" href="{{Route('register')}}">Inscribete</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Deseas una distraccion <br>Buena</h1>
                                    <div class="buynow_bt"><a class="bg-primary" href="{{Route('register')}}">Inscribete</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Comienza con lo <br>Mejor</h1>
                                    <div class="buynow_bt"><a class="bg-primary" href="{{Route('register')}}">Inscribete</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- banner bg main end -->
    <!-- fashion section start -->
    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <br>
                        <h1 class="fashion_taital">Cuentas en Venta</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                @foreach($Products as $Product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Perfil de {{$Product->name}}</h4>
                                        <div class="tshirt_img"><img src="{{asset($Product->photo)}}"></div>
                                        <p class="price_text" style="font-size: 25px">Precio <span style="color: #262626;">S/. {{$Product->price_sale}}.00</span></p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>

    <!-- jewellery  section end -->
    <!-- footer section start -->
   
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    @include('Home.js')
</body>

</html>