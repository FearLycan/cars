<?php
use yii\helpers\Url;

?>

<div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
    <div class="widget">
        <h5 class="widget-title font-alt">Menu</h5>
        <ul class="icon-list">
            <li><a href="<?= Url::to(['/o-nas']) ?>">O NAS</a></li>
            <li><a href="<?= Url::to(['/uzywane-czesci-samochodowe']) ?>">UŻYWANE CZĘŚCI SAMOCHODOWE </a></li>
            <li><a href="<?= Url::to(['/uzywane-czesci-motocyklowe']) ?>">UŻYWANE CZĘŚCI MOTOCYKLOWE </a></li>
            <li><a href="<?= Url::to(['/pomoc-drogowa']) ?>">POMOC DROGOWA </a></li>
            <li>
                <a href="#">SKUP POJAZDÓW USZKODZONYCH </a>
                <ul style="margin-left: 10px;">
                    <li><a href="<?= Url::to(['/skup-samochodow']) ?>"> SAMOCHODY </a></li>
                    <li><a href="<?= Url::to(['/skup-motocykli']) ?>">MOTOCYKLE </a></li>
                    <li><a href="<?= Url::to(['/skup-quadow']) ?>"> QUADY </a></li>
                </ul>
            </li>
            <li><a href="#">SKLEP INTERNETOWY </a></li>
            <li><a href="<?= Url::to(['/kontakt']) ?>">KONTAKT </a></li>
        </ul>
    </div>
    <div class="widget">
        <h5 class="widget-title font-alt">Kontakt</h5>
        <p>
            <strong>F.H.U. AUTOMOTIVE</strong><br>
            WOLA NIESZKOWSKA 103<br>
            32-700 BOCHNIA
        </p>

        <p>
            TELEFON: <strong>790-888-982</strong>
        </p>

        <p>
            <strong>CZYNNE:</strong><br>
            PONIEDZIAŁEK – PIĄTEK <strong>8:00 – 18:00</strong><br>
            SOBOTA <strong>9:00 – 13:00</strong>.
        </p>

    </div>
    <div class="widget">
        <h5 class="widget-title font-alt">Tag</h5>
        <div class="tags font-serif">
            <a href="#" rel="tag">AUDI</a>
            <a href="#" rel="tag">BMW</a>
            <a href="#" rel="tag">FIAT</a>
            <a href="#" rel="tag">FORD</a>
            <a href="#" rel="tag">HONDA</a>
            <a href="#" rel="tag">PEUGEOT</a>
            <a href="#" rel="tag">CITROEN</a>
            <a href="#" rel="tag">VOLSWAGEN</a>
            <a href="#" rel="tag">Anglia</a>
            <a href="#" rel="tag">Włochy</a>
            <a href="#" rel="tag">Niemcy</a>
            <a href="#" rel="tag">Quad</a>
            <a href="#" rel="tag">Motocykle</a>
            <a href="#" rel="tag">Samochody</a>
            <a href="#" rel="tag">Pomoc drogowa</a>
        </div>
    </div>
</div>
