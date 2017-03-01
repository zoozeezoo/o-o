<?php //template name: Wyjazdy
get_header(); the_post(); ?>

<div class="container">

    <div class="row">
        <div class="box">

            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="<?php the_field('foto1')?>" alt="">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Program
                        <strong>wyjazdu</strong>
                    </h2>
                    <hr>
                </div>
                <!-- <h2>Post Title
                    <br>
                    <small>October 13, 2013</small>
                </h2> -->
                <p>
                  <?php the_field('program') ?>
                </p>
                  <p><i>
                    <?php the_field('opinia1') ?>

                  </i></p>
                    <!-- <a href="#" class="btn btn-default btn-lg">Read More</a> -->
                <hr>
            </div>
          </div>
        </div>


    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="<?php the_field('foto2')?>" alt="">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Zalecenia
                        <strong>przedwyjazdowe</strong>
                    </h2>
                    <hr>
                </div>
                <!-- <h2>Post Title
                    <br>
                    <small>October 13, 2013</small>
                </h2> -->
                <p>
                  <?php the_field('zalecenia') ?>
                  <p>
                    <i>
                      <?php the_field('opinia2') ?>
                    </i>
                  </p>
              </p>
                <!-- <a href="#" class="btn btn-default btn-lg">Read More</a> -->
                <hr>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="box">
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="<?php the_field('foto3')?>" alt="">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Pakiety wyjazdowe</strong>
                    </h2>
                    <hr>
                </div>
                <!-- <h2>Post Title
                    <br>
                    <small>October 13, 2013</small>
                </h2> -->
                <p>
                  <?php the_field('pakiety') ?>
                </p>
                <!-- <a href="#" class="btn btn-default btn-lg">Read More</a> -->
                <hr>
            </div>
          </div>
        </div>

            <!-- <div class="col-lg-12 text-center">
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div> -->

        <div class="row">
          <div class="box">
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="<?php the_field('foto4')?>" alt="">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Promocyjna oferta
                        <strong>zabiegów kosmetologii estetycznej</strong>
                    </h2>
                    <hr>
                </div>
                <p>
                  <?php the_field('promocja') ?>
                </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="box">
              <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="<?php the_field('foto5')?>" alt="">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Opinie uczestników</strong>
                    </h2>
                    <hr>
                </div>
                <p>
                  <i>
                    <?php the_field('opinie') ?>
                  </i>
                </p>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->


<?php get_footer() ?>
