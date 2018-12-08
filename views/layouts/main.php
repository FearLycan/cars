<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-custom navbar-fixed-top',
        ],
    ]);

    $items[] = ['label' => 'O NAS', 'url' => ['site/page', 'slug' => 'o-nas']];

    $items[] = ['label' => 'CZĘŚCI',
        'items' => [
            ['label' => 'UŻYWANE CZĘŚCI SAMOCHODOWE', 'url' => ['#']],
            ['label' => 'UŻYWANE CZĘŚCI MOTOCYKLOWE', 'url' => ['#']],
        ],
    ];
    $items[] = ['label' => 'POMOC DROGOWA', 'url' => ['site/page', 'slug' => 'pomoc-drogowa']];

    $items[] = ['label' => 'SKUP POJAZDÓW USZKODZONYCH',
        'items' => [
            ['label' => 'SAMOCHODY', 'url' => ['/auth/logout']],
            ['label' => 'MOTOCYKLE', 'url' => ['/auth/logout']],
            ['label' => 'QUADY', 'url' => ['/auth/logout']],
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

    <div class="container">
        <?= $content ?>
    </div>
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
</body>
</html>
<?php $this->endPage() ?>
