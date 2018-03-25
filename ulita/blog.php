<?php
require_once "assets/php/blog.php";
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
<section id="blog">
    <div class="container-full">
        <div class="row">
            <div class="mx-auto">
                <div id="menu-call"><img id="nav-icon" src="assets/img/ico/menu.svg" alt="menu">
                    <div class="modal" id="menu-modal">
                        <div class="modal-content">
                            <ul>
                                <li><a href="index.php">Domů</a></li>
                                <li><a href="">Eshop</a></li>
                                <li><a href="">Články</a></li>
                                <li><a href="about.html">O studiu</a></li>
                                <li><a href="gallery.html">Galerie</a></li>
                                <li><a href="contact.html">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div id="postsList">
                    <?php
                    $results = $control->postPreview();
                    foreach ($results as $result) {
                        echo
                        "<div class='postPreview'>
                            <a href='#'><h3>$result->title</h3></a>
                            <h4>$result->category / $result->dat</h4>
                        </div>";
                    }
                    ?>
                </div>
                <div id="postsControl">
                    <span id="posts-newer">&and;</span>
                    <span id="posts-older">&or;</span>
                    <span id="post-new">napsat článek</span>
                </div>
            </div>
            <div class="col-xl-6">
                <div id="postView">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>