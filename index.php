<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wilih=device-wilih, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Michal Zouhar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/foundation.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Váš psychiatr</title>
</head>
<body>
<header id="banner">
    <div class="grid-container fluid">
        <div class="grid-x" id="banner-content">
            <div class="large-8 cell banner-welcome">
                <h1><img src="assets/img/ico/logo_yellow.svg" alt="logo" class="ico-large"></h1>
                <h2>Vidím koruny stromů<br> na vlnách štěkal pes</h2>
            </div>
            <div class="large-4 cell">
                <h3>Aktuality</h3>
                <div id="news-container">
                    <div class="news-message">
                        <h4>17/09/2017</h4>
                        <p>
                            Ordinace bude uzavřena od 22/09/2017
                            do 29/09/2017. Do 22/12/2017 je provoz
                            ordinace dle ordinačních hodin.
                        </p>
                    </div>
                    <div class="news-message">
                        <h4>17/09/2017</h4>
                        <p>
                            Ordinace bude uzavřena od 22/09/2017
                            do 29/09/2017. Do 22/12/2017 je provoz
                            ordinace dle ordinačních hodin
                        </p>
                    </div>
                    <div class="news-message">
                        <h4>17/09/2017</h4>
                        <p>
                            Ordinace bude uzavřena od 22/09/2017
                            do 29/09/2017. Do 22/12/2017 je provoz
                            ordinace dle ordinačních hodin
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell text-center">
            <a href="#services"><img src="assets/img/ico/arrow.svg" alt="Více" class="ico-small"></a>
        </div>
    </div>
</header>
<main>
    <section id="services">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell">
                    <div class="section-banner">
                        <h2>U nás se budete<br> cítit normálně</h2>
                    </div>
                </div>
                <div class="large-6 cell">
                    <div class="section-content">
                        <h3>Individuální &<br> skupinová terapie</h3>
                        <p>
                            Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                            zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                        </p>
                    </div>
                    <div class="orbit-controls">
                        <div class="orbit-neutron"></div>
                        <div class="orbit-neutron"></div>
                        <div class="orbit-neutron"></div>
                        <div class="orbit-neutron"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="large-6 cell">
                    <div class="teammate-photo" id="teammate-photo-1"></div>
                </div>
                <div class="large-6 cell">
                    <div class="teammate-photo" id="teammate-photo-2"></div>
                </div>
                <div class="large-6 cell">
                    <div class="teammate-info">
                        <h4>MUDr. Andrea Wolna</h4>
                        <p>
                            psychiatr, soudní znalec v oboru zdravotnictví, psycho-analytik, arteterapeut, mindfullnes,
                            gerontopsychiatr
                        </p>
                    </div>
                </div>
                <div class="large-6 cell">
                    <div class="teammate-photo" id="teammate-photo-3"></div>
                </div>
                <div class="large-6 cell">
                    <div class="section-content">
                        <h3>Byli psi dříve než slepice</h3>
                        <p>
                            Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne
                            pobuřovalo davy Skotů. Opice zapálila banán, hrozilo vlčí popálení.
                            Přeju ti krásné sny, doma mi říkavali Máťo. Oceánské dne pobuřovalo
                            davy Skotů. Opice zapálila banán, hrozilo vlčí popálení. Přeju ti
                            krásné sny, doma mi říkavali Máťo. Na vlnách štěkal pes, jablka
                            padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                            zapálila banán, hrozilo vlčí popálení.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell">
                    <div class="section-banner">
                        <h2>U nás se budete<br> cítit normálně</h2>
                    </div>
                </div>
                <div class="large-6 cell">
                    <div class="section-content">
                        <form name="message-form" action="index.php" method="POST" id="message-form">
                            <input type="text" name="name" value="" placeholder="Jméno">
                            <input type="text" name="mail" value="" placeholder="E-mail">
                            <input type="text" name="subject" value="" placeholder="Předmět">
                            <input type="text" name="message" value="" placeholder="Vaše zpráva">
                            <input type="submit" name="submit" value="Submit" class="float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="grid-container fluid">
        <div class="grid-x">
            <div class="large-4 small-12 cell footer-info-block">
                <h5>Ordinační hodiny</h5>
                <ul>
                    <li><span class="weekday">Po</span> 8:30 - 13:30</li>
                    <li><span class="weekday">Út</span> 8:30 - 12:00 13:00 - 16:30</li>
                    <li><span class="weekday">St</span> 8:30 - 13:30</li>
                    <li><span class="weekday">Čt</span> 8:30 - 12:00 13:00 - 16:30</li>
                    <li><span class="weekday">Pá</span> Konziliární den</li>
                </ul>
            </div>
            <div class="large-4 small-12 cell footer-info-block">
                <h5>Kontakt</h5>
                <address>
                    <ul>
                        <li>Tel.</li>
                        <li>493 522 029</li>
                        <li>777 757 314</li>
                        <li>Adr. Havlíčkova 146</li>
                        <li>508 01 Hořice</li>
                        <li>Mail</li>
                        <li>horice@vaspsychiatr.cz</li>
                    </ul>
                </address>
            </div>
            <div class="large-3 small-12 cell footer-info-block">
                <h5>Studio Ulita</h5>
                <span>ÚT 16:00 - 19:30</span>
                <p>
                    Arteterapie, volnočasové aktivity,<br> práce s keramickou hlínou<br><a href="">studioulita.cz</a>
                </p>
            </div>
            <div class="cell text-center">
                <span>Váš psychiatr &copy; Matouš Boček, Michal Zouhar</span>
            </div>
        </div>
    </div>
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR8SBAKfYbh12Te7d7RLhViaoM4_5I6VI&callback=initMap" async
        defer></script>
<script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>
