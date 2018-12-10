<?php
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$this->title = 'Kontakt' . ' - ' . Yii::$app->name;
?>

<div class="row">
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195370.30972412214!2d20.352041003721293!3d49.95563409121295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471622cdea52ec27%3A0xcd4766adf4708ae5!2sF.H.U.+AUTOMOTIVE!5e0!3m2!1spl!2spl!4v1544465086349"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>


<div class="row">
    <?php Pjax::begin(['enablePushState' => false]); ?>

    <?php if ($success): ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="ajax-response font-alt" id="contactFormResponse">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        Twoja wiadomość została wysłana, dziękujemy!
                    </div>
                </div>

            </div>
        </div>
    <?php endif; ?>


    <div class="col-xs-12 col-sm-6 col-md-6">
        <h4 class="font-alt">Napisz do nas</h4><br>

        <?php $form = ActiveForm::begin([
            'options' => ['data' => ['pjax' => true]],
        ]) ?>

        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Imię i Nazwisko'])->label(false); ?>

        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Adres e-mail'])->label(false); ?>

        <?= $form->field($model, 'message')->textarea(['rows' => '7', 'placeholder' => 'Treść Wiadomości'])->label(false); ?>

        <div class="text-center">
            <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Wyślij</button>
        </div>
        <?php ActiveForm::end() ?>


    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <h4 class="font-alt">Dane kontaktowe</h4>

        <p>
            <strong>F.H.U. AUTOMOTIVE</strong><br>
            WOLA NIESZKOWSKA 103<br>
            32-700 BOCHNIA<br><br>

            TELEFON: <strong>790-888-982</strong>

        </p>

        <hr>
        <h4 class="font-alt">Godziny pracy</h4><br>
        <ul class="list-unstyled">
            <li>PONIEDZIAŁEK – PIĄTEK <strong>8:00 – 18:00</strong></li>
            <li>SOBOTA <strong>9:00 – 13:00</strong></li>
        </ul>

    </div>

    <?php Pjax::end(); ?>
</div>
