<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>
    <title>Contacto</title>

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
    <?php $pagina = 7; ?>

    <style>
        iframe {
            max-width: 100%;
            width: 300%;
            height: 100%;
        }
    </style>
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
                    <h1>Contacto</h1>
                    <p class="sub-title">Estamos cerca de usted</p>
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
            <section class="stripe">

                <!--Map-->
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.2105601352982!2d-99.14854604183799!3d19.694687321989857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f5205a2b2e5d%3A0x88689a5284b69534!2sFORMATOWEBGX!5e0!3m2!1ses!2smx!4v1536352494978" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <!--Contact Area-->
                <div class="contact-area">

                    <!--Send Message-->
                    <div class="send-message">
                        <div class="section-title-area">
                            <h2><span class="section-title contact">Envíanos un mensaje</span></h2>
                        </div>
                        <div class="comment-fieldbox">
                            <form id="form_contact">
                                <input id="name" class="input-name" type="text" name="name" placeholder="Nombre *" required />
                                <input id="email" class="input-email" type="text" name="email" placeholder="E-mail *" required />
                                <input id="mysubject" class="input-subject" type="text" name="mysubject" placeholder="Quien lo envía *" required />
                                <textarea id="comments" class="input-textarea" name="comment" placeholder="Mensaje *" required></textarea>
                                <div class="comment-active">
                                    <span>Todos los campos son obligatorios.</span>
                                    <input id="email_submit" class="submit-button" type="submit" value="Enviar mensaje"/>
                                </div>
                                <div class="email_success">
                                    <div id="reply_message" class="email_loading" ></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Send Message End-->

                    <!--Contact Info-->
                    <div class="contact-info">
                        <div class="section-title-area">
                            <h2><span class="section-title contact">Información de contacto</span></h2>
                        </div>
                        <ul class="contact-status fa-ul">
                            <li>
                                <i class="fa-li fa fa-home"></i>Francisco I. Madero NO. 72 Melchor Ocampo Estado de Mexico.
                            </li>
                            <li>
                                <i class="fa-li fa fa-tablet"></i>55 58 78 42 37
                            </li>
                            <li>
                                <i class="fa-li fa fa-envelope"></i>jorgenietom@formatowebgx.com
                            </li>
                        </ul>

                        <!--Text Area-->
                        <div class="contact-textarea">
                            <figure>
                                <img src="images/opi.jpg" style="width: 180px; height: 130px" alt="contact us" />
                            </figure>
                            <p style="text-align:justify;">Estamos convencidos de que su opinión es muy valiosa, y nos interesa saber sus inquietudes, dudas, o sugerencias. Es por ello que nos damos a la tarea de estar en contacto por medio de este apartado.</p><br>
                            <!--<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr diam.</p>-->

                            <!--Social Media-->
                            <!--<ul class="contact-social">
                                <li>
                                    Siguenos en
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/social-media/top-social-media1.png" alt="facebook" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/social-media/top-social-media2.png" alt="facebook" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/social-media/top-social-media3.png" alt="facebook" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/social-media/top-social-media4.png" alt="facebook" />
                                    </a>
                                </li>
                            </ul>-->

                        </div>

                    </div>
                    <!--Contact Info End-->

                </div>

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

<!--Google Map Script-->



<script src="js/main.js"></script>
</body>
</html>
