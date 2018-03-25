<?php
require_once "assets/php/login.php";
require_once "assets/php/news.php";
?>
<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon">
    <title>Vaše administrace</title>
</head>
<body>
<?php
if (isset($_SESSION["loginf"])) {
    echo "<div class='alert failure login-alert'>Špatné přihlašovací jméno nebo heslo.</div>";
    unset($_SESSION["loginf"]);
}
if (isset($_SESSION["loggedIn"])) {
    echo "<div class='alert success login-alert'>Přihlášení proběhlo úspěšně.</div>";
    unset($_SESSION["loggedIn"]);
}
if (isset($_SESSION["loggedOut"])) {
    echo "<div class='alert success login-alert'>Odhlášení proběhlo úspěšně.</div>";
    unset($_SESSION["loggedOut"]);
}
?>
<div class="alert warning manipulation-alert">Toto pole prosím vyplňte ručně.</div>
<header id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <a href="index.php"><img src="assets/img/ico/logo_yellow.svg" id="logo"></a>
                <?php
                if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                    echo
                    "<h1>Editace aktualit</h1>
                        <p>Toto je místo, kde můžete aktualizovat dění ve Vaší ordinaci. Je to velmi jednoduché,
                        stačí pouze vyplnit příslušné pole a když jste se sdělením spokojeni, potvrdíte ho stisknutím tlačítka
                        <mark>PŘIDAT AKTUALITU</mark>.</p>
                        ";
                } else {
                    echo
                    "<h1>Přihlášení do administrace</h1>
                        <p>Než budete pokračovat, <mark>přihlašte se</mark> prosím.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</header>
<main>
    <?php
    if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
        echo
        "<section id='current-news'>
            <div class='container'>
                <div class='row'>
                    <div class='col-xl-8'>
                        <div id='news'>
                            <h2>Aktuální aktuality</h2>
                            <div id='news-container'>
                                <div class='row'>";
        foreach ($results as $result) {
            echo
            "<div class='col-xl-4 news-message'>
                                            <h3>$result->dat</h3>
                                            <p>$result->content</p>
                                        </div>";
        }
        echo
        "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>";
    } else {
        echo "";
    }
    ?>
    <section id="administration">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <?php
                    if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                        echo
                        "<div id='letter-count'>Zbývá znaků: 110</div>
                         <form name='news-form' action='' method='post' autocomplete='off'>
                            <textarea name='news-message' placeholder='Obsah aktuality...' maxlength='110' id='news-message'></textarea>
                            <input type='submit' name='submit-news' value='Přidat aktualitu'>
                            <input type='hidden' name='submitted-news'>
                         </form>";
                    } else {
                        echo
                        "<form name='login-form' action='' method='post' autocomplete='off'>
                            <input type='text' name='username' placeholder='Uživatelské jméno...'>
                            <input type='password' name='password' placeholder='Heslo...'>
                            <input type='submit' name='submit-login' value='Přihlásit se'>
                            <input type='hidden' name='submitted-login'>
                        </form>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <?php
                if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                    echo
                    "<form action='' method='post' autocomplete='off'>
                            <input type='submit' name='logout' value='Odhlásit se.'>
                            <input type='hidden' name='submitted-logout'>
                    </form>";
                } else {
                    echo "
                    <a href='index.php'><span>Zpět na hlavní stránku.</span></a>";
                }
                ?>
            </div>
            <div class="col-xl-8">
                <h6>Váš psychiatr &copy; <a href="author.html">MZ</a></h6>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/control.js"></script>
<script type="text/javascript" src="assets/js/admin.js"></script>
</body>
</html>
