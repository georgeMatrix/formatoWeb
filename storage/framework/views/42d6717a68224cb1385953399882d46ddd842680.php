<?php $__env->startSection('contenido'); ?>
    <?php $pagina = 9; ?>
            <!--Page Title-->
            <div class="page-title">
                <div class="page-title-detail">
                    <h1>Blog</h1>
                    <p class="sub-title">Nonumy eirmod tempor invidunt labore</p>
                </div>
                <nav class="page-navigation">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>blog</li>
                    </ul>
                </nav>
            </div>
            <!--End-->

            <!--Body Content Start-->
            <section class="blog-wrapper">
                <div class="blog-vertical">
                    <ul class="blog-list blog-list-style2">

                        <!--Blog List 1-->
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <figure>
                                <a href="blog-single.html">
                                    <div class="thumbnail-hover"></div>
                                    <!--<img src="images/upload/blog-thumb-style2-image1.jpg" alt="blog list" />-->
                                </a>
                            </figure>
                            <div class="blog-list-detail">
                                <div class="blog-header">
                                    <h2><a href="blog-single.html"><?php echo e($post->title); ?></a></h2>
                                    <a href="#">
                                        <div class="comment-status">
                                            <div class="comment-count">5</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                                <p><?php echo e($post->extract); ?>.</p>
                                <div class="blog-list-bottom">
                                    <nav class="blog-meta">
                                        <span><i class="fa fa-clock-o"></i><a href="#"><?php echo e($post->fecha_creacion->diffForHumans()); ?></a></span>
                                        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span><a href="#">#<?php echo e($tag->nombre); ?></a></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <span class="last-meta"><i class="fa fa-user"></i><a href="#">Admin</a></span>
                                    </nav>
                                    <button class="dark-button" onClick="location.href='blogSingle'">Read More</button>
                                </div>
                            </div>
                        </li>
                        <!--End-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>


                </div>

                <!--Sidebar Start-->

                <!--Sidebar End-->

            </section>
            <!--Body Content End-->

        <!--All Content End-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>