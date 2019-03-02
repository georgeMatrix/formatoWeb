<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>
    <title>Inicio</title>

    <!--Main Element CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">

    <!--Responsive CSS-->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <!--Flexy Menu CSS-->
    <link href="css/flexy-menu.css" rel="stylesheet" type="text/css">

    <!--LayerSlider CSS-->
    <link href="layerslider/css/layerslider.css" rel="stylesheet" type="text/css">

    <!--Important Owl CSS-->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">

    <!--Owl DefaultTheme -->
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css">

    <!--MEGAFOLIO PRO GALLERY CSS-->
    <link rel="stylesheet" type="text/css" href="megafolio/css/settings.css" media="screen" />

    <!--COLORBOX LIGHTBOX CSS-->
    <link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen" />

    <!-- Flexslider CSS -->
    <link href="css/flexslider.css" rel="stylesheet" type="text/css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-buttons.css?v=1.0.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-thumbs.css?v=1.0.7" media="screen" />

    <!-- Tooltip CSS -->
    <link href="css/tooltip.css" rel="stylesheet" type="text/css">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,500,700|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap -->
    <!--<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">-->

    <!--[if lte IE 8]>
    <meta HTTP-EQUIV="REFRESH" content="0; url=lte-ie8.html">
    <![endif]-->
    <?php $pagina = 1; ?>
</head>

<body>

