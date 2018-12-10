<?php

use yii\helpers\Url;

$this->title = 'Używane części samochodowe' . ' - ' . Yii::$app->name;

?>


<div class="row">
    <section class="module-small" style="padding: 35px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="post-thumbnail">
                            <img src="<?= Url::to('@web/images/car.jpeg') ?>" alt="Używane części samochodowe">
                        </div>

                        <div class="post-header font-alt">
                            <h1 class="post-title">
                                Używane części samochodowe
                            </h1>
                        </div>

                        <div class="post-entry">

                            <p>
                                UŻYWANE CZĘŚCI SAMOCHODOWE:
                            </p>
                            <ul>
                                <li><strong>AUDI</strong>: A4 B5, A4 B6, A4 B7</li>
                                <li><strong>BMW</strong>: E46, E83, E87</li>
                                <li><strong>FIAT</strong>: STILO, GRANDE PUNTO</li>
                                <li><strong>FORD</strong>: FIESTA, MONDEO, FOCUS</li>
                                <li><strong>HONDA</strong>: CIVIC VI, CIVIC VIII - UFO, ACCORD VII</li>
                                <li><strong>PEUGEOT</strong>: 206CC, 407SW</li>
                                <li><strong>CITROEN</strong>: C2, C4</li>
                                <li><strong>VOLSWAGEN</strong>: BORA, GOLF, PASSAT, PHAETON</li>
                            </ul>

                        </div>
                    </div>


                </div>

                <?= $this->render('_sidebar') ?>

            </div>
        </div>
    </section>
</div>
