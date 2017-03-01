<?php //template name: Strona główna
get_header(); the_post(); ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                          <?php echo wp_get_attachment_image( get_field('slide_1'), 'slider_image', false, array('class' => 'img-responsive img-full')); ?>
                        </div>
                        <div class="item">
                          <?php echo wp_get_attachment_image( get_field('slide_2'), 'slider_image', false, array('class' => 'img-responsive img-full')); ?>
                        </div>
                        <div class="item">
                          <?php echo wp_get_attachment_image( get_field('slide_3'), 'slider_image', false, array('class' => 'img-responsive img-full')); ?>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                już teraz
                </h2>
                <h1 class="brand-name">możesz oczyścić swój organizm</h1>
                <hr class="tagline-divider">
                <h2>
                  z nami
                        <strong>podejmij wyzwanie!</strong>

                </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12 box">
                <hr>
                <h2 class="intro-text text-center">
                  <?php the_field('tytuł1') ?>
                </h2>
                <hr>
                <img class="img-responsive img-border img-left" src="<?php the_field('photo1')?>"  alt="">
                <hr class="visible-xs">

                <p>
                  <?php the_field('tekst1') ?>
                </p><br>

                <p style="font-family: 'Amatic SC', 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 2em; color: tomato; text-align: center; background-color: rgba(0, 156, 184, 0.1)">
                  <?php the_field('tekst2') ?>
                </p>

                <!-- <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p> -->
            </div>
        </div>
    </div>


    <div class="row">
        <div class="box">
            <div class="col-lg-12 box">
                <hr>
                <h2 class="intro-text text-center">
                  <?php the_field('tytuł2') ?>
                </h2>
                <hr>
                <hr>
                <img class="img-responsive img-border img-left" src="<?php the_field('photo2')?>" alt="">
                <hr class="visible-xs">

                <p>
                  <?php the_field('tekst3') ?>
                </p><br>

                <p style="font-family: 'Amatic SC', 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 2em; color: tomato; text-align: center; background-color: rgba(0, 156, 184, 0.1)">
                  <?php the_field('tekst4') ?>
                </p><br>

                <p style="color: teal"><i>
                  <?php the_field('tekst5') ?>
              </i></p>


                <!-- <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                  <?php the_field('tytuł3') ?>
                </h2>
                <hr>
                <hr>
                <img class="img-responsive img-border img-left" src="<?php the_field('photo3') ?>" alt="">
                <hr class="visible-xs">
                <p>
                  <?php the_field('tekst6') ?>

                <p>
                  <?php the_field('tekst7') ?>
                </p><br>

                </p>

                <p style="color: seagreen"><i>
                  <?php the_field('tekst8') ?>
                </i></p>
                <!-- <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
            </div>
        </div>
    </div>

</div>
<!-- /.container -->


<?php get_footer() ?>
