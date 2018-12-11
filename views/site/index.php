<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="row">
        <section class="module request-cta">
            <div class="container" style="border: 1px solid; padding: 20px 20px 10px 20px;">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-xs-12 m-center">
                        <h4 class="font-alt">Dane kontaktowe</h4>

                        <p>
                            <strong>F.H.U. AUTOMOTIVE</strong><br>
                            WOLA NIESZKOWSKA 103<br>
                            32-700 BOCHNIA<br><br>

                            TELEFON: <strong>790-888-982</strong>

                        </p>
                    </div>
                    <div class="col-sm-9 col-md-9 col-xs-12">
                        <div class="col-md-4 col-sm-4 col-xs-12 m-center">
                            <h4 class="font-alt">Godziny pracy</h4><br>
                            <ul class="list-unstyled">
                                <li>PONIEDZIAŁEK – PIĄTEK <strong>8:00 – 18:00</strong></li>
                                <li>SOBOTA <strong>9:00 – 13:00</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <a href="<?= Url::to(['/kontakt']) ?>" class="btn btn-border-d btn-round m-margin">
                                        NAPISZ DO NAS
                                    </a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button class="btn btn-border-d btn-round">ZADZWOŃ: 790-888-982</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <div class="row">
        <section class="module lola" id="news" style="padding-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3"><h2 class="module-title font-alt">Nasze usługi</h2>
                        <div class="module-subtitle font-serif">
                            Jesteśmy młodą, dynamicznie rozwijającą się firmą zajmującą się sprzedażą używanych części
                            do samochodów.
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/pomoc-drogowa']) ?>">
                                    <img src="<?= Url::to('@web/images/pomoc.jpg') ?>" alt="POMOC DROGOWA">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/pomoc-drogowa']) ?>">
                                        POMOC DROGOWA
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Jeśli już zdarzy się coś nieprzewidzianego, najgorsze co można zrobić to panikować.
                                    Chcemy dać Ci poczucie bezpieczeństwa. Nasza pomoc drogowa dojedzie szybko we
                                    wskazane miejsce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/uzywane-czesci-samochodowe']) ?>">
                                    <img src="<?= Url::to('@web/images/car-1.jpeg') ?>"
                                         alt="UŻYWANE CZĘŚCI SAMOCHODOWE">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/uzywane-czesci-samochodowe']) ?>">
                                        UŻYWANE CZĘŚCI SAMOCHODOWE
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Wszytskie części, które mamy w ofercie pochodzą z pojazdów demontowanych w naszej
                                    stacji co daje nam możliwość przetestowania sprzedawanej części w aucie jak i
                                    później po zdemontowaniu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/uzywane-czesci-motocyklowe']) ?>">
                                    <img src="<?= Url::to('@web/images/moto-1.jpeg') ?>"
                                         alt="UŻYWANE CZĘŚCI MOTOCYKLOWE">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/uzywane-czesci-motocyklowe']) ?>">
                                        UŻYWANE CZĘŚCI MOTOCYKLOWE
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Wszytskie części, które mamy w ofercie pochodzą z pojazdów demontowanych w naszej
                                    stacji co daje nam możliwość przetestowania sprzedawanej części w motocyklu jak i
                                    później po zdemontowaniu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/skup-samochodow']) ?>">
                                    <img src="<?= Url::to('@web/images/car-2.jpg') ?>"
                                         alt="SKUP USZKODZONYCH SAMOCHODÓW">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/skup-samochodow']) ?>">
                                        SKUP USZKODZONYCH SAMOCHODÓW
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zakupimy od Państwa za gotówkę nie tylko samochody w dobrym stanie, ale również
                                    niesprawne mechanicznie, posiadające rozmaite defekty czy po usterce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/skup-motocykli']) ?>">
                                    <img src="<?= Url::to('@web/images/moto-2.jpeg') ?>"
                                         alt="SKUP USZKODZONYCH MOTOCYKLI">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/skup-motocykli']) ?>">
                                        SKUP USZKODZONYCH MOTOCYKLI
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zakupimy od Państwa za gotówkę nie tylko motocykle w dobrym stanie, ale również
                                    niesprawne mechanicznie, posiadające rozmaite defekty czy po usterce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/skup-quadow']) ?>">
                                    <img src="<?= Url::to('@web/images/quad.jpg') ?>" alt="SKUP USZKODZONYCH QUADÓW">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/skup-quadow']) ?>">
                                        SKUP USZKODZONYCH QUADÓW
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zakupimy od Państwa za gotówkę nie tylko quady w dobrym stanie, ale również
                                    niesprawne mechanicznie, posiadające rozmaite defekty czy po usterce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="<?= Url::to('@web/images/alle.png') ?>" alt="SKLEP INTERNETOWY ALLEGRO">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="#">
                                        SKLEP INTERNETOWY
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zapraszamy do naszego sklepu internetowego na portalu Allegro. Znajdą tam Państwo
                                    cały aktualny asortyment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?= $this->render('_my') ?>

        <section class="module pt-0 pb-0" id="contact">
            <div class="row position-relative m-0">
                <div class="col-xs-12 col-md-6">
                    <?php Pjax::begin(['enablePushState' => false]); ?>
                    <div class="row finance-image-content" style="padding: 15px 0px;">
                        <div class="col-md-10 col-md-offset-1">

                            <?php if ($success): ?>
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="ajax-response font-alt" id="contactFormResponse">
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            Twoja wiadomość została wysłana, dziękujemy!
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>


                            <h2 class="module-title font-alt align-left">
                                Napisz do Nas
                            </h2>
                            <?php $form = ActiveForm::begin([
                                'options' => ['data' => ['pjax' => true]],
                            ]) ?>

                            <?= $form->field($model, 'name')->textInput(['placeholder' => 'Imię i Nazwisko'])->label(false); ?>

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Adres e-mail'])->label(false); ?>

                            <?= $form->field($model, 'message')->textarea(['rows' => '7', 'placeholder' => 'Treść Wiadomości'])->label(false); ?>

                            <div class="text-center">
                                <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Wyślij
                                </button>
                            </div>
                            <?php ActiveForm::end() ?>
                        </div>
                        <?php Pjax::end(); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-6 side-image p-0">
                    <section id="map-section">
                        <img src="<?= \yii\helpers\Url::to('@web/images/rewers.jpg') ?>">
                    </section>
                </div>
            </div>
        </section>


        <section class="module lola" style="padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Miejsca w których działamy</h2>
                    </div>
                    <div class="col-md-12">
                        <hr class="divider-w pt-20">
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <ul class="filter font-alt" id="filters">
                        <li><a class="" href="#">Kraków</a></li>
                        <li><a class="" href="#">Tarnów</a></li>
                        <li><a class="" href="#">Bochnia</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>


</div>
