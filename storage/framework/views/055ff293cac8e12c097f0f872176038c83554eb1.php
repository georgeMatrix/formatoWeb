
<?php $__env->startSection('contenido'); ?>
    <?php $pagina = 4; ?>


    <!--Site Slogan Start-->
    <div class="site-slogan-wrapper synced-slider">
        <div class="site-slogan fullbox">
            <p>Contamos con <span>una extensa variedad de diseños.</span></p>
        </div>
    </div>
    <!--Site Slogan End-->

    <!--Body Content Start-->
    <section class="stripe portfolio-page">

        <!--Category Filter-->
        <div class="category-filter left-filter">
            <ul>
                <li class="filter selected" data-category="cat-all">Todo</li>
                <li class="filter" data-category="cat-one">Básica</li>
                <li class="filter" data-category="cat-two">Galerías</li>
                <li class="filter" data-category="cat-three">Entusiasta</li>
                <li class="filter" data-category="cat-four">Profesional</li>

            </ul>
        </div>
        <!--End-->

        <!--Portfolio Thumbnails-->
        <div class="portfolio-thumbnail">
            <div class="megafolio-container item-page noborder">

                <!--Thumbnail 1 Start-->
                <div class="mega-entry cat-all cat-four cat-two" id="entry-1" data-src="images/friki.png"
                     data-width="800" data-height="605">

                    <!--Hover Effect Start-->
                    <a class="portfolio-popup" href=".popup1">
                        <div class="mega-hover alone notitle">

                            <!-- Link Button -->
                            <div class="mega-hoverview"></div>

                        </div>
                    </a>
                    <!--Hover Effect End-->

                </div>

                <!--Hidden content for Pop-up-->
                <div class="popup-wrapper">
                    <div class="content-popup popup1">
                        <img src="images/friki.png" alt="portfolio"/>
                        <div class="popup-text">
                            <h2>Página con galeria</h2>
                            <p>Página con una galería muy vistosa. Si tienes una sección de fotografías que quieras
                                mostrar al público esta es la que debes escoger</p>
                            <button onClick="location.href='<?php echo e(route('inicioF')); ?>'">Ir a la Pagina</button>
                        </div>
                    </div>
                </div>
                <!--Thumbnail End-->
