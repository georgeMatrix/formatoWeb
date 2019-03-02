@extends('layout/layout')
@section('contenido')
    <?php $pagina = 6; ?>

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
@stop