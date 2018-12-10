<?php

use yii\helpers\Url;

$this->title = 'O nas' . ' - ' . Yii::$app->name;

?>
<div class="row">
    <section class="module-small" style="padding: 35px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="post-thumbnail">
                            <img src="<?= Url::to('@web/images/o-nas.jpeg') ?>" alt="O nas">
                        </div>

                        <div class="post-header font-alt">
                            <h1 class="post-title">
                                O Nas
                            </h1>
                        </div>

                        <div class="post-entry">

                            <h2>Witamy na stronie firmy F.H.U. AUTOMOTIVE.</h2>

                            <p>Swoje usługi na polskim rynku wykonujemy od 2016 roku.</p>

                            <p>
                                Jesteśmy młodą, dynamicznie rozwijającą się firmą zajmującą się sprzedażą używanych
                                części
                                do samochodów.
                            </p>

                            <p>
                                Posiadamy szeroki asortyment używanych części zamiennych do różnych marek i modeli
                                samochodów osobowych.
                            </p>

                            <p>
                                W swoim katalogu posiadamy części do marek, takich jak:
                            </p>

                            <ul>
                                <li>AUDI,</li>
                                <li>BMW,</li>
                                <li>FIAT,</li>
                                <li>FORD,</li>
                                <li>HONDA,</li>
                                <li>PEUGEOT,</li>
                                <li>CITROEN,</li>
                                <li>VOLSWAGEN.</li>
                            </ul>

                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                </div>
                            </div>

                            <h3>
                                Zajmujemy się również sprzedażą używanych części do motocykli.
                            </h3>

                            <p>
                                Części importujemy w głównej mierze z:
                            </p>

                            <ul>
                                <li>Anglii,</li>
                                <li>Niemiec,</li>
                                <li>Włoch.</li>
                            </ul>

                            <p>
                                Siedziba naszej firmy mieści się w Woli Nieszkowskiej, natomiast działamy również poza
                                rynkiem lokalnym. Sprawny i sprawdzony system dostaw powoduje, że niezwłocznie
                                realizujemy
                                zamówienia płynące z każdego regionu naszego kraju oraz innych krajów Unii Europejskiej.
                            </p>

                            <p>
                                Tradycyjną sprzedaż wspomagamy również portalem <a href="https://allegro.pl"
                                                                                   target="_blank">Allegro</a>.
                            </p>

                        </div>
                    </div>
                    <?= $this->render('_my') ?>
                </div>

                <?= $this->render('_sidebar') ?>

            </div>
        </div>
    </section>
</div>