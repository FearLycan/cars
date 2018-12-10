<?php

use yii\helpers\Url;

$this->title = 'Używane części motocyklowe ' . ' - ' . Yii::$app->name;

?>


<div class="row">
    <section class="module-small" style="padding: 35px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="post-thumbnail">
                            <img src="<?= Url::to('@web/images/moto.jpeg') ?>" alt="Używane części motocyklowe ">
                        </div>

                        <div class="post-header font-alt">
                            <h1 class="post-title">
                                Używane części motocyklowe
                            </h1>
                        </div>

                        <div class="post-entry">




                        </div>
                    </div>


                </div>

                <?= $this->render('_sidebar') ?>

            </div>
        </div>
    </section>
</div>
