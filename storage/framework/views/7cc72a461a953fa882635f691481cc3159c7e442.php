<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>

    <title>Tienda</title>

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
    <?php $pagina = 10; ?>
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

            <!--Page Title-->
            <div class="page-title">
                <div class="page-title-detail">
                    <h1>Tienda</h1>
                    <p class="sub-title">Tenemos todo lo que necesitas para tu Laptop y PC</p>
                </div>
                <nav class="page-navigation">
                    <ul>
                        <li><a href="index">Inicio</a></li>
                        <li><a href="conoce">Conoce al equipo</a></li>
                    </ul>
                </nav>
            </div>
            <!--End-->

            <!--Body Content Start-->
            <section class="stripe service-page-icon">
                <p class="text-content"><span class="dropcap">E</span>n esta sección podrás encontrar Procesadores, Memoria Ram, Motherboard, Discos Duros, Tarjeta de Video, Unidades Ópticas, Monitores, Enfriamientos, Gabinetes, Fuentes de Poder, Tarjetas de Red, Accesorios y más.
                </p>
                <ul class="service-icon">
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="memoriaRAM">
                            <div class="service-box">
                                <h2>Memoria RAM</h2>
                                <div class="icon-wrapper">
                                    <!--<i class="fa fa-bolt fa-4x"></i>-->
                                    <img src="images/tienda/ram.jpg" width="100px;" height="65px;"  alt="">
                                </div>
                                <p>De Uso y Nuevas. Laptop y PC.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="procesador">
                            <div class="service-box">
                                <h2>Procesadores</h2>
                                <div class="icon-wrapper">
                                    <img src="images/tienda/procesador.jpg" width="100px;" height="65px;"  alt="">
                                </div>
                                <p>De Uso y Nuevas. Laptop y PC.</p>
                            </div>
                        </a>
                    </li>
                    <!--<li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Motherboard</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/mother.jpg" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Discos Duros</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/duro.jpg" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Tarjeta de Video</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/tarjeta.jpg" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Unidades Ópticas</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/blue.jpg" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.<p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Monitores</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/tv.jpg" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="camarasS.php">
                        <div class="service-box">
                            <h2>Seguridad</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/seguridad.png" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Gabinetes</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/gabinete.jpg" width="50px;" height="76px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Fuentes de Poder</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/power.jpg" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>-->
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="articuloSeminuevo">
                            <div class="service-box">
                                <h2>Artículos Seminuevos</h2>
                                <div class="icon-wrapper">
                                    <img src="images/tienda/red.jpg" width="100px;" height="65px;"  alt="">
                                </div>
                                <p>De Uso y Nuevas. Laptop y PC.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="xboxNavideno">
                            <div class="service-box">
                                <h2>XBOX CON 30 JUEGOS</h2>
                                <div class="icon-wrapper">
                                    <img src="images/tienda/SUGUNDA LONA XBOX 360.jpg" width="100px;" height="65px;"  alt="">
                                </div>
                                <p>De Uso y Nuevos.</p>
                            </div>
                        </a>
                    </li>
                    <!--<li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="#">
                        <div class="service-box">
                            <h2>Accesorios</h2>
                            <div class="icon-wrapper">
                                <img src="images/tienda/accesorios.png" width="100px;" height="65px;"  alt="">
                            </div>
                            <p>De Uso y Nuevas. Laptop y PC.</p>
                        </div>
                        </a>
                    </li>-->

                </ul>
            </section>
            <!--Body Content End-->

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
