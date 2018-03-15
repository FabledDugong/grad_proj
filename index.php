<?php
/* require_once "assets/php/lang-controls.php"; */
require_once "assets/php/news-editor.php";
require_once "assets/php/mail-send.php";
?>
<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Michal Zouhar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon">
    <title>Váš psychiatr</title>
</head>
<body>
<?php
if (isset($_SESSION["sent"])) {
    echo "<div class='alert success mailAlert'>Email byl úspěšně odeslán.</div>";
} else {
    if (empty($errors) === false) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    }
}
?>
<nav id="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-10 col-lg-2 col-xl-2">
                <ul>
                    <!--<li id="return">
                        <a href="#banner">Nahoru</a>
                    </li>-->
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <a href="."><img src="assets/img/ico/logo_yellow.svg" alt="logo" class="ico-large"></a>
                <h1>Vidím koruny stromů<br>na vlnách štěkal pes</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-3">
                <div id="news">
                    <h2>Aktuality</h2>
                    <div id="news-container">
                        <?php
                        foreach ($results as $result) {
                            echo
                            "<div class='news-message'>
                                    <h3>$result->dat</h3>
                                    <p>$result->content</p>
                            </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-1 mx-auto">
                <a href="#services" data-scroll class="ico-small"><img src="assets/img/ico/arrow.svg" alt="Více"></a>
            </div>
        </div>
    </div>
</header>
<main>
    <section id="services">
        <div class="container-full">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="section-banner">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="section-content" id="orbit">
                        <div class="orbitContent">
                            <h4>Individuální &<br> skupinová terapie</h4>
                            <p>
                                Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                                zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                            </p>
                        </div>
                        <div class="orbitContent">
                            <h4>Kočka není pes<br> dolor sit oves</h4>
                            <p>
                                Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                                zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                            </p>
                        </div>
                        <div class="orbitContent">
                            <h4>Jiný pes<br> jiný text</h4>
                            <p>
                                Na vlnách štěkal pes, jablka padala ze stromu. Oceánské dne pobuřovalo davy Skotů. Opice
                                zapálila banán, hrozilo vlčí popálení. Přeju ti krásné sny, doma mi říkavali Máťo.
                            </p>
                        </div>
                        <div class="orbitContent">
                            <h4>Akvárium<br> se jen třpytilo</h4>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 tile">
                    <div class="teammate-photo" id="teammate-photo-1"></div>
                    <div class="teammate-info test" id="teammate-info-1">
                        <div class="row">
                            <div class="mx-auto col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 tile">
                    <div class="teammate-photo" id="teammate-photo-2"></div>
                    <div class="teammate-info" id="teammate-info-1">
                        <div class="row">
                            <div class="mx-auto col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 tile">
                    <div class="teammate-photo" id="teammate-photo-2"></div>
                    <div class="teammate-info" id="teammate-info-1">
                        <div class="row">
                            <div class="mx-auto col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 tile">
                    <div class="teammate-photo" id="teammate-photo-3"></div>
                    <div class="teammate-info" id="teammate-info-1">
                        <div class="row">
                            <div class="mx-auto col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="section-content">
                        <h4>Byli psi dříve než slepice</h4>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="section-banner">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="section-content">
                        <form name="messageForm" action="" method="post" autocomplete="off" id="message-form">
                            <input type="text" name="name"
                                   placeholder="Jméno a Příjmení..." maxlength="30" <?php if (isset($_POST["name"]) === true) {
                                echo "value='", strip_tags($_POST['name']), "'";
                            } ?>>
                            <input type="text" name="mail"
                                   placeholder="E-mail..." maxlength="50" <?php if (isset($_POST["mail"]) === true) {
                                echo "value='", strip_tags($_POST['mail']), "'";
                            } ?>>
                            <input type="text" name="subject"
                                   placeholder="Předmět..." maxlength="50" <?php if (isset($_POST["subject"]) === true) {
                                echo "value='", strip_tags($_POST['subject']), "'";
                            } ?>>
                            <textarea name="message"
                                      placeholder="Vaše zpráva..." maxlength="500"></textarea>
                            <input type="submit" name="submit" value="Odeslat">
                            <input type="hidden" name="submittedMail">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                <h5>Ordinační hodiny</h5>
                <table>
                    <tr>
                        <th>Po</th>
                        <td>8:30 - 13:30</td>
                    </tr>
                    <tr>
                        <th>Út</th>
                        <td>8:30 - 12:00&emsp;13:00 - 16:30</td>
                    </tr>
                    <tr>
                        <th>St</th>
                        <td>8:30 - 13:30</td>
                    </tr>
                    <tr>
                        <th>Čt</th>
                        <td>8:30 - 12:00&emsp;13:00 - 16:30</td>
                    </tr>
                    <tr>
                        <th>Pá</th>
                        <td>konziliární den</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <h5>Kontakt</h5>
                <address>
                    <table>
                        <tr>
                            <th>Tel.</th>
                            <td>493 522 029</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>777 757 314</td>
                        </tr>
                        <tr>
                            <th>Adr.</th>
                            <td>Havličkova 146,</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>508 01 Hořice</td>
                        </tr>
                        <tr>
                            <th>Mail</th>
                            <td>horice@vaspsychiatr.cz</td>
                        </tr>
                    </table>
                </address>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 offset-xl-1 col-xl-4" id="ulita">
                <h5>Studio Ulita</h5>
                <table>
                    <tr>
                        <th>Út</th>
                        <td>16:00 - 19:30</td>
                    </tr>
                </table>
                <p>Arteterapie, volnočasové aktivity,<br> práce s keramickou hlínou<br> studioulita.cz</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="authors">
                <h6>Váš psychiatr &copy; ZOFKA</h6>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR8SBAKfYbh12Te7d7RLhViaoM4_5I6VI&callback=initMap"
        async></script>
<script type="text/javascript" src="assets/js/control.js"></script>
<script type="text/javascript" src="assets/js/alert.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>