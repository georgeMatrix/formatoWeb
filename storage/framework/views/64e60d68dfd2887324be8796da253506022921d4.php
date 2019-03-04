<!DOCTYPE HTML>
<html>
<head>
    <?php if($pagina != 8 || isset($pagina) == false): ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>
    <title>FormatoWeb</title>

    <!--Main Element CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <!--<link href="css/font-awesome.css" rel="stylesheet" type="text/css">-->
        <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">

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
    <?php endif; ?>

    <?php if($pagina == 8): ?>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <link rel="shortcut icon" href="images/iconofw.ico"></link>
            <title>FormatoWeb</title>
        <!--Main Element CSS-->
            <!--  <link href="css/style.css" rel="stylesheet" type="text/css">-->
            <link href="css/form.css" rel="stylesheet" type="text/css">

            <!--Responsive CSS-->
            <link href="css/responsive.css" rel="stylesheet" type="text/css">

            <!--Flexy Menu CSS-->
            <link href="css/flexy-menu.css" rel="stylesheet" type="text/css">

            <!--LayerSlider CSS-->
            <link href="layerslider/css/layerslider.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="css/main.css">
        <?php echo $__env->make("includes.headBlog", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <?php if($pagina == 7): ?>
        <?php echo $__env->make("includes.map", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
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
                <a hrindex.blade.phphtml"><img src="images/logofw200_147.jpg" alt="logo" /></a>
            </div>
            <div class="logoP2" id="idLogoP"></div>
        </div>-->

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

            <!-- CONTENIDO DE LA PAGINA WEB -->
        <?php echo $__env->yieldContent('contenido'); ?>


        <!--Footer Start-->
        <?php if($pagina == 8): ?>
            <?php echo $__env->make("includes.footerBlog", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="clearfix"></div>
        <?php endif; ?>
        <?php echo $__env->make("includes.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--Footer End-->

        </div>

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

