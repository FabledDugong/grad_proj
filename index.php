<?php
/* require_once "assets/php/lang-controls.php"; */
/* require_once "assets/php/news-editor.php"; */
require_once "assets/php/mail-send.php";
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Michal Zouhar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>

    <link rel="shortcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon">
    <title>Váš psychiatr</title>
</head>
<body>
<nav id="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-11 col-lg-1">
                <ul>
                    <li class="active">
                        <a href="#">Úvod</a>
                    </li>
                    <li>
                        <a href="#services">Služby</a>
                    </li>
                    <li>
                        <a href="#team">Tým</a>
                    </li>
                    <li>
                        <a href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<header id="banner">
    <div class="container-full">
        <div class="row align-items-end">
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
                <a href="."><img src="assets/img/ico/logo_yellow.svg" alt="logo" class="ico-large"></a>
                <h1>Vidím koruny stromů na vlnách štěkal pes</h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <h3>Aktuality <a href="#" id="login"><img src="assets/img/ico/edit.svg" alt="logo" class="ico-xsmall"
                                                          id="edit"></a></h3>
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
                <a href="#services" id="services-scroll" data-scroll><img src="assets/img/ico/arrow.svg" alt="Více"
                                                                          class="ico-small"></a>
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
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-content" id="orbit">
                        <div>
                            <h3>Individuální &<br> skupinová terapie</h3>
                            <p>
                                Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                                zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                            </p>
                        </div>
                        <div>
                            <h3>Kočka není pes<br> dolor sit oves</h3>
                            <p>
                                Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                                zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                            </p>
                        </div>
                        <div>
                            <h3>Jiný pes<br> jiný text</h3>
                            <p>
                                Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                                zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                            </p>
                        </div>
                        <div>
                            <h3>Akvárium<br> se jen třpytilo</h3>
                            <p>
                                Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                                zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-6 tile">
                    <div class="teammate-photo" id="teammate-photo-1"></div>
                    <div class="teammate-info test" id="teammate-info-1">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mx-auto">
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
                <div class="col-lg-6 tile">
                    <div class="teammate-photo" id="teammate-photo-2"></div>
                    <div class="teammate-info" id="teammate-info-1">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mx-auto">
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
                <div class="col-lg-6 tile">
                    <div class="teammate-photo" id="teammate-photo-2"></div>
                    <div class="teammate-info" id="teammate-info-1">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mx-auto">
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
                <div class="col-lg-6 tile">
                    <div class="teammate-photo" id="teammate-photo-3"></div>
                    <div class="teammate-info" id="teammate-info-1">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mx-auto">
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
                    <div class="section-content">
                        <h3>Byli psi dříve než slepice</h3>
                        <p>
                            Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne
                            pobuřovalo davy Skotů. Opice zapálila banán, hrozilo vlčí popálení.
                            Přeju ti krásné sny, doma mi říkavali Máťo. Oceánské dne pobuřovalo
                            davy Skotů. Opice zapálila banán, hrozilo vlčí popálení. Přeju ti
                            krásné sny, doma mi říkavali Máťo.
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
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-content">
                        <?php
                        if (isset($_GET["sent"]) === true) {
                            echo "Thank you for contacting us.";
                        } else {
                            if (empty($errors) === false) {
                                echo "<ul>";
                                foreach ($errors as $error) {
                                    echo "<li>" . $error . "</li>";
                                }
                                echo "</ul>";
                            }
                            ?>
                            <form name="message-form" action="" method="POST" id="message-form">
                                <input type="text" name="name"
                                       placeholder="Jméno a příjmení..." <?php if (isset($_POST["name"]) === true) {
                                    echo "value='", strip_tags($_POST['name']), "'";
                                } ?>>
                                <input type="text" name="mail"
                                       placeholder="E-mail..." <?php if (isset($_POST["mail"]) === true) {
                                    echo "value='", strip_tags($_POST['mail']), "'";
                                } ?>>
                                <input type="text" name="subject"
                                       placeholder="Předmět..." <?php if (isset($_POST["subject"]) === true) {
                                    echo "value='", strip_tags($_POST['subject']), "'";
                                } ?>>
                                <textarea name="message"
                                          placeholder="Vaše zpráva..."><?php if (isset($_POST["message"]) === true) {
                                        echo strip_tags($_POST['message']);
                                    } ?></textarea>
                                <input type="submit" name="submit" value="Odeslat">
                            </form>
                            <?php
                        }
                        ?>
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
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                <h5>Ordinační hodiny</h5>
                <div class="row">
                    <div class="col-xs-6 col-lg-1">
                        <h6>Po</h6>
                    </div>
                    <div class="col-xs-6 col-lg-11">
                        <span>8:30 - 13:30</span>
                    </div>
                    <div class="col-xs-4 col-lg-1">
                        <h6>Út</h6>
                    </div>
                    <div class="col-xs-8 col-lg-11">
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
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" id="ulita">
                <h5>Studio Ulita</h5>
                <div class="row">
                    <div class="offset-lg-6 col-lg-1">
                        <h6>Út</h6>
                    </div>
                    <div class="col-lg-5">
                        <span>16:00 - 19:30</span>
                    </div>
                    <div class="col-lg-12">
                        <p>
                            Arteterapie, volnočasové aktivity,<br> práce s keramickou hlínou<br><a href="">studioulita.cz</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" id="authors">
                <span>Váš psychiatr &copy; ZOFKA</span>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR8SBAKfYbh12Te7d7RLhViaoM4_5I6VI&callback=initMap"
        async></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>