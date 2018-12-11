<?php

use yii\helpers\Url;

$this->title = 'Skup uszkodzonych motocykli' . ' - ' . Yii::$app->name;

?>


<div class="row">
    <section class="module-small" style="padding: 35px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="post-thumbnail">
                            <img src="<?= Url::to('@web/images/pexels-photo-1407130.jpeg') ?>" alt="Pomoc drogowa">
                        </div>

                        <div class="post-header font-alt">
                            <h1 class="post-title">
                                SKUP USZKODZONYCH MOTOCYKLI
                            </h1>
                        </div>

                        <div class="post-entry">

                            <p>W ramach naszej działalności prowadzimy skup motocykli wybranych marek.</p>

                            <p>Po otrzymaniu od Państwa zapytania sprzedażowego, skontaktujemy się w celu dokonania
                                bezpłatnej wyceny.</p>

                            <p>
                                <strong>
                                    Skupujemy pojazdy w każdym stanie (niesprawne, uszkodzone, powypadkowe), bez dowodu,
                                    karty pojazdu i przeglądu.
                                </strong>
                            </p>

                            <p>Posiadamy własny i <a href="<?= Url::to(['/pomoc-drogowa']) ?>"><u>profesjonalny transport</u></a> </p>

                            <p>Gwarantujemy miłą i fachową obsługę.</p>

                            <ul>
                                <li>Płacimy gotówką.</li>
                                <li>Darmowa wycena.</li>
                                <li>Darmowy dojazd.</li>
                                <li>Odbiór auta zazwyczaj w tym samym dniu.</li>
                            </ul>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="<?= Url::to(['/kontakt']) ?>" class="btn btn-border-d btn-round m-margin">
                                Wyślij zapytanie sprzedażowe
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-border-d btn-round">ZADZWOŃ: 790-888-982</button>
                        </div>
                    </div>


                </div>

                <?= $this->render('_sidebar') ?>

            </div>
        </div>
    </section>
</div>
