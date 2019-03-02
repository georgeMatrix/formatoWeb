<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>
    <title>Programacion</title>

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

    <!--[if lte IE 8]>
    <meta HTTP-EQUIV="REFRESH" content="0; url=lte-ie8.html">
    <![endif]-->
    <?php $pagina = 3; ?>
</head>

<body>

<!--Top Header Start-->
<?php echo $__env->make("includes.socialMedia", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--Top Header End-->

<div class="wrapper">

    <!--Logo and Main Menu Start-->
    <header class="header-section">

        <!--Logo Start-->
        <div class="logo">
            <div class="logo-wrapper">
            </div>
        </div>
        <!--End-->

        <!--Navigation Menu Start-->

    <?php echo $__env->make("includes.menu", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Navigation Menu End-->

    </header>
    <!--Logo and Main Menu End-->

    <div class="container">

        <!--All Content Start-->
        <div class="content-wrapper">
            <div>
                <div class="toppanel-left">

                    <!--Home Slider Start-->
                    <div id="layerslider" style="width: 714px; height: 400px;">

                        <!--Slider 1-->
                        <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                            <!--Slider Background-->
                            <img class="ls-bg" src="images/phpfw.jpg" alt="layer1-background" />
                            <a href="#" class="ls-link"></a>

                            <!--Slider Layers-->
                            <!--<img class="ls-l" src="images/upload/small-slider-sub-image1.png" alt="layer image" style="top: 20px; left: 80px;" data-ls="offsetxin: 700; offsetxout: -450; fadein: false; fadeout: false; durationin: 2500; durationout: 1000; easingout : easeInOutBack;" />-->

                            <h1 class="ls-l" style="top: 83px; left: 410px; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); font-weight: 400; font-size: 24px; color: white;" data-ls="offsetxin: -50; offsetxout: -50; durationin: 1500; durationout: 1000; delayin: 1300; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;">Bienvenido</h1>

                            <h1 class="ls-l" style="top: 100px; left: 350px; font-weight: 700; font-size: 40px; color: white; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); text-transform: uppercase;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 5000; delayin: 1300; easingin: easeOutElastic; rotatexin: 90; transformoriginin: 50% bottom 0; rotatexout: 90; transformoriginout: 50% bottom 0;">FormatoWebGx</h1>

                            <h1 class="ls-l" style="top: 155px; left: 350px; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); font-weight: 400; font-size: 27px; color: white;" data-ls="offsetxin: -50; offsetxout: -50; durationin: 1800; durationout: 1000; delayin: 1500; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;">Desarrollo web</h1>

                            <div class="ls-l" style="top: 245px; left: 430px; font-size: 65px; color: white;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 1500; durationout: 1000; delayin: 2000; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;"><i class="fa fa-cogs"></i></div>

                            <div class="ls-l" style="top: 245px; left: 525px; font-size: 65px; color: white;" data-ls="offsetxin: 0; offsetxout: 0; durationin: 1500; durationout: 1000; delayin: 2000; easingin: easeInOutQuart; rotateyin: -180; rotateyout: -180;"><i class="fa fa-wrench"></i></div>

                        </div>
                        <!--End-->

                        <!--Slider 2-->
                        <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                            <!--Slider Background-->
                            <img class="ls-bg" src="images/lenguajes.jpg" alt="layer2-background" />
                            <a href="#" class="ls-link"></a>

                            <!--Slider Layers-->
                            <img class="ls-l" src="images/javaLogo.jpg" alt="layer image" style="top: 80px; left: 355px;" data-ls="offsetxin: 500; offsetxout: 500; fadein: false; fadeout: false; durationin: 2000; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;" />

                            <img class="ls-l" src="images/vbfw.png" alt="layer image" style="top: 155px; left: 305px;" data-ls="offsetxin: 580; offsetxout: 580; fadein: false; fadeout: false; durationin: 2500; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;" />

                            <h1 class="ls-l" style="top: 50px; left: 55px; font-weight: 400; font-size: 22px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1800; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Manejo de diferentes Lenguajes de Programación</h1>

                            <h1 class="ls-l" style="top: 106px; left: 55px; font-weight: 400; font-size: 22px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 2000; durationout: 1000; delayin: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Utilización de los últimos Frameworks</h1>

                        </div>
                        <!--End-->

                        <!--Slider 3-->
                        <div class="ls-slide" data-ls="transition2d: 8,49,111,105; slidedelay: 8000;">

                            <!--Slider Background-->
                            <img class="ls-bg" src="images/webDesktop.jpg" alt="layer3-background" />
                            <a href="#" class="ls-link"></a>

                            <!--Slider Layers-->
                            <h1 class="ls-l" style="top: 85px; left: 70px; font-weight: 700; font-size: 44px; color: white; text-transform: uppercase; background-color: #f68a5e; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 1500; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;">Desarrollo</h1>

                            <h1 class="ls-l" style="top: 168px; left: 70px; font-weight: 400; font-size: 22px; color: white; background-color: #4a4a4a; padding: 5px 15px;" data-ls="offsetxin: -400; offsetxout: -400; durationin: 2000; durationout: 1000; easingin: easeInOutBack; easingout : easeInOutBack;"> Desktop y WEB</h1>

                        </div>
                        <!--End-->

                    </div>
                    <!--Home Slider End-->

                    <!--Site Slogan Start-->
                    <div class="site-slogan-wrapper">
                        <div class="site-slogan">
                            <p><span>PHP, JAVA, VB6, Android</span></p>
                        </div>
                    </div>
                    <!--Site Slogan End-->

                </div>

                <!--Who We Are Start-->
                <div class="toppanel-right">
                    <div class="home-aboutus">
                        <figure>
                            <img src="images/programming.jpg" alt="Who we are" />
                        </figure>
                    </div>
                    <div class="home-aboutus-content">
                        <div class="home-aboutus-title">
                            Conoce nuestro trabajo
                        </div>
                        <div class="home-aboutus-details">
                            <figure>
                                <img src="images/upload/califica.png" alt="like" />
                            </figure>
                            <p>Ten acceso a una de nuestras demos, en donde utilizamos HTML 5, JavaScript, CSS, PHP y MySQL. Pronto nuevos Ejemplos</p>
                            <button onClick="window.location.href = 'http://www.formatowebgx.com/cienciaBasica/formulario1.php'">Prueba la Demo</button>
                        </div>
                    </div>
                </div>
                <!--Who We Are End-->

            </div>

            <div class="clearfix"></div>

            <!--Portfolio Start-->
            <section class="stripe service-page">
                <p class="text-content"><span class="dropcap">D</span>edicados a optimizar tiempos, nos hemos dado a la tarea de evaluar los problemas de tu empresa o negocio para así poderles brindar a nuestros clientes la mejor solución.</p>
                <ul class="service-list">

                    <!--Service 1-->
                    <li>
                        <a href="#">
                            <figure>
                                <div class="thumbnail-hover"></div>
                                <img src="images/macros.jpg" alt="our service" />
                            </figure>
                        </a>
                        <div class="service-detail">
                            <h2>Macros para Excel 2007 2010 2013</h2>
                            <p>Las macros de Excel nos permiten automatizar tareas que realizamos cotidianamente de manera que podamos ser más eficientes en nuestro trabajo. Una macro no es más que una serie de comandos o instrucciones que permanecen almacenados dentro de Excel y que podemos ejecutar cuando sea necesario y cuantas veces lo deseemos.</p>
                            <button class="dark-button" onClick="location.href='contacto'">Contáctanos</button>
                        </div>
                    </li>

                    <!--Service 2-->
                    <li>
                        <a href="#">
                            <figure>
                                <div class="thumbnail-hover"></div>
                                <img src="images/sistemaVentasfw.jpg" alt="our service" />
                            </figure>
                        </a>
                        <div class="service-detail">
                            <h2>Punto de Venta</h2>
                            <p>Los puntos de venta vienen a automatizar el proceso de salida y cobro de la mercancía en las tiendas departamentales, comercios, restaurantes y otras instituciones. La implementación de los sistemas de punto de venta no son un lujo, si no una necesidad primordial para agilizar los procesos en los que esta relacionado la salida de la mercancía en estos tipos de establecimientos.</p>
                            <button class="dark-button" onClick="location.href='contacto'">Contáctanos</button>
                        </div>
                    </li>

                    <!--Service 3-->
                    <li>
                        <a href="#">
                            <figure>
                                <div class="thumbnail-hover"></div>
                                <img src="images/manejo.jpg" alt="our service" />
                            </figure>
                        </a>
                        <div class="service-detail">
                            <h2>Manejo de Datos</h2>
                            <p>Manejo de Información en bases de datos por medio de formularios. Una base de datos es una herramienta para recopilar y organizar información. En las bases de datos, se puede almacenar información sobre personas, productos, pedidos, o cualquier dato que se requiera.</p>
                            <button class="dark-button" onClick="location.href='contacto'">Contáctanos</button>
                        </div>
                    </li>

                </ul>
            </section>

            <!--Portfolio End-->

        </div>
        <!--All Content End-->

        <!--Footer Start-->
    <?php echo $__env->make("includes.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

<script src="js/main.js"></script>

</body>
</html>
