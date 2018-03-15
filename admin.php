<?php
require_once "assets/php/login.php";
require_once "assets/php/news-editor.php";
?>
<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/manage.css">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon">
    <title>Vaše administrace</title>
</head>
<body>
<?php
if (isset($_SESSION["loggedIn"])) {
    echo "<div class='alert success loginSuccessAlert'>Přihlášení proběhlo úspěšně.</div>";
    unset($_SESSION["loggedIn"]);
}
if (isset($_SESSION["loggedOut"])) {
    echo "<div class='alert success logoutSuccessAlert'>Odhlášení proběhlo úspěšně.</div>";
    unset($_SESSION["loggedOut"]);
}
?>
<header id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <a href="index.php"><img src="assets/img/ico/logo_yellow.svg" id="logo"></a>
                <?php
                if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                    echo
                    "<h1>Editace aktualit</h1>
                        <p>Toto je místo, kde můžete aktualizovat dění ve Vaší ordinaci, je to velmi jednoduché,
                        stačí pouze vyplnit příslušné pole a když jste se zprávou spokojeni, potvrdíte ji tlačítkem
                        <mark>PŘÍDAT AKTUALITU</mark>.</p>
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
    <section id="administration">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <?php
                    if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                        echo
                        "<div id='letterCount'>Zbývá znaků: 110</div>
                         <form name='newsForm' action='' method='post' autocomplete='off'>
                            <textarea name='newsMessage' placeholder='Obsah aktuality...' maxlength='110' id='newsMessage'></textarea>
                            <input type='submit' name='submitNewsForm' value='Přidat aktualitu'>
                            <input type='hidden' name='updatedNews'>
                         </form>";
                    } else {
                        echo
                        "<form name='loginForm' action='' method='post' autocomplete='off'>
                            <input type='text' name='username' placeholder='Uživatelské jméno...'>
                            <input type='password' name='password' placeholder='Heslo...'>
                            <input type='submit' name='submitLoginForm' value='Přihlásit se'>
                            <input type='hidden' name='loggedIn'>
                        </form>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
        echo
        "<section id='currentNews'>
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
</main>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <?php
                if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                    echo
                    "<form action='' method='post' autocomplete='off'>
                            <input type='submit' name='logout' value='Odhlásit se'>
                            <input type='hidden' name='loggedOut'>
                    </form>";
                } else {
                    echo "";
                }
                ?>
            </div>
            <div class="col-xl-8">
                <h6>Váš psychiatr &copy; ZOFKA</h6>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/alert.js"></script>
<script type="text/javascript" src="assets/js/admin.js"></script>
</body>
</html>
