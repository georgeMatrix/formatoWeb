<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>

    <title>Otros Servicios</title>

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
    <?php $pagina = 8; ?>
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
                    <h1>Otros servicios</h1>
                    <p class="sub-title">Tenemos algunos otros servicios que podrían interesarte</p>
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
                <p class="text-content"><span class="dropcap">E</span>n esta sección podrás encontrar todo tipo de servicio y/o comercio, ya sea una papelería, electricista, tiendas, servicio de plomería, servicio de pestes, y muchas más.
                    Queremos que seas parte de una gran familia, es por ello que te invitamos a que formes parte en esta sección, lo único que tienes que hacer para que tu servicio y/o comercio este aquí solo tienes que visitarnos y traer tu información redactada para poderla acomodar el este apartado.
                </p>
                <ul class="service-icon">
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogElectricistas">
                            <div class="service-box">
                                <h2>Electricistas</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-bolt fa-4x"></i>
                                </div>
                                <p>Enchufes hasta instalaciones de centros de carga.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogPlomeria">
                            <div class="service-box">
                                <h2>Plomería</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa fa-wrench fa-4x"></i>
                                </div>
                                <p>Fontanería, plomería o gasfitería</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogEventos">
                            <div class="service-box">
                                <h2>Eventos</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa fa-bullhorn fa-4x"></i>
                                </div>
                                <p>Adornos para fiestas, renta de mesas, sillas y más.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogTramites">
                            <div class="service-box">
                                <h2>Tramites</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-file-text fa-4x"></i>
                                </div>
                                <p>Tramites en general. Siempre podremos ayudarle.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogCafeterias">
                            <div class="service-box">
                                <h2>Cafeterías</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-coffee fa-4x"></i>
                                </div>
                                <p>Tramites ciudadanos en general.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogMecanica">
                            <div class="service-box">
                                <h2>Mecánica</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-cogs fa-4x"></i>
                                </div>
                                <p>Mecánica en general. Auto y Mantenimiento<p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogCarpinteria">
                            <div class="service-box">
                                <h2>Carpintería</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-puzzle-piece fa-4x"></i>
                                </div>
                                <p>Carpintería en general. Clavos y Maderas</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogHerreria">
                            <div class="service-box">
                                <h2>Herrería</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-shield fa-4x"></i>
                                </div>
                                <p>Carpintería en general. Muebles y Canceles</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogVeterinaria">
                            <div class="service-box">
                                <h2>Veterinarias</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-paw fa-4x"></i>
                                </div>
                                <p>Promociones, fechas de vacunación, adopciones</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogDentista">
                            <div class="service-box">
                                <h2>Dentistas</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-smile-o fa-4x"></i>
                                </div>
                                <p>Horarios, teléfonos, citas, urgencias, costos y promociones</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogAbogados">
                            <div class="service-box">
                                <h2>Abogados</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-shield fa-4x"></i>
                                </div>
                                <p>Divorcios, litigios, manejo de datos personales, precios, promociones.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="service-bordertop"></div>
                        <div class="service-borderright"></div>
                        <div class="service-borderbottom"></div>
                        <a href="masServiciosBlogPsicologos">
                            <div class="service-box">
                                <h2>Psicologos</h2>
                                <div class="icon-wrapper">
                                    <i class="fa fa-life-ring fa-4x"></i>
                                </div>
                                <p>Terapia de pareja y de familia, terapia infantil, neuropsicoterapia, entre otras.</p>
                            </div>
                        </a>
                    </li>

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
