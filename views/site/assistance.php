<?php

use yii\helpers\Url;

$this->title = 'Pomoc drogowa' . ' - ' . Yii::$app->name;

?>


<div class="row">
    <section class="module-small" style="padding: 35px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="post-thumbnail">
                            <img src="<?= Url::to('@web/images/laweta-1.png') ?>" alt="Pomoc drogowa">
                        </div>

                        <div class="post-header font-alt">
                            <h1 class="post-title">
                                Pomoc drogowa
                            </h1>
                        </div>

                        <div class="post-entry">

                            <p>
                                Świadczymy profesjonalną pomoc drogową na terenie południowej Polski.
                            </p>

                            <p>
                                Oferujemy przewóz pojazdów, maszyn oraz innych przedmiotów auto-lawetą o DMC do 3.5T.
                            </p>
                            <p>
                                Wymiary najazdu:
                            </p>
                            <ul>
                                <li>Długość – <strong>4.4m</strong></li>
                                <li>Szerokość – <strong>2.1m</strong></li>
                                <li>+ wciągarka – <strong>4T</strong></li>
                            </ul>

                            <h5><strong>CENY USTALANE INDYWIDUALNIE W ZALEŻNOŚCI OD RODZAJU PRZEWOŻONEGO SAMOCHODU, OBRANEGO
                                    KIERUNKU ORAZ ILOŚCI KILOMETRÓW.</strong></h5>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="<?= Url::to(['/kontakt']) ?>" class="btn btn-border-d btn-round m-margin">
                               NAPISZ DO NAS
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-border-d btn-round">ZADZWOŃ: 790-888-982</button>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <img src="<?= Url::to('@web/images/rewers.jpg') ?>" alt="Pomoc drogowa Mapa">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <img src="<?= Url::to('@web/images/laweta-2.jpg') ?>" alt="Pomoc drogowa">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <img src="<?= Url::to('@web/images/laweta-3.jpg') ?>" alt="Pomoc drogowa">
                        </div>
                    </div>

                </div>

                <?= $this->render('_sidebar') ?>

            </div>
        </div>
    </section>
</div>