<!--inicioP-->
                <!--Thumbnail 2 Start-->
                <div class="mega-entry cat-all cat-one cat-three cat-four" id="entry-2"
                     data-src="images/proximamente_formato.png" data-width="600" data-height="655">

                    <!--Hover Effect Start-->
                    <a class="portfolio-popup" href=".popup2">
                        <div class="mega-hover alone notitle">

                            <!-- Link Button -->
                            <div class="mega-hoverview"></div>

                        </div>
                    </a>
                    <!--Hover Effect End-->

                </div>

                <!--Hidden content for Pop-up-->
                <div class="popup-wrapper">
                    <div class="content-popup popup2">
                        <img src="images/upload/portfolio-thumb2.jpg" alt="portfolio"/>
                        <div class="popup-text">
                            <h2>Página con deslizable</h2>
                            <p>Página con una galería muy vistosa. Si tienes una sección de fotografías que quieras
                                mostrar al público esta es la que debes escoger</p>
                            <button onClick="location.href='<?php echo e(route('inicioP')); ?>'">Ir a la Pagina</button>
                        </div>
                    </div>
                </div>
                <!--Thumbnail End-->
                <!-- inicioBus -->
                <!--Thumbnail 3 Start-->
                <div class="mega-entry cat-all cat-one cat-two cat-three" id="entry-3"
                     data-src="images/proximamente_formato.png" data-width="800" data-height="536">

                    <!--Hover Effect Start-->
                    <a class="portfolio-popup" href=".popup3">
                        <div class="mega-hover alone notitle">

                            <!-- Link Button -->
                            <div class="mega-hoverview"></div>

                        </div>
                    </a>
                    <!--Hover Effect End-->

                </div>

                <!--Hidden content for Pop-up-->
                <div class="popup-wrapper">
                    <div class="content-popup popup3">
                        <img src="images/upload/portfolio-thumb3.jpg" alt="portfolio"/>
                        <div class="popup-text">
                            <h2>Página </h2>
                            <p>Página con una galería muy vistosa. Si tienes una sección de fotografías que quieras
                                mostrar al público esta es la que debes escoger</p>
                            <button>Ir a la Pagina</button>
                        </div>
                    </div>
                </div>
                <!--Thumbnail End-->

                <!--Thumbnail 4 Start-->
                <div class="mega-entry cat-all cat-four cat-two" id="entry-4" data-src="images/proximamente_formato.png"
                     data-width="600" data-height="600">

                    <!--Hover Effect Start-->
                    <a class="portfolio-popup" href=".popup4">
                        <div class="mega-hover alone notitle">

                            <!-- Link Button -->
                            <div class="mega-hoverview"></div>

                        </div>
                    </a>
                    <!--Hover Effect End-->

                </div>

                <!--Hidden content for Pop-up-->
                <div class="popup-wrapper">
                    <div class="content-popup popup4">
                        <img src="images/upload/portfolio-thumb4-popup.jpg" alt="portfolio"/>
                        <div class="popup-text">
                            <h2>Lorem Ipsum Dolor</h2>
                            <p>Lorem ipsum dolor sit amet consetetur elitr sed diam nonumy eirmod tempor invidunt ut
                                labore et dolore.</p>
                            <button>More Details</button>
                        </div>
                    </div>
                </div>
                <!--Thumbnail End-->

                <!--Thumbnail 5 Start-->
                <div class="mega-entry cat-all cat-two cat-one" id="entry-5" data-src="images/proximamente_formato.png"
                     data-width="590" data-height="400">

                    <!--Hover Effect Start-->
                    <a class="portfolio-popup" href=".popup5">
                        <div class="mega-hover alone notitle">

                            <!-- Link Button -->
                            <div class="mega-hoverview"></div>

                        </div>
                    </a>
                    <!--Hover Effect End-->

                </div>

                <!--Hidden content for Pop-up-->


            </div>
        </div>
        <!--Portfolio Thumbnails End-->

    </section>
    <!--Body Content End-->
    <section class="stripe portfolio-panel">
        <div class="homepanel-title-area">
            <h1><span class="homepanel-title" style="color: red">Nuestros Planes de Hosting</span></h1>
        </div>
    </section>

    <section class="stripe service-page-icon">
        <ul class="service-icon">
            <li>
                <div class="service-bordertop"></div>
                <div class="service-borderright"></div>
                <div class="service-borderbottom"></div>

                <div class="service-box">
                    <h2>Ligero</h2>
                    <div class="icon-wrapper">
                        <i class="fa fa-battery-1 fa-4x"></i>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <td><strong>1 GB</strong> Espacio en Disco</td>
                        </tr>
                        <tr>
                            <td><strong>10GB</strong> Transferencia Mensual</td>
                        </tr>
                        <tr>
                            <td><strong>Cuentas de Correo</strong> Ilimitadas</td>
                        </tr>
                        <tr>
                            <td><strong>Bases de datos MySql</strong> Ilimitadas</td>
                        </tr>
                        <tr>
                            <td><strong>cPanel</strong> Control Panel</td>
                        </tr>
                        <tr>
                            <td><strong>1 Registro de Dominio (.COM, .COM.MX)</strong> Incluido</td>
                        </tr>
                        <tr>
                            <td><strong>1 Dominio</strong> Hospedado</td>
                        </tr>
                    </table>
                </div>
            </li>
            <li>
                <div class="service-bordertop"></div>
                <div class="service-borderright"></div>
                <div class="service-borderbottom"></div>

                    <div class="service-box">
                        <h2>Básico</h2>
                        <div class="icon-wrapper">
                            <i class="fa fa-battery-2 fa-4x"></i>
                        </div>
                        <table>
                            <tr><td><strong>10GB</strong> Espacio en Disco</td></tr>
                            <tr><td><strong>80GB</strong> Transferencia Mensual</td></tr>
                            <tr><td><strong>Cuentas de Correo</strong> Ilimitadas</td></tr>
                            <tr><td><strong>Bases de datos MySql</strong> Ilimitadas</td></tr>
                            <tr><td><strong>cPanel</strong> Control Panel</td></tr>
                            <tr><td><strong>1 Registro de Dominio (.COM, .COM.MX)</strong> Incluido</td></tr>
                            <tr><td><strong>1 Dominio</strong> Hospedado</td></tr>
                        </table>
                    </div>

            </li>
            <li>
                <div class="service-bordertop"></div>
                <div class="service-borderright"></div>
                <div class="service-borderbottom"></div>

                    <div class="service-box">
                        <h2>Premium</h2>
                        <div class="icon-wrapper">
                            <i class="fa fa-battery-3 fa-4x"></i>
                        </div>
                        <table>
            <tr><td><strong>32GB</strong> Espacio en Disco</td></tr>
            <tr><td><strong>160GB</strong> Transferencia Mensual</td></tr>
            <tr><td><strong>Cuentas de Correo</strong> Ilimitadas</td></tr>
            <tr><td><strong>Bases de datos MySql</strong> Ilimitadas</td></tr>
            <tr><td><strong>cPanel</strong> Control Panel</td></tr>
            <tr><td><strong>1 Registro de Dominio (.COM, .COM.MX)</strong> Incluido</td></tr>
            <tr><td><strong>4 Dominios</strong> Hospedados</td></tr>
                        </table>
                    </div>

            </li>
            <li>
                <div class="service-bordertop"></div>
                <div class="service-borderright"></div>
                <div class="service-borderbottom"></div>

                    <div class="service-box">
                        <h2>Ultimate</h2>
                        <div class="icon-wrapper">
                            <i class="fa fa-battery-4 fa-4x"></i>
                        </div>
                        <table>
                        <tr><td><strong>100GB</strong> Espacio en Disco</td></tr>
                        <tr><td><strong>1000GB</strong> Transferencia Mensual</td></tr>
                        <tr><td><strong>Cuentas de Correo</strong> Ilimitadas</td></tr>
                        <tr><td><strong>Bases de datos MySql</strong> Ilimitadas</td></tr>
                        <tr><td><strong>cPanel</strong> Control Panel</td></tr>
                        <tr><td><strong>1 Registro de Dominio (.COM, .COM.MX)</strong> Incluido</td></tr>
                        <tr><td><strong>Dominios Ilimitados</strong> Hospedados</td></tr>
                        </table>
                    </div>
            </li>
        </ul>
    </section>

    <!--Portfolio Start-->
    <section class="stripe portfolio-panel">
        <div class="visible-lg visible-md">
            <div class="homepanel-title-area">
                <h1><span class="homepanel-title" style="color: red;">Tecnologías</span></h1>
            </div>

            <!--Portfolio Thumbnails-->
            <section class="containerPaginasWeb service">
                <ul>

                    <!--Service 1-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/html5fw.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Html 5</h2>
                                <p class="description-back">HTML5 (HyperText Markup Language, versión 5) es la quinta
                                    revisión importante del lenguaje básico de la World Wide Web, HTML.</p>
                            </div>
                        </a>
                    </li>
                    <!--End-->

                    <!--Service 2-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/css3PaginasWeb.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">CSS 3</h2>
                                <p class="description-back">CSS es un lenguaje utilizado en la presentación de
                                    documentos HTML. Sirve para organizar la presentación y aspecto de una página
                                    web.</p>
                            </div>
                        </a>
                    </li>
                    <!--End-->

                    <!--Service 3-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/JavascriptPaginasWebfw.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">JavaScript</h2>
                                <p class="description-back">JavaScript es un lenguaje de programación que permite crear
                                    efectos muy atractivos y dinámicos en las páginas web.</p>
                            </div>
                        </a>
                    </li>
                    <!--End-->

                    <!--Service 4-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/PHP_logofw.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">PHP</h2>
                                <p class="description-back">PHP Es un lenguaje de código abierto muy popular
                                    especialmente adecuado para el desarrollo web y que puede ser incrustado en
                                    HTML.</p>
                            </div>
                        </a>
                    </li>
                    <!--End-->

                    <!--Service 5-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/mysqlfw.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">MySql</h2>
                                <p class="description-back">MySQL es un sistema de gestión de bases de datos relacional,
                                    multihilo y multiusuario.</p>
                            </div>
                        </a>
                    </li>
                    <!--End-->

                    <!--Service 6-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/jqueryfw.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">jQuery</h2>
                                <p class="description-back">jQuery es una biblioteca de JavaScript, que permite
                                    simplificar la manera de interactuar con los documentos HTML, manipular el árbol
                                    DOM, manejar eventos y desarrollar animaciones.</p>
                            </div>
                        </a>
                    </li>
                    <!--End-->

                    <!--Service 7-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/ajaxfw.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Ajax</h2>
                                <p class="description-back">Ajax es una tecnología asíncrona, en el sentido de que los
                                    datos adicionales se solicitan al servidor y se cargan en segundo plano sin
                                    interferir con la visualización ni el comportamiento de la página.</p>
                            </div>
                        </a>
                    </li>
                    <!--End-->

                    <!--Service 7-->
                    <li class="flip">
                        <a href="#">
                            <div class="flip-front">
                                <img src="images/responsivefw.png" alt="service"/>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Responsive Design</h2>
                                <p class="description-back">Responsive Design es un nuevo paradigma del desarrollo web.
                                    Permite adaptar cada site a los diferentes formatos de dispositivos de acceso,
                                    smartphones, tabletas, portátiles.</p>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>