<!--Top Header Start-->
<?php echo $__env->make("includes.socialMedia", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--Top Header End-->

<div class="wrapper">

    <!--Logo and Main Menu Start-->
    <header class="header-section">

        <!--Logo Start-->
        <!--<div class="logo-wrapper">
            <div class="logo-wrapper">
                <a href="index.html"><img src="images/logofw200_147.jpg" alt="logo" /></a>
            </div>
            <div class="logoP2" id="idLogoP"></div>
        </div>-->

        <div class="logo">
            <div class="logo-wrapper">
            </div>
        </div>
        <!--End-->

        <!--Navigation Menu Start-->

 <?php echo $__env->make("includes.menu", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <!--Navigation Menu End-->

    </header>
    <!--Logo and Main Menu End-->

    <div class="container">

        <!--All Content Start-->
        <div class="content-wrapper">

            <!--Home Slider Start-->
            <div id="layerslider" style="width: 984px; height: 520px;">

                <!--Layer 1-->
                <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                    <!--Slider Background-->
                    <img class="ls-bg" src="images/presentacion.jpg" alt="layer1-background" />
                    <a href="#" class="ls-link"></a>

                    <!--Slider Layers-->
                    <!--<img class="ls-l" src="images/flecha.png" alt="layer image" style="top: 30px; left: 110px;" data-ls="offsetxin: 1000; offsetxout: -600; fadein: false; fadeout: false; durationin: 2500; durationout: 1000; easingout : easeInOutBack;" />-->

                    <h1 class="ls-l" style="top: 193px; left: 610px; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); font-weight: 400; font-size: 24px; color: white;" data-ls="offsetxin: -50; offsetxout: -50; durationin: 1500; durationout: 1000; delayin: 1300; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;">Bienvenido</h1>

                    <h1 class="ls-l" style="top: 150px; left: 550px; font-weight: 700; font-size: 40px; color: white; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); text-transform: uppercase;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 5000; delayin: 1300; easingin: easeOutElastic; rotatexin: 90; transformoriginin: 50% bottom 0; rotatexout: 90; transformoriginout: 50% bottom 0;">FormatoWebGx</h1>

                    <h1 class="ls-l" style="top: 250px; left: 555px; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); font-weight: 400; font-size: 35px; color: white;" data-ls="offsetxin: -50; offsetxout: -50; durationin: 1800; durationout: 1000; delayin: 1500; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;">Soluciones integrales</h1>

                    <div class="ls-l" style="top: 315px; left: 612px; font-size: 80px; color: white;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 1500; durationout: 1000; delayin: 2000; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;"><i class="fa fa-keyboard-o"></i></div>

                    <div class="ls-l" style="top: 315px; left: 720px; font-size: 80px; color: white;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 1500; durationout: 1000; delayin: 2000; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;"><i class="fa fa-file-text"></i></div>

                    <div class="ls-l" style="top: 315px; left: 805px; font-size: 80px; color: white;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 1500; durationout: 1000; delayin: 2000; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;"><i class="fa fa-wrench"></i></div>

                </div>
                <!--End-->

                <!--Layer 2-->
                <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                    <!--Slider Background-->
                    <img class="ls-bg" src="images/html5fw.jpg" alt="layer2-background" />
                    <a href="#" class="ls-link"></a>

                    <!--Slider Layers-->
                    <img class="ls-l" src="images/jsfw.png" alt="layer image" style="top: 180px; left: 650px;" data-ls="offsetxin: 500; offsetxout: 500; fadein: false; fadeout: false; durationin: 2000; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;" />

                    <img class="ls-l" src="images/css3fw.png" alt="layer image" style="top: 300px; left: 550px;" data-ls="offsetxin: 580; offsetxout: 580; fadein: false; fadeout: false; durationin: 2500; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;" />

                    <h1 class="ls-l" style="top: 153px; left: 100px; font-weight: 400; font-size: 24px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1500; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Somos Desarrolladores</h1>

                    <h1 class="ls-l" style="top: 217px; left: 100px; font-weight: 400; font-size: 24px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1800; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Somos Diseñadores</h1>

                    <h1 class="ls-l" style="top: 282px; left: 100px; font-weight: 400; font-size: 24px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 2000; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Somos tu mejor opcion</h1>

                </div>
                <!--End-->

                <!--Layer 3-->
                <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                    <!--Slider Background-->
                    <img class="ls-bg" src="images/tecnologiasfw.png" alt="layer3-background" />
                    <a href="#" class="ls-link"></a>

                    <!--Slider Layers-->
                    <h1 class="ls-l" style="top: 30px; left: 100px; font-weight: 700; font-size: 50px; color: white; text-transform: uppercase; background-color: #f68a5e; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1500; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Trabajando</h1>

                    <h1 class="ls-l" style="top: 120px; left: 100px; font-weight: 400; font-size: 24px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 2000; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Con las últimas tecnologías</h1>

                </div>
                <!--End-->

            </div>
            <!--Home Slider End-->

            <!--Site Slogan Start-->
            <div class="site-slogan-wrapper">
                <div class="site-slogan fullbox">
                    <p>Trabajamos con <span>pasión y conocimiento.</span></p>
                </div>
            </div>
            <!--Site Slogan End-->

            <!--Our Services Start-->
            <section class="stripe service-panel">
                <div class="homepanel-title-area">
                    <h1><span class="homepanel-title">Nuestros Servicios</span></h1>
                </div>
                <ul id="owl-service" class="owl-carousel owl-theme">
                    <li class="item">
                        <a href="mantenimiento.php">
                            <div class="thumbnail-hover">
                                <div class="thumbnail-title">Diagnostico</div>
                            </div>
                            <img src="images/diagnosticofw.png" alt="our service" />
                        </a>
                    </li>
                    <li class="item">
                        <a href="mantenimiento.php">
                            <div class="thumbnail-hover">
                                <div class="thumbnail-title">Reparacion</div>
                            </div>
                            <img src="images/reparacionfw.png" alt="our service" />
                        </a>
                    </li>
                    <li class="item">
                        <a href="mantenimiento.php">
                            <div class="thumbnail-hover">
                                <div class="thumbnail-title">Actualizacion</div>
                            </div>
                            <img src="images/actualizacionfw.png" alt="our service" />
                        </a>
                    </li>
                    <li class="item">
                        <a href="mantenimiento.php">
                            <div class="thumbnail-hover">
                                <div class="thumbnail-title">Mantenimiento</div>
                            </div>
                            <img src="images/mantenimientofw.png" alt="our service" />
                        </a>
                    </li>
                    <li class="item">
                        <a href="mantenimiento.php">
                            <div class="thumbnail-hover">
                                <div class="thumbnail-title">Refacciones</div>
                            </div>
                            <img src="images/refaccionfw.png" alt="our service" />
                        </a>
                    </li>
                    <li class="item">
                        <a href="programacion.php">
                            <div class="thumbnail-hover">
                                <div class="thumbnail-title">Desarrollo</div>
                            </div>
                            <img src="images/desarrollofw.png" alt="our service" />
                        </a>
                    </li>
                    <li class="item">
                        <a href="diseno.php">
                            <div class="thumbnail-hover">
                                <div class="thumbnail-title">Diseño</div>
                            </div>
                            <img src="images/diseño.png" alt="our service" />
                        </a>
                    </li>
                </ul>
            </section>
            <!--Our Services End-->

            <!--Call to Action-->
            <div class="call-action">
                <div class="call-action-text">
                    <p>Un grupo de profesionales <span>trabajando para ti.</span></p>
                </div>
                <button class="dark-button" onClick="location.href='conoce.php'">Conócelos</button>
            </div>
            <!--End-->

        </div>
        <!--All Content End-->

        <!--Footer Start-->
    <?php echo $__env->make("includes.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <!--Footer End-->

    </div>

</div>

<div class="clearfix"></div>



<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/greensock.js"></script>

<!--Flexy Menu Script-->
<script type="text/javascript" src="js/flexy-menu.js"></script>

<!--LayerSlider Script-->
<script type="text/javascript" src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="layerslider/js/layerslider.transitions.js"></script>

<!--Carousel Plugin Script-->
<script type="text/javascript" src="js/owl.carousel.js"></script>

<!-- MEGAFOLIO PRO GALLERY SCRIPT -->
<script type="text/javascript" src="megafolio/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="megafolio/js/jquery.themepunch.megafoliopro.js"></script>

<!-- COLORBOX LIGHTBOX SCRIPT -->
<script type="text/javascript" src="js/jquery.colorbox.js"></script>

<!-- Flexslider Script -->
<script type="text/javascript" src="js/jquery.flexslider.js"></script>

<!--Social Share Button Script-->
<script src="js/jquery.sharrre.min.js" type="text/javascript"></script>

<!-- Fancybox Script -->
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!--Tooltip Script-->
<script type="text/javascript" src="js/tooltip.js"></script>

<!--Placeholder Script-->
<script type="text/javascript" src="js/placeholder.js"></script>

<!--Custom-->
<script type="text/javascript" src="js/custom.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap/js/bootstrap.js"></script>

<script src="js/main.js"></script>

</body>
</html>
