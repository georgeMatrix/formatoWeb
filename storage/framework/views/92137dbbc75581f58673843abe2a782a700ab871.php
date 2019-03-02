
<?php $__env->startSection('contenido'); ?>
    <?php $pagina = 7; ?>
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

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>