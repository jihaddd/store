<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>ART-INK </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="css/styleee.css">
        <link rel="stylesheet" type="text/css" href="css/utill.css">
	    <link rel="stylesheet" type="text/css" href="css/mainn.css">
    <!--===============================================================================================-->
    </head>
<body>
    <div id="app">
        <header class="header-v3">
            <!-- Header desktop -->
            <div class="container-menu-desktop trans-03">
                <div class="wrap-menu-desktop">
                    <nav class="limiter-menu-desktop p-l-45">
                        
                        <!-- Logo desktop -->		
                        <a href="/" class="logo">
                            <img src="../../images/icons/logo-02.png" alt="IMG-LOGO" style="width: 142px; height: 103px;">
                        </a>
                        <!-- Icon header -->
                        <div class="wrap-icon-header flex-w flex-r-m h-full">							
                                
                            <div class="flex-c-m h-full p-lr-19">
                                <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>	
            </div>
    
            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->		
                <div class="logo-mobile">
                    <a href="/"><img src="../../images/icons/logo-01.png" alt="IMG-LOGO"></a>
                </div>
    
                <!-- Icon header -->
               
    
                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
    
    
            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="main-menu-m">
                    <li>
                        <a href="index.html">حسابي</a>
                        <ul class="sub-menu-m">
                            <li><a href="{{"login"}}">تسجيل الدخول</a></li>
                            <li><a href="{{"register"}}">تسجيل جديد</a></li>
                            
                        </ul>
                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>
    
                    
    
                    <li>
                        <a href="conect">اتصل بنا</a>
                    </li>
    
                    <li>
                        <a href="http://design.art-ink.net/">صمم معنا</a>
                    </li>
    
                    
                </ul>
            </div>
    
            
        </header>
        <aside class="wrap-sidebar js-sidebar">
            <div class="s-full js-hide-sidebar"></div>
    
            <div class="sidebar flex-col-l p-t-22 p-b-25">
                <div class="flex-r w-full p-b-30 p-r-27">
                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>
    
                <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
                    <ul class="sidebar-link w-full">
                        <li class="p-b-13">
                            <a href="{{"login"}}" class="stext-102 cl2 hov-cl1 trans-04">
                                تسجيل الدخول
                            </a>
                        </li>
                        <li class="p-b-13">
                            <a href="{{"register"}}" class="stext-102 cl2 hov-cl1 trans-04">
                                تسجيل جديد
                            </a>
                        </li>
                        
    
                        <li class="p-b-13">
                            <a href="{{"conect"}}" class="stext-102 cl2 hov-cl1 trans-04">
                                اتصل بنا
                            </a>
                        </li>
    
                        <li class="p-b-13">
                            <a href="http://design.art-ink.net/" class="stext-102 cl2 hov-cl1 trans-04">
                                كن شريك معنا
                            </a>
                        </li>
    
                    </ul>
                    <div class="sidebar-gallery w-full p-tb-30">
                        <span class="mtext-101 cl5">
                            @ Art-Ink Store
                        </span>
    
                        <div class="flex-w flex-sb p-t-36 gallery-lb">
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-01.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-01.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-02.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-02.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-03.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-03.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-04.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-04.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-05.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-05.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-06.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-06.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-07.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-07.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-08.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-08.jpg');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-09.jpg" data-lightbox="gallery" 
                                style="background-image: url('images/gallery-09.jpg');"></a>
                            </div>
                        </div>
                    </div>
    
                   
                </div>
            </div>
        </aside>
    


        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg3 p-t-75 p-b-32" style="text-align: center;">
            <div class="container">
                <div class="p-t-40">
                    <div class="flex-c-m flex-w p-b-18">
                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                        </a>
    
                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
                        </a>
    
                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
                        </a>
    
                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
                        </a>
    
                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
                        </a>
                    </div>
    
                    <p class="stext-107 cl6 txt-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> 
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    
                    </p>
                </div>
            </div>
        </footer>
    
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    
    <!--===============================================================================================-->
        
    <!--===============================================================================================-->
    
    <!--===============================================================================================-->
        
    <!--===============================================================================================-->
        <script src="js/main.js"></script>
       <script>
            document.addEventListener('DOMContentLoaded', (event) => {
             
          })
       </script>
    </div>
</body>
</html>
