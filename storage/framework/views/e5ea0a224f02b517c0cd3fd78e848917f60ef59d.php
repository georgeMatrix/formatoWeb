<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/iconofw.ico"></link>
    <title>Asómbrate</title>

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

    <!-- Chart -->
    <script src="js/metroLab/js/Chart.js"></script>

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
                <a href="index.html"><img src="images/logofw200_147.jpg" alt="logo" /></a>
            </div>
        </div>
        <!--End-->

        <!--Navigation Menu Start-->
    <?php echo $__env->make("includes.menu", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Navigation Menu End-->

    </header>
    <!--Logo and Main Menu End-->

    <div class="container" style="margin-bottom:1px;">

        <!--All Content Start-->


        <!--==================================================================================================-->
        <!--==========================================VIDEO===================================================-->
        <!--==================================================================================================-->
        <div class="site-slogan-wrapper">
            <div class="site-slogan fullbox">
                <p>Trabajamos con <span>pasión y conocimiento.</span></p>
            </div>
        </div>

        <!--<canvas id="canvas" height="450" width="450"></canvas>
        <canvas id="canvas2" height="450" width="450"></canvas>-->

        <canvas id="doughnut" height="450" width="450"></canvas>
        <canvas id="line" height="450" width="450"></canvas>
        <canvas id="polarArea" height="450" width="450"></canvas>
        <canvas id="bar" height="450" width="450"></canvas>
        <canvas id="pie" height="450" width="450"></canvas>
        <canvas id="radar" height="450" width="450"></canvas>


        <!--==================================================================================================-->
        <!--==========================================VIDEO===================================================-->
        <!--==================================================================================================-->

        <!--End-->



        <!--Footer Start-->
        <!--Footer Bottom Start-->
        <div class="footer-bottom">
            <div class="copyright">
                Copyright © All Rights Reserved. <a href="www.formatowebgx.com">Formatowebgx.com</a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Conoce al equipo</a></li>
                    <li><a href="contacto.php">Contáctanos</a></li>
                </ul>
            </nav>
        </div>
        <!--Footer Bottom End-->
        <!--Footer End-->

    </div>

</div>

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

<script>

    var doughnutData = [
        {
            value: 30,
            color:"#F7464A"
        },
        {
            value : 50,
            color : "#46BFBD"
        },
        {
            value : 100,
            color : "#FDB45C"
        },
        {
            value : 40,
            color : "#949FB1"
        },
        {
            value : 120,
            color : "#4D5360"
        }

    ];
    var lineChartData = {
        labels : ["","","","","","",""],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };
    var pieData = [
        {
            value: 30,
            color:"#F38630"
        },
        {
            value : 50,
            color : "#E0E4CC"
        },
        {
            value : 100,
            color : "#69D2E7"
        }

    ];
    var barChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };
    var chartData = [
        {
            value : Math.random(),
            color: "#D97041"
        },
        {
            value : Math.random(),
            color: "#C7604C"
        },
        {
            value : Math.random(),
            color: "#21323D"
        },
        {
            value : Math.random(),
            color: "#9D9B7F"
        },
        {
            value : Math.random(),
            color: "#7D4F6D"
        },
        {
            value : Math.random(),
            color: "#584A5E"
        }
    ];
    var radarChartData = {
        labels : ["","","","","","",""],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };
    new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
    new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
    new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
    new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
    new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
    new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

</script>

</body>
</html>
