<?php //template name: Kontakt
get_header(); the_post(); ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">nasze
                    <strong>dane </strong>teleadresowe
                </h2>
                <hr>
            </div>

            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.pl/maps/place/Strzeszy%C5%84ska+76,+60-479+Pozna%C5%84/@52.4492514,16.8907156,17.29z/data=!4m5!3m4!1s0x4704436ee1035777:0xfd73aa3a8c66be35!8m2!3d52.450154!4d16.8922919"></iframe>
            </div>
            <div class="col-md-4">
                <p><strong>Dorota Łapa </strong>Dietetyk
                </p>
                <p>telefon:
                    <strong>501 055 411</strong>
                </p>
                <p>email:
                    <strong><a href="mailto:dorota.lapa@orkiszowepola.pl">dorota.lapa@orkiszowepola.pl</a></strong>
                </p>
                <p>adres:
                    <strong> <a href="http://www.orkiszowepola.pl/">Orkiszowe Pola</a></strong>
                    <br> ul. Strzeszyńska 76<br>60-479 Poznań
                </p>
            </div>
            <div class="clearfix"></div>
            <br>
            <br>

            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.pl/maps/place/YOHO+Clinic/@52.3951256,16.983829,17z/data=!4m13!1m7!3m6!1s0x47045bbc82c22ae9:0x1e3e0032719ab498!2sDymka+196,+Pozna%C5%84!3b1!8m2!3d52.3951256!4d16.9860177!3m4!1s0x47045bbc9d2e7a0b:0xbfe3155dd6189c31!8m2!3d52.395172!4d16.9859"></iframe>
            </div>
            <div class="col-md-4">
              <p><strong>Iwona Kotowska </strong>Terapeuta
              </p>
                <p>telefon:
                    <strong>696 085 556</strong>
                </p>
                <p>email:
                    <strong><a href="mailto:terapie.kotowska@gmail.com">terapie.kotowska@gmail.com</a></strong>
                </p>
                <p>adres:
                    <strong><a href="http://www.yohoclinic.com/">Yoho Clinic</a></strong>
                        <br>ul. Abpa Walentego Dymka 196/1<br> 61-245 Poznań
                </p>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Formularz </strong>kontaktowy
                </h2>
                <hr>
                <p>Możesz również do nas napisać używając poniższego formularza.</p>
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>imię</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>email adres</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>numer telefonu</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>wiadomość</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Wyślij</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->


<?php get_footer() ?>
