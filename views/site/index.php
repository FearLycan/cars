<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="row">
        <section class="module" style="padding-bottom: 0; padding-top: 0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">CZĘŚCI I AKCESORIA</h2>
                        <div class="module-subtitle font-serif">

                            <p>
                                Nasza firma prowadzi sprzedaż części głównie używanych jak również nowych do różnych
                                modeli
                                samochodów i motocykli. Asortyment posiadanych części sięga kilku tysięcy egzemplarzy.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr class="divider-w pt-20">
                    </div>
                </div>
                <div class="row multi-columns-row" id="offer-button">

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta1">
                            <div>Układy mechaniczne</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta2">
                            <div>Układy wydechowe</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta3">
                            <div>Układy hamulcowe</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta4">
                            <div>Chłodnice</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta5">
                            <div>Układy klimatyzacji</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta6">
                            <div>Blacharka</div>
                        </button>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta7">
                            <div>Zawieszenia</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-4 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta8">
                            <div>Części elektryczne i elektroniczne</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta9">
                            <div>Oświetlenie</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta10">
                            <div>Układy AIR BAG</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta11">
                            <div>Szyby</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta12">
                            <div>Elementy plastikowe</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta13">
                            <div>Akcesoria tuningowe</div>
                        </button>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xs-12 b-margin">
                        <button class="btn btn-b btn-round col-md-12 col-sm-12 col-xs-12" data-id="#oferta14">
                            <div>Części eksploatacyjne</div>
                        </button>
                    </div>

                </div>
                <div class="row offers">
                    <div id="oferta1"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-show">
                        <h2>Układy mechaniczne</h2>
                        <div class="txt">
                            <ul>
                                <li>skrzynie biegów manualne i automatyczne</li>
                                <li>sprzęgła: pompy, tarcze, dociski, łożyska i wysprzęgliki, koła zamachowe</li>
                                <li>półosie z przegubami</li>
                                <li>wały napędowe</li>
                                <li>przekładnie kierownicze zwykłe oraz ze wspomaganiem hydraulicznym i elektrycznym
                                </li>
                                <li>rozruszniki</li>
                                <li>alternatory</li>
                                <li>pompy ABS oraz Servo</li>
                                <li>aparaty zapłonowe</li>
                                <li>silniki z kompletną dokumentacją</li>
                                <li>kolektory ssące i wydechowe</li>
                                <li>wały korbowe</li>
                                <li>korbowody</li>
                                <li>tłoki</li>
                                <li>pompy wodne oraz olejowe</li>
                                <li>łapy oraz poduszki mocujące silnik</li>
                                <li>głowice</li>
                            </ul>
                        </div>
                        <div class="img">
                            <img class="thumbnail"
                                 src="<?= Url::to('@web/images/parts/parts_uklady_mechaniczne.jpg') ?>"
                                 alt="parts_uklady_mechaniczne.jpg">
                            <img class="thumbnail"
                                 src="<?= Url::to('@web/images/parts/parts_uklady_mechaniczne_2.jpg') ?>"
                                 alt="parts_uklady_mechaniczne_2.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta2"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Układy wydechowe</h2>
                        <div class="txt">
                            <ul>
                                <li>kolektory wydechowe</li>
                                <li>tłumiki</li>
                                <li>katalizatory</li>
                                <li>dwururki wydechowe</li>
                                <li>sondy LAMBDA</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_uklady_wydechowe.jpg') ?>"
                                              alt="parts_uklady_wydechowe.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta3"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Układy hamulcowe</h2>
                        <div class="txt">
                            <ul>
                                <li>tarcze</li>
                                <li>klocki</li>
                                <li>zaciski</li>
                                <li>bębny</li>
                                <li>cylinderki</li>
                                <li>części do naprawy zacisków</li>
                                <li>pompy hamulcowe + serwo</li>
                                <li>przewody hamulcowe</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail" src="<?= Url::to('@web/images/parts/hamulce.jpg') ?>"
                                              alt="hamulce.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta4"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Chłodnice</h2>
                        <div class="txt">
                            <ul>
                                <li>do silników benzynowych oraz diesla</li>
                                <li>do skrzyń manualnych i automatycznych</li>
                                <li>wentylatory</li>
                                <li>nagrzewnice</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_chlodnice.jpg') ?>"
                                              alt="parts_chlodnice.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta5"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Układy klimatyzacji</h2>
                        <div class="txt">
                            <ul>
                                <li>sprężarki</li>
                                <li>chłodnice</li>
                                <li>parowniki</li>
                                <li>wentylatory</li>
                                <li>przewody ciśnieniowe</li>
                                <li>wiązki elektryczne</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_uklady_klimatyzacji.jpg') ?>"
                                              alt="parts_uklady_klimatyzacji.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta6"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Blacharka</h2>
                        <div class="txt">
                            <ul>
                                <li>zderzaki</li>
                                <li>maski</li>
                                <li>drążki reakcyjne przednie oraz tylne</li>
                                <li>błotniki przednie i tylne</li>
                                <li>wzmocnienia przednie i tylne</li>
                                <li>belki zderzaków</li>
                                <li>podłużnice przednie oraz tylne</li>
                                <li>dachy</li>
                                <li>progi</li>
                                <li>słupki</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_blacharka.jpg') ?>"
                                              alt="parts_blacharka.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta7"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Zawieszenia</h2>
                        <div class="txt">
                            <ul>
                                <li>zwrotnice przednie oraz tylne</li>
                                <li>wahacze przednie oraz tylne</li>
                                <li>amortyzatory</li>
                                <li>sprężyny</li>
                                <li>drążki reakcyjne przednie oraz tylne</li>
                                <li>trawersa, kołyska - przód oraz tył</li>
                                <li>osie skrętne</li>
                                <li>łączniki stabilizatora</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_zawieszenia.jpg') ?>"
                                              alt="parts_zawieszenia.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta8"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Części elektryczne i elektroniczne</h2>
                        <div class="txt">
                            <ul>
                                <li>komputery</li>
                                <li>układy bezpieczników</li>
                                <li>przekaźniki</li>
                                <li>wentylatory</li>
                                <li>różne czujniki</li>
                                <li>zespolone przełączniki pod kierownice</li>
                                <li>podnośniki szyb</li>
                                <li>prędkościomierze</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_elektronika.jpg') ?>"
                                              alt="parts_elektronika.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta9"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Oświetlenie</h2>
                        <div class="txt">
                            <ul>
                                <li>reflektory przednie ksenonowe oraz zwykłe</li>
                                <li>halogeny</li>
                                <li>kierunkowskazy przednie i boczne</li>
                                <li>elementy oświetlenia wnętrza</li>
                                <li>lampy tylne</li>
                                <li>lampy pozycyjne</li>
                                <li>LEDy</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_oswietlenie.jpg') ?>"
                                              alt="parts_oswietlenie.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta10"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Układy AIR BAG</h2>
                        <div class="txt">
                            <ul>
                                <li>poduszki kierowcy, pasażera oraz boczne</li>
                                <li>kurtyny powietrzne</li>
                                <li>deski rozdzielcze z poduszką lub bez</li>
                                <li>sensory komputerowe</li>
                                <li>czujniki zderzenia</li>
                                <li>wiązki elektryczne</li>
                                <li>taśmy pod kierownice</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_uklady_airbag.jpg') ?>"
                                              alt="parts_uklady_airbag.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta11"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Szyby</h2>
                        <div class="txt">
                            <ul>
                                <li>przednie podgrzewane oraz z czujnikami deszczu</li>
                                <li>szklane szyberdachy</li>
                                <li>boczne</li>
                                <li>tylne</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_szyby.jpg') ?>"
                                              alt="parts_szyby.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta12"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Elementy plastikowe</h2>
                        <div class="txt">
                            <ul>
                                <li>zderzaki przednie oraz tylne</li>
                                <li>listwy boczne na progi oraz drzwi</li>
                                <li>półki tylne</li>
                                <li>kierownice</li>
                                <li>filtry powietrza</li>
                                <li>zbiorniki wspomagania, wyrównawcze i spryskiwaczy</li>
                                <li>lusterka boczne manualne, elektryczne oraz podgrzewane</li>
                                <li>osłony silnika</li>
                                <li>nadkola</li>
                                <li>deski rozdzielcze</li>
                                <li>nagrzewnice wraz z obudową</li>
                                <li>atrapy przednie oraz blendy tylne</li>
                                <li>siedzenia</li>
                                <li>kokpity środkowe</li>
                                <li>tapicerki</li>
                                <li>podsufitki</li>
                                <li>rezonatory</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_elementy_plastikowe.jpg') ?>"
                                              alt="parts_elementy_plastikowe.jpg">
                            <img class="thumbnail"
                                 src="<?= Url::to('@web/images/parts/parts_elementy_plastikowe_2.jpg') ?>"
                                 alt="parts_elementy_plastikowe_2.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta13"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Akcesoria tuningowe</h2>
                        <div class="txt">
                            <ul>
                                <li>tuningowe układy dolotowe</li>
                                <li>tuningowe oświetlenie</li>
                                <li>swapy silnikowe oraz hamulcowe</li>
                                <li>sportowe kierownice</li>
                                <li>zestawy xenonów</li>
                                <li>alufelgi</li>
                                <li>rozpórki</li>
                                <li>gałki zmiany biegów</li>
                                <li>ozdobne nakrętki kół</li>
                                <li>ospoilerowanie</li>
                                <li>układy wydechowe</li>
                                <li>liczniki itd.</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_akcesoria_tuningowe.jpg') ?>"
                                              alt="parts_akcesoria_tuningowe.jpg">
                            <img class="thumbnail"
                                 src="<?= Url::to('@web/images/parts/parts_akcesoria_tuningowe_2.jpg') ?>"
                                 alt="parts_akcesoria_tuningowe_2.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="oferta14"
                         class="tabcontent col-md-8 col-lg-8 col-xs-12 col-lg-offset-2 col-md-offset-2 offer-hide">
                        <h2>Części eksploatacyjne</h2>
                        <div class="txt">
                            <ul>
                                <li>tarcze</li>
                                <li>klocki hamulcowe</li>
                                <li>oleje - również oryginalne Hondy</li>
                                <li>filtry</li>
                                <li>akumulatory</li>
                                <li>łożyska</li>
                                <li>rozrządy</li>
                                <li>sprzęgła</li>
                                <li>przeguby</li>
                                <li>sworznie</li>
                                <li>termostaty</li>
                                <li>pompy wody</li>
                                <li>paski</li>
                                <li>kable zapłonowe</li>
                                <li>płyny eksploatacyjne</li>
                                <li>łączniki</li>
                                <li>uszczelki</li>
                            </ul>
                        </div>
                        <div class="img"><img class="thumbnail"
                                              src="<?= Url::to('@web/images/parts/parts_czesci_eksploat.jpg') ?>"
                                              alt="parts_czesci_eksploat.jpg">
                            <img class="thumbnail" src="<?= Url::to('@web/images/parts/parts_czesci_eksploat_2.jpg') ?>"
                                 alt="parts_czesci_eksploat_2.jpg">

                            <div class="galleryclear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="module request-cta">
            <div class="container" style="border: 1px solid; padding: 20px 20px 10px 20px;">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-xs-12 m-center">
                        <h4 class="font-alt">Dane kontaktowe</h4>

                        <p>
                            <strong>F.H.U. AUTOMOTIVE</strong><br>
                            WOLA NIESZKOWSKA 103<br>
                            32-700 BOCHNIA<br><br>

                            TELEFON: <strong>790-888-982</strong>

                        </p>
                    </div>
                    <div class="col-sm-9 col-md-9 col-xs-12">
                        <div class="col-md-4 col-sm-4 col-xs-12 m-center">
                            <h4 class="font-alt">Godziny pracy</h4><br>
                            <ul class="list-unstyled">
                                <li>PONIEDZIAŁEK – PIĄTEK <strong>8:00 – 18:00</strong></li>
                                <li>SOBOTA <strong>9:00 – 13:00</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <a href="<?= Url::to(['/kontakt']) ?>" class="btn btn-border-d btn-round m-margin">
                                        NAPISZ DO NAS
                                    </a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button class="btn btn-border-d btn-round">ZADZWOŃ: 790-888-982</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <div class="row">
        <section class="module lola" id="news" style="padding-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3"><h2 class="module-title font-alt">Nasze usługi</h2>
                        <div class="module-subtitle font-serif">
                            Jesteśmy młodą, dynamicznie rozwijającą się firmą zajmującą się sprzedażą używanych części
                            do samochodów.
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/pomoc-drogowa']) ?>">
                                    <img src="<?= Url::to('@web/images/pomoc.jpg') ?>" alt="POMOC DROGOWA">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/pomoc-drogowa']) ?>">
                                        POMOC DROGOWA
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Jeśli już zdarzy się coś nieprzewidzianego, najgorsze co można zrobić to panikować.
                                    Chcemy dać Ci poczucie bezpieczeństwa. Nasza pomoc drogowa dojedzie szybko we
                                    wskazane miejsce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/uzywane-czesci-samochodowe']) ?>">
                                    <img src="<?= Url::to('@web/images/car-1.jpeg') ?>"
                                         alt="UŻYWANE CZĘŚCI SAMOCHODOWE">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/uzywane-czesci-samochodowe']) ?>">
                                        UŻYWANE CZĘŚCI SAMOCHODOWE
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Wszytskie części, które mamy w ofercie pochodzą z pojazdów demontowanych w naszej
                                    stacji co daje nam możliwość przetestowania sprzedawanej części w aucie jak i
                                    później po zdemontowaniu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/uzywane-czesci-motocyklowe']) ?>">
                                    <img src="<?= Url::to('@web/images/moto-1.jpeg') ?>"
                                         alt="UŻYWANE CZĘŚCI MOTOCYKLOWE">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/uzywane-czesci-motocyklowe']) ?>">
                                        UŻYWANE CZĘŚCI MOTOCYKLOWE
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Wszytskie części, które mamy w ofercie pochodzą z pojazdów demontowanych w naszej
                                    stacji co daje nam możliwość przetestowania sprzedawanej części w motocyklu jak i
                                    później po zdemontowaniu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/skup-samochodow']) ?>">
                                    <img src="<?= Url::to('@web/images/car-2.jpg') ?>"
                                         alt="SKUP USZKODZONYCH SAMOCHODÓW">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/skup-samochodow']) ?>">
                                        SKUP USZKODZONYCH SAMOCHODÓW
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zakupimy od Państwa za gotówkę nie tylko samochody w dobrym stanie, ale również
                                    niesprawne mechanicznie, posiadające rozmaite defekty czy po usterce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/skup-motocykli']) ?>">
                                    <img src="<?= Url::to('@web/images/moto-2.jpeg') ?>"
                                         alt="SKUP USZKODZONYCH MOTOCYKLI">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/skup-motocykli']) ?>">
                                        SKUP USZKODZONYCH MOTOCYKLI
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zakupimy od Państwa za gotówkę nie tylko motocykle w dobrym stanie, ale również
                                    niesprawne mechanicznie, posiadające rozmaite defekty czy po usterce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="<?= Url::to(['/skup-quadow']) ?>">
                                    <img src="<?= Url::to('@web/images/quad.jpg') ?>" alt="SKUP USZKODZONYCH QUADÓW">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="<?= Url::to(['/skup-quadow']) ?>">
                                        SKUP USZKODZONYCH QUADÓW
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zakupimy od Państwa za gotówkę nie tylko quady w dobrym stanie, ale również
                                    niesprawne mechanicznie, posiadające rozmaite defekty czy po usterce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-20">
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="<?= Url::to('@web/images/alle.png') ?>" alt="SKLEP INTERNETOWY ALLEGRO">
                                </a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title">
                                    <a href="#">
                                        SKLEP INTERNETOWY
                                    </a>
                                </h2>
                            </div>
                            <div class="post-entry">
                                <p>
                                    Zapraszamy do naszego sklepu internetowego na portalu Allegro. Znajdą tam Państwo
                                    cały aktualny asortyment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?= $this->render('_my') ?>

        <section class="module pt-0 pb-0" id="contact">
            <div class="row position-relative m-0">
                <div class="col-xs-12 col-md-6">
                    <?php Pjax::begin(['enablePushState' => false]); ?>
                    <div class="row finance-image-content" style="padding: 26px 0;">
                        <div class="col-md-10 col-md-offset-1">

                            <?php if ($success): ?>
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="ajax-response font-alt" id="contactFormResponse">
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            Twoja wiadomość została wysłana, dziękujemy!
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>


                            <h2 class="module-title font-alt align-left">
                                Napisz do Nas
                            </h2>
                            <?php $form = ActiveForm::begin([
                                'options' => ['data' => ['pjax' => true]],
                            ]) ?>

                            <?= $form->field($model, 'name')->textInput(['placeholder' => 'Imię i Nazwisko'])->label(false); ?>

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Adres e-mail'])->label(false); ?>

                            <?= $form->field($model, 'message')->textarea(['rows' => '7', 'placeholder' => 'Treść Wiadomości'])->label(false); ?>

                            <div class="text-center">
                                <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Wyślij
                                </button>
                            </div>
                            <?php ActiveForm::end() ?>
                        </div>
                        <?php Pjax::end(); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-6 side-image p-0">
                    <section id="map-section">
                        <img src="<?= \yii\helpers\Url::to('@web/images/rewers.jpg') ?>">
                    </section>
                </div>
            </div>
        </section>


        <section class="module lola" style="padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Miejsca w których działamy</h2>
                    </div>
                    <div class="col-md-12">
                        <hr class="divider-w pt-20">
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <ul class="filter font-alt" id="filters">
                        <li><a class="" href="#">Kraków</a></li>
                        <li><a class="" href="#">Tarnów</a></li>
                        <li><a class="" href="#">Bochnia</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                        <li><a class="" href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>


</div>

<?php $this->beginBlock('script') ?>
<script>
    $("#offer-button").on("click", "button", function () {
        var id = $(this).attr('data-id');
        var $offers = $("div.offers");

        $offers.find('.offer-show').removeClass('offer-show').addClass('offer-hide');
        $offers.find(id).removeClass('offer-hide').addClass('offer-show');

        if ($(window).width() < 990) {
            $('html, body').animate({
                scrollTop: ($(id).offset().top) - 30
            }, 1000);
        }

    });
</script>
<?php $this->endBlock(); ?>
