<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Michal Zouhar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Váš psychiatr</title>
</head>
<body>
<header id="banner">
    <div class="container-full">
        <div class="row align-items-end">
            <div class="col-md-8 col-lg-9">
                <h1><img src="assets/img/ico/logo_yellow.svg" alt="logo" class="ico-large"></h1>
                <h2>Vidím koruny stromů<br> na vlnách štěkal pes</h2>
            </div>
            <div class="col-md-4 col-lg-3">
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
                            ordinace dle ordinačních hodin.
                        </p>
                    </div>
                    <div class="news-message">
                        <h4>17/09/2017</h4>
                        <p>
                            Ordinace bude uzavřena od 22/09/2017
                            do 29/09/2017. Do 22/12/2017 je provoz
                            ordinace dle ordinačních hodin.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto">
                <a href="#services"><img src="assets/img/ico/arrow.svg" alt="Více" class="ico-small"></a>
            </div>
        </div>
    </div>
</header>
<main>
    <section id="services">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-banner">
                        <h2>U nás se budete<br> cítit normálně</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-content" id="orbit">
                        <h3>Individuální &<br> skupinová terapie</h3>
                        <p>
                            Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                            zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                        </p>
                        <div class="row">
                            <div class="col-lg-12" id="orbit-controls">
                                <div class="orbit-neutron active"></div>
                                <div class="orbit-neutron"></div>
                                <div class="orbit-neutron"></div>
                                <div class="orbit-neutron"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-6">
                    <div class="teammate-photo" id="teammate-photo-1"></div>
                </div>
                <div class="col-lg-6">
                    <div class="teammate-photo" id="teammate-photo-2"></div>
                </div>
                <div class="col-lg-6">
                    <div class="teammate-info">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h4>MUDr. Andrea Wolna</h4>
                                <p>
                                    psychiatr, soudní znalec v oboru zdravotnictví, psycho-analytik, arteterapeut,
                                    mindfullnes,
                                    gerontopsychiatr
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="teammate-photo" id="teammate-photo-3"></div>
                </div>
                <div class="col-lg-6">
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
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-banner">
                        <h2>U nás se budete<br> cítit normálně</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-content">
                        <form name="message-form" action="index.php" method="POST" id="message-form">
                            <input type="text" name="name" value="" placeholder="Jméno...">
                            <input type="text" name="mail" value="" placeholder="E-mail...">
                            <input type="text" name="subject" value="" placeholder="Předmět...">
                            <textarea name="message" placeholder="Vaše zpráva..." maxlength="350"></textarea>
                            <input type="submit" name="submit" value="Odeslat zprávu">
                            <input type="hidden" name="submit_success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h5>Ordinační hodiny</h5>
                <div class="row">
                    <div class="col-lg-1">
                        <h6>Po</h6>
                    </div>
                    <div class="col-lg-11">
                        <span>8:30 - 13:30</span>
                    </div>
                    <div class="col-lg-1">
                        <h6>Út</h6>
                    </div>
                    <div class="col-lg-11">
                        <span>8:30 - 12:00&emsp;13:00 - 16:30</span>
                    </div>
                    <div class="col-lg-1">
                        <h6>St</h6>
                    </div>
                    <div class="col-lg-11">
                        <span>8:30 - 13:30</span>
                    </div>
                    <div class="col-lg-1">
                        <h6>Čt</h6>
                    </div>
                    <div class="col-lg-11">
                        <span>8:30 - 12:00&emsp;13:00 - 16:30</span>
                    </div>
                    <div class="col-lg-1">
                        <h6>Pá</h6>
                    </div>
                    <div class="col-lg-11">
                        <span>konziliární den</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5>Kontakt</h5>
                <address>
                    <div class="row">
                        <div class="col-lg-1">
                            <h6>Tel.</h6>
                        </div>
                        <div class="col-lg-11">
                            <span>493 522 029</span>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11">
                            <span>777 757 314</span>
                        </div>
                        <div class="col-lg-1">
                            <h6>Adr.</h6>
                        </div>
                        <div class="col-lg-11">
                            <span>Havličkova 146,</span>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11">
                            <span>508 01 Hořice</span>
                        </div>
                        <div class="col-lg-1">
                            <h6>Mail</h6>
                        </div>
                        <div class="col-lg-11">
                            <span>horice@vaspsychiatr.cz</span>
                        </div>
                    </div>
                </address>
            </div>
            <div class="col-lg-5">
                <h5>Studio Ulita</h5>
                <span>Út 16:00 - 19:30</span>
                <p>
                    Arteterapie, volnočasové aktivity,<br> práce s keramickou hlínou<br><a href="">studioulita.cz</a>
                </p>
            </div>
            <div class="col-lg-6" id="authors">
                <span>Váš psychiatr &copy; Michal Zouhar</span>
            </div>
        </div>
    </div>
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR8SBAKfYbh12Te7d7RLhViaoM4_5I6VI&callback=initMap" async
        defer></script>
<script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>
