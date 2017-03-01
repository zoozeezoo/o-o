<?php //template name: O nas
get_header(); the_post(); ?>
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <!-- <hr>
                <h2 class="intro-text text-center">About
                    <strong>business casual</strong>
                </h2>
                <hr> -->
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src="<?php the_field('fotomotto') ?>" alt="">
            </div>
            <div class="col-md-6", style="font-size: 2.2em; font-family: Amatic SC">
              <p>
                <?php the_field('motto') ?>
              </p>
                <!-- <p>This is a great place to introduce your company or project and describe what you do.</p>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Nasz
                    <strong>zespół</strong>
                </h2>
                <!-- <hr> -->
            </div>
            <div class="col-sm-6 text-center">
                <img class="img-responsive" src="<?php the_field('fotaiwona')  ?>" alt="">
                <h1>Iwona Kotowska
                </h1>
                <small>Terapeuta,
                Specjalista Leczenia Akupunkturą,Dietetyk Tradycyjnej Medycyny Chińskiej,Terapeuta Ajurwedy,Nauczyciel i Trener Indywidualny Jogi</small>
                <br><br>
                <p>
                Gabinet: Yoho Clinic, ul. Dymka 196/1, Poznań <br>oraz Orkiszowe Pola, os. Batorego 82, Poznań
                <br>
                <br>
                <img class="img-responsive" src="img/logo_OP.jpg" alt="">
                <br>
                <br>
                Terapeutka Medycyny Naturalnej. Absolwentka szeregu studiów i kursów akupunktury i Ajurwedy. Dyplomowana instruktorka jogi Iyengara. Konsultant dietetyczny ze specjalnością Dietetyka wg Medycyny Chińskiej. W praktyce terapeutycznej hołduje holistycznemu podejściu do organizmu i jego kondycji. Lata doświadczenia i codzienne stosowanie się do dawanych przez siebie wskazówek, pomagają jej skutecznie pomagać pacjentom cierpiącym na schorzenia metaboliczne, problemy z narządami ruchu, migreny i wiele innych. Wiedzę czerpała od uznanych autorytetów z dziedziny Medycyny Naturalnej jak dr n. med. Wiesław Nowak, lek. med. Bartosz Chmielnicki, prof. Sun Peillin z Chin, prof. Lie Jie z Holandii, dr Radha Thambirajah (Wielka Brytania), Suzanne Robidoux (Kanada, Izrael), dr Grażyna Rogulska, czy dr. Mariusz Giżycki.
                </p>
            </div>

            <div class="col-sm-6 text-center">
                <img class="img-responsive" src="<?php the_field('fotadorota')  ?>" alt="">
                <h1>Dorota Łapa
                </h1>
                <small>Dietetyk,
                Spec. Dietetyki Tradycyjnej Medycyny Chińskiej, wsparcie diety ziołami i naturalnymi metodami leczenia,
                odżywianie dla zdrowia na bazie
                diagnozy medycyny chińskiej.</small><br><br>
                <p>
                Gabinet: Orkiszowe Pola, ul. Strzeszyńska 76, Poznań.
                <br>
                <br>
                <img class="img-responsive" src="../img/logo_OP.jpg" alt="">
                <br>
                <br>
                Założycielka Centrum Naturalnego Odżywiania Orkiszowe Pola w Poznaniu. Absolwentka Kierunku Fizjologia Żywienia Człowieka, Uniwersytetu Przyrodniczego w Poznaniu oraz Dietetyki Tradycyjnej Medycyny Chińskiej w Instytucie Avicenny z Francji. Z zawodu jest dietetykiem i pielęgniarką oraz zajmuje się aktywną promocją zdrowia i zdrowego stylu życia poprzez liczne działania edukacyjne. Od lat kształci się w najróżniejszych kierunkach związanych z dietetyką i medycyną naturalną, m.in. w ziołolecznictwie, TCM, medycynie św. Hildegardy,  teoriach dotyczących diagnostyki alergii i nietolerancji pokarmowej.
                </p>
              </div>

            <div class="clearfix"></div>
        </div>
    </div>

</div>
<!-- /.container -->

<?php get_footer() ?>
