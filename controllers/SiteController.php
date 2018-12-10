<?php

namespace app\controllers;

use app\models\forms\ContactForm;
use Yii;
use yii\filters\AccessControl;
use app\components\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $success = false;
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->send()) {
            $success = true;
            $model = new ContactForm();

        }

        return $this->render('index', [
            'model' => $model,
            'success' => $success,
        ]);
    }

    public function actionContact()
    {
        $success = false;
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->send()) {
            $success = true;
            $model = new ContactForm();

        }

        return $this->render('contact', [
            'model' => $model,
            'success' => $success,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAssistance()
    {
        return $this->render('assistance');
    }

    public function actionUsedPartsCar()
    {
        return $this->render('used-parts-car');
    }

    public function actionUsedPartsMoto()
    {
        return $this->render('used-parts-moto');
    }

    public function actionBuyCar()
    {
        return $this->render('buy-car');
    }

    public function actionBuyMoto()
    {
        return $this->render('buy-moto');
    }

    public function actionBuyQuad()
    {
        return $this->render('buy-quad');
    }
}
