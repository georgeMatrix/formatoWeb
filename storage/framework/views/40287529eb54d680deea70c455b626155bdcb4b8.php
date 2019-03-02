<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>
    <title>Paginas Web</title>

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

    <!-- prettyPhoto css -->
    <link rel="stylesheet" href="css/prettyPhoto/prettyPhoto.css">

    <link rel="stylesheet" href="css/main.css">

    <script  type = "text/javascript"  charset = "utf-8" >
        $ ( document ). ready ( function (){
            $ ( "a[rel^='prettyPhoto']" ). prettyPhoto ();
        });
    </script>

    <!--[if lte IE 8]>
    <meta HTTP-EQUIV="REFRESH" content="0; url=lte-ie8.html">
    <![endif]-->
    <?php $pagina = 4; ?>
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
                    <div id="sync1" class="owl-carousel">
                        <div class="item">
                            <div class="caption">
                                <h1>Contamos con una plantilla adecuada para cada tipo de negocio.</h1>
                                <div class="caption-link"><a href="#"><img src="images/creative_idea.jpg" alt="link" /></a></div>
                            </div>
                            <figure>
                                <img src="images/creative_idea.jpg" width="714px;" height="400px;" alt="slider" />
                            </figure>
                        </div>
                        <div class="item">
                            <div class="caption color2">
                                <h1>Todos nuestros trabajos cuentan con diseño responsivo.</h1>
                                <div class="caption-link"><a href="#"><img src="images/plus-link.png" alt="link" /></a></div>
                            </div>
                            <figure>
                                <img src="images/Aptes.jpg" width="714px;" height="400px;" alt="slider" />
                            </figure>
                        </div>
                        <div class="item">
                            <div class="caption">
                                <h1>Nuestras plantillas son 100% modificables.</h1>
                                <div class="caption-link"><a href="#"><img src="images/plus-link.png" alt="link" /></a></div>
                            </div>
                            <figure>
                                <img src="images/cinema.jpg" width="714px;" height="400px;" alt="slider" />
                            </figure>
                        </div>
                        <div class="item">
                            <div class="caption color2">
                                <h1>HTML 5, CSS 3, Java Script, PHP son solo algunas tecnologías de las que manejamos.</h1>
                                <div class="caption-link"><a href="#"><img src="images/plus-link.png" alt="link" /></a></div>
                            </div>
                            <figure>
                                <img src="images/kappe.jpg" width="714px;" height="400px;" alt="slider" />
                            </figure>
                        </div>
                        <div class="item">
                            <div class="caption">
                                <h1>Creamos Logos, Banners, y la cromática de todo tu portal.</h1>
                                <div class="caption-link"><a href="#"><img src="images/plus-link.png" alt="link" /></a></div>
                            </div>
                            <figure>
                                <img src="images/lobex.jpg" width="714px;" height="400px;" alt="slider" />
                            </figure>
                        </div>
                        <div class="item">
                            <div class="caption color2">
                                <h1>Invierte en una página web, y lleva tu negocio a otro nivel.</h1>
                                <div class="caption-link"><a href="#"><img src="images/plus-link.png" alt="link" /></a></div>
                            </div>
                            <figure>
                                <img src="images/gelios.jpg" width="714px;" height="400px;" alt="slider" />
                            </figure>
                        </div>
                    </div>

                    <!--Slider Thumbnails-->
                    <div id="sync2" class="owl-carousel width1">
                        <div class="item">
                            <figure>
                                <img src="images/creative_idea.jpg" alt="thumbnail" />
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/Aptes.jpg" alt="thumbnail" />
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/cinema.jpg" alt="thumbnail" />
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/kappe.jpg" alt="thumbnail" />
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/lobex.jpg" alt="thumbnail" />
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/gelios.jpg" alt="thumbnail" />
                            </figure>
                        </div>
                    </div>
                    <!--Home Slider End-->

                </div>

                <!--Who We Are Start-->
                <div class="toppanel-right">
                    <div class="home-aboutus">
                        <figure>
                            <img src="images/pagina.jpg" alt="Who we are" />
                        </figure>
                    </div>
                    <div class="home-aboutus-content synced-slider">
                        <div class="home-aboutus-title">
                            Entra y Asómbrate
                        </div>
                        <div class="home-aboutus-details">
                            <figure>
                                <img src="images/upload/califica.png" alt="like" />
                            </figure>
                            <p>Conoce elementos muy vistosos que pueden hacer la diferencia entre una página más y la tuya.</p>
                        </div>
                    </div>
                </div>
                <!--Who We Are End-->

            </div>

            <div class="clearfix"></div>

            <!--Site Slogan Start-->
            <div class="site-slogan-wrapper synced-slider">
                <div class="site-slogan fullbox">
                    <p>Contamos con <span>una extensa variedad de diseños.</span></p>
                </div>
            </div>
            <!--Site Slogan End-->

            <!--Portfolio Start-->
            <section class="stripe portfolio-panel">
                <div class="visible-lg visible-md">
                    <div class="homepanel-title-area">
                        <h1><span class="homepanel-title">Tecnologías</span></h1>
                    </div>

                    <!--Portfolio Thumbnails-->
                    <section class="containerPaginasWeb service">
                        <ul>

                            <!--Service 1-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/html5fw.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">Html 5</h2>
                                        <p class="description-back">HTML5 (HyperText Markup Language, versión 5) es la quinta revisión importante del lenguaje básico de la World Wide Web, HTML.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                            <!--Service 2-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/css3PaginasWeb.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">CSS 3</h2>
                                        <p class="description-back">CSS es un lenguaje utilizado en la presentación de documentos HTML. Sirve para organizar la presentación y aspecto de una página web.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                            <!--Service 3-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/JavascriptPaginasWebfw.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">JavaScript</h2>
                                        <p class="description-back">JavaScript es un lenguaje de programación que permite crear efectos muy atractivos y dinámicos en las páginas web.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                            <!--Service 4-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/PHP_logofw.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">PHP</h2>
                                        <p class="description-back">PHP Es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                            <!--Service 5-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/mysqlfw.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">MySql</h2>
                                        <p class="description-back">MySQL es un sistema de gestión de bases de datos relacional, multihilo y multiusuario.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                            <!--Service 6-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/jqueryfw.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">jQuery</h2>
                                        <p class="description-back">jQuery es una biblioteca de JavaScript, que permite simplificar la manera de interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos y desarrollar animaciones.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                            <!--Service 7-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/ajaxfw.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">Ajax</h2>
                                        <p class="description-back">Ajax es una tecnología asíncrona, en el sentido de que los datos adicionales se solicitan al servidor y se cargan en segundo plano sin interferir con la visualización ni el comportamiento de la página.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                            <!--Service 7-->
                            <li class="flip">
                                <a href="#">
                                    <div class="flip-front">
                                        <img src="images/responsivefw.png" alt="service" />
                                    </div>
                                    <div class="flip-back active-details">
                                        <h2 class="title-back">Responsive Design</h2>
                                        <p class="description-back">Responsive Design es un nuevo paradigma del desarrollo web. Permite adaptar cada site a los diferentes formatos de dispositivos de acceso, smartphones, tabletas, portátiles.</p>
                                    </div>
                                </a>
                            </li>
                            <!--End-->

                        </ul>
                    </section>
                    <!--Portfolio Thumbnails End-->
                </div>
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

<!-- prettyPhonto Para mostrar los videos-->
<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>

<script src="js/main.js"></script>

</body>
</html>
