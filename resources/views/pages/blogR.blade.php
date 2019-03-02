@extends('layout/layout')
@section('contenido')
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
                        @foreach($posts as $post)
                        <li>
                            <figure>
                                <a href="blog-single.html">
                                    <div class="thumbnail-hover"></div>
                                    <!--<img src="images/upload/blog-thumb-style2-image1.jpg" alt="blog list" />-->
                                </a>
                            </figure>
                            <div class="blog-list-detail">
                                <div class="blog-header">
                                    <h2><a href="blog-single.html">{{$post->title}}</a></h2>
                                    <a href="#">
                                        <div class="comment-status">
                                            <div class="comment-count">5</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                                <p>{{$post->extract}}.</p>
                                <div class="blog-list-bottom">
                                    <nav class="blog-meta">
                                        <span><i class="fa fa-clock-o"></i><a href="#">{{$post->fecha_creacion->diffForHumans()}}</a></span>
                                        @foreach($post->tags as $tag)
                                        <span><a href="#">#{{$tag->nombre}}</a></span>
                                        @endforeach
                                        <span class="last-meta"><i class="fa fa-user"></i><a href="#">Admin</a></span>
                                    </nav>
                                    <button class="dark-button" onClick="location.href='blogSingle'">Read More</button>
                                </div>
                            </div>
                        </li>
                        <!--End-->
                            @endforeach

                    </ul>


                </div>

                <!--Sidebar Start-->

                <!--Sidebar End-->

            </section>
            <!--Body Content End-->

        <!--All Content End-->
@stop