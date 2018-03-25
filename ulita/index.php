<?php
require_once "assets/php/login.php";
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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon">
    <title>Studio Ulita</title>
</head>
<body>
<?php
if (isset($_SESSION["login-s"])) {
    echo "<div class='alert success login-alert'>Přihlášení proběhlo úspěšně.</div>";
    unset($_SESSION["login-s"]);
} else if (isset($_SESSION["login-f"])) {
    echo "<div class='alert failure login-alert'>Špatný e-mail nebo heslo.</div>";
    unset($_SESSION["login-f"]);
} else if (isset($_SESSION["register-s"])) {
    echo "<div class='alert success register-alert'>Registrace proběhla úspěšně.</div>";
    unset($_SESSION["register-s"]);
}
?>
<div class="modal" id="login-modal">
    <div class="modal-content">
        <div class="container-full">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 px-0">
                    <div id="tab-content">
                        <div class="tab-content active" id="login">
                            <h5>Přihlášení</h5>
                            <form action="" method="post" name="login-form" autocomplete="off" id="login-form">
                                <input type="text" name="login-email" placeholder="Email...">
                                <input type="password" name="login-pass" placeholder="Heslo...">
                                <input type="submit" name="submit-login" value="Přihlásit se">
                                <input type="hidden" name="submitted-login">
                            </form>
                        </div>
                        <div class="tab-content" id="registration">
                            <h5>Registrace</h5>
                            <form action="" method="post" name="registration-form" autocomplete="off"
                                  id="registration-form">
                                <input type="text" name="registration-fname" placeholder="Jméno...">
                                <input type="text" name="registration-sname" placeholder="Příjmení...">
                                <input type="text" name="registration-email" placeholder="Email...">
                                <input type="password" name="registration-password" placeholder="Heslo...">
                                <input type="password" name="registration-password-confirm"
                                       placeholder="Potvrzení hesla...">
                                <input type="submit" name="submit-registration" value="Registrovat se">
                                <input type="hidden" name="submitted-registration">
                            </form>
                        </div>
                        <div class="tab-content" id="lost-password">
                            <h5>Zapomenuté heslo</h5>
                            <form action="" method="post" name="lost-password-form" autocomplete="off"
                                  id="lost-password-form">
                                <input type="text" name="lost-password-name" placeholder="Email...">
                                <input type="submit" name="submit-lost-password" value="Obnovit heslo">
                                <input type="hidden" name="submitted-lost-password">
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="tab-controls">
                        <div class="row">
                            <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <button class="tab-tab">
                                    <span class="align-middle"><a href="#registration">Ještě nemám účet</a></span>
                                </button>
                            </div>
                            <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <button class="tab-tab active" disabled>
                                    <span class="align-middle"><a href="#login">Přihlásit se</a></span>
                                </button>
                            </div>
                            <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <button class="tab-tab">
                                    <span class="align-middle"><a href="#lost-password">Neznám heslo</a></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="banner">
    <div class="container-full h-100">
        <div class="row h-100">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                <img class="logo" src="assets/img/ico/ulita-logo.svg" alt="logo"/>
                <h1>Studio Ulita</h1>
                <h2>Arteterapeutická dílna</h2>
                <nav id="navigation">
                    <ul>
                        <?php
                        if ($_SESSION["loggedIn"]) {
                            echo "<li class='user'>" . $_SESSION["fname"];
                            switch ($_SESSION["iopl"]) {
                                case "0":
                                    echo "<span class='badge identify root'>R</span></li>";
                                    break;
                                case "1":
                                    echo "<div class='badge identify admin'>A</div></li>";
                                    break;
                                case "2":
                                    echo "<div class='badge identify user'>U</div></li>";
                                    break;
                                default:
                                    break;
                            }
                            echo
                            "<li>
                                <form action='' method='post' name='logout-form' id='logout-form'>
                                    <input type='submit' name='submit-logout' value='Odhlásit se'>
                                    <input type='hidden' name='submitted-logout'>
                                </form>
                            </li>";
                        } else {
                            echo
                            "<li><img class='align-middle' id='login-call' src='assets/img/ico/login.svg' alt='login'/></li>";
                        }
                        ?>
                        <li><a href="shop.php">Eshop</a></li>
                        <li><a href="blog.php">Články</a></li>
                        <li><a href="about.html">O studiu</a></li>
                        <li><a href="gallery.html">Galerie</a></li>
                        <li><a href="contact.html">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/control.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>