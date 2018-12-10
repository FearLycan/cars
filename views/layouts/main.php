<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$home = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' && count(Yii::$app->request->get()) == 0;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<?php $this->beginBody() ?>

<div class="page-loader">
    <div class="loader">Loading...</div>
</div>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => $home ? 'navbar navbar-custom navbar-fixed-top navbar-transparent' : 'navbar navbar-custom navbar-fixed-top',
        ],
    ]);

    $items[] = ['label' => 'O NAS', 'url' => ['/o-nas']];

    $items[] = ['label' => 'CZĘŚCI',
        'items' => [
            ['label' => 'UŻYWANE CZĘŚCI SAMOCHODOWE', 'url' => ['/uzywane-czesci-samochodowe']],
            ['label' => 'UŻYWANE CZĘŚCI MOTOCYKLOWE', 'url' => ['/uzywane-czesci-motocyklowe']],
        ],
    ];
    $items[] = ['label' => 'POMOC DROGOWA', 'url' => ['/pomoc-drogowa']];

    $items[] = ['label' => 'SKUP POJAZDÓW USZKODZONYCH',
        'items' => [
            ['label' => 'SAMOCHODY', 'url' => ['/skup-samochodow']],
            ['label' => 'MOTOCYKLE', 'url' => ['/skup-motocykli']],
            ['label' => 'QUADY', 'url' => ['/skup-quadow']],
        ]
    ];

    $items[] = ['label' => 'SKLEP INTERNETOWY', 'url' => ['#']];
    $items[] = ['label' => 'KONTAKT', 'url' => ['/kontakt']];

    if (!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdministrator()) {
        $items[] = ['label' => 'Admin', 'url' => ['/admin']];
    }

    if (Yii::$app->user->isGuest) {
        //$items[] = ['label' => 'Registration', 'url' => ['/auth/registration']];
        ///$items[] = ['label' => 'Login', 'url' => ['/auth/login']];
    } else {
        $items[] = [
            'label' => Yii::$app->user->identity->name,
            'items' => [
                ['label' => 'Logout',
                    'url' => ['/auth/logout'],
                    'linkOptions' => ['data-method' => 'post'],
                ],
            ],
        ];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
    ]);

    NavBar::end();
    ?>

    <?php if ($home): ?>
        <section class="home-section bg-dark bg-gradient" id="home"
                 data-background="<?= Url::to('@web/images/home/home-' . rand(1, 11) . '.jpg') ?>">
            <div class="titan-caption">
                <div class="caption-content">
                    <div class="font-alt mb-10 titan-title-size-1">Witamy na stronie firmy</div>
                    <div class="font-alt mb-30 titan-title-size-4"><?= Yii::$app->name ?></div>
                    <div class="font-alt mb-10 titan-title-size-1">
                        Jesteśmy młodą, dynamicznie rozwijającą się firmą zajmującą się sprzedażą używanych części do samochodów.
                    </div>
                </div>
        </section>
    <?php endif; ?>

    <div class="container">
        <?= $content ?>
    </div>

    <hr class="divider-w">
    <section class="module-small">
        <div class="container">
            <div class="row client">
                <div class="owl-carousel text-center" data-items="6" data-pagination="false"
                     data-navigation="false">
                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/audi.jpg') ?>" alt="Audi"/></div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/bmw.jpg') ?>" alt="BMW"/></div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/fiat.jpg') ?>" alt="Fiat"/></div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/ford.jpg') ?>" alt="Ford"/></div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/honda.jpg') ?>" alt="Honda"/></div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/peugeot.jpg') ?>" alt="Peugeot"/></div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/citroen.jpg') ?>" alt="Citroen"/></div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="client-logo">
                                <img src="<?= Url::to('@web/images/brands/volswagen.jpg') ?>" alt="Volswagen"/></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <p class="copyright font-alt">
                    © <?= date('Y') ?>&nbsp;
                    <a href="<?= Yii::$app->homeUrl ?>"><?= Yii::$app->name ?></a>, All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
<?= $this->blocks['script'] ?>
</body>
</html>
<?php $this->endPage() ?>
