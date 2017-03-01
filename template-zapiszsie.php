<?php //template name: Zapisz się
get_header(); the_post() ?>


<div class="container">

    <!-- <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">


                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>


                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="<?php bloginfo( 'template_url' ); ?>/img/slide-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="<?php bloginfo( 'template_url' ); ?>/img/slide-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="<?php bloginfo( 'template_url' ); ?>/img/slide-3.jpg" alt="">
                        </div>
                    </div>


                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome to</small>
                </h2>
                <h1 class="brand-name">Business Casual</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>By
                        <strong>Start Bootstrap</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="box">

            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="<?php the_field('foto1')?>" alt="">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Oczyść organizm
                        <strong>Gąski 2017 </strong>
                    </h2>
                    <hr>
                </div>

                <p>
                  <?php
                  the_content() ?>
                </p>

            </div>
          </div>
        </div>


<?php get_footer() ?>
