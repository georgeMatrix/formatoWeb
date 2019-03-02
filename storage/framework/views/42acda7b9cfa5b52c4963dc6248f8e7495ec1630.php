<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>
    <title>Conoce al equipo</title>

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
    <?php $pagina = 6; ?>
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

            <!--Feature Image-->
            <div class="feature-image">
                <div class="feature-image-caption">
                    <p>Conoce a los profesionales que trabajan para tí</p>
                </div>
                <figure>
                    <img src="images/teamfw.png" alt="feature image" />
                </figure>
            </div>
            <!--End-->

            <!--Body Content Start-->
            <section class="stripe aboutus-page-fullbox">
                <blockquote>
                    <span class="quote-icon">Los cinco dedos separados son cinco unidades independientes. Ciérralos y el puño multiplica la fuerza. Ésta es la organización.</span>
                </blockquote>

                <!--Our Team Title-->
                <div class="homepanel-title-area">
                    <h1><span class="homepanel-title">Nuestro Equipo</span></h1>
                </div>

                <!--Our Team Start-->
                <div class="aboutus-team-wrapper">
                    <div id="owl-team" class="owl-carousel owl-theme">

                        <!--Team 1 Start-->
                        <div class="item">
                            <figure>
                                <a href="#">
                                    <div class="thumbnail-hover"></div>
                                    <img src="images/josafat.jpg" alt="team" />
                                </a>
                            </figure>
                            <h2>Jorge E. Nieto</h2>
                            <p>Desarrollador PHP / Diseñador Web</p>

                            <!--Social Media-->
                            <ul class="team-social">
                                <li>
                                    <a href="contacto">
                                        <img src="images/social-media/top-social-media6.png" alt="facebook" />
                                    </a>
                                </li>



                            </ul>
                        </div>
                        <!--Team 1 End -->

                        <!--Team 2 Start-->
                        <div class="item">
                            <figure>
                                <a href="contacto">
                                    <div class="thumbnail-hover"></div>
                                    <img src="images/jorge.jpg" alt="team" />
                                </a>
                            </figure>
                            <h2>Josafat O. Roa Rendón</h2>
                            <p>Diseñador Grafico</p>

                            <!--Social Media-->
                            <ul class="team-social">
                                <li>
                                    <a href="contacto">
                                        <img src="images/social-media/top-social-media6.png" alt="facebook" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--Team 2 End -->

                        <!--Team 3 Start-->
                        <div class="item">
                            <figure>
                                <a href="contacto">
                                    <div class="thumbnail-hover"></div>
                                    <img src="images/francisco.jpg" alt="team" />
                                </a>
                            </figure>
                            <h2>Francisco Jiménez</h2>
                            <p>Desarrollador PHP / Java</p>

                            <!--Social Media-->
                            <ul class="team-social">
                                <li>
                                    <a href="contacto">
                                        <img src="images/social-media/top-social-media6.png" alt="facebook" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--Team 3 End -->

                        <!--Team 4 Start-->
                        <div class="item">
                            <figure>
                                <a href="contacto">
                                    <div class="thumbnail-hover"></div>
                                    <img src="images/carlos.jpg" alt="team" />
                                </a>
                            </figure>
                            <h2>Carlos Álvarez</h2>
                            <p>Desarrollador PHP / Java</p>

                            <!--Social Media-->
                            <ul class="team-social">
                                <li>
                                    <a href="contacto">
                                        <img src="images/social-media/top-social-media6.png" alt="facebook" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--Team 4 End -->

                        <!--Team 5 Start-->
                        <div class="item">
                            <figure>
                                <a href="#">
                                    <div class="thumbnail-hover"></div>
                                    <img src="images/sam.jpg" alt="team" />
                                </a>
                            </figure>
                            <h2>Samanta E. Jiménez</h2>
                            <p>Administracion y Ventas</p>

                            <!--Social Media-->
                            <ul class="team-social">
                                <li>
                                    <a href="contacto">
                                        <img src="images/social-media/top-social-media6.png" alt="facebook" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--Team 5 End -->

                    </div>
                </div>
                <!--Our Team End-->

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
