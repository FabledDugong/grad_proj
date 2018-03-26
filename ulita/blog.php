<?php
require_once "assets/php/blog.php";

$count = $control->allPosts();

$start = (isset($_GET['newer']))?$control->testData($_GET["newer"]):1;
$prev = ($start <= 0)? 0 : $start - 1;
$next = ($start >= $count)? $count : $start + 1;

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
                    $results = $control->postsPreview($start);
                    foreach ($results as $result) {
                        echo
                        "<div class='postPreview'>
                            <a href='blog.php?id=$result->id'><h3>$result->title</h3></a>
                            <h4>$result->category / $result->dat</h4>
                            <span class='post-edit'>editovat</span>
                            <span>/</span>
                            <span class='post-delete'>smazat</span>
                        </div>";
                    }
                    ?>
                </div>
                <div id="postsControl">
                    <span id="posts-newer"><a href="blog.php?newer=<?php echo $prev; ?>">&and;</a></span>
                    <span id="posts-older"><a href="blog.php?newer=<?php echo $next; ?>"">&or;</a></span>
                    <span id="post-new"><?php echo "<a href='blog.php?newPost'>napsat článek</a>"?></span>
                </div>
            </div>
            <div class="col-xl-6">
                <div id="action"></div>
                <?php
                if (isset($_GET["id"])) {
                    $requestedPost = $control->postView();
                    echo
                    "<div id='postView'>
                        <h3>$requestedPost->title</h3>
                        <h4>$requestedPost->category / $requestedPost->dat / autor: <span>$requestedPost->author</span></h4>
                        <p>$requestedPost->content</p>
                    </div>";
                } else if (isset($_GET["newPost"])) {
                    echo 
                    "<form action='' method='post' name='post-new-form' autocomplete='off' id='post-new-form'>
                        <input type='text' name='post-new-title' placeholder='Nadpis...'>
                        <input type='text' name='post-new-category' placeholder='Kategorie...'>
                        <textarea name='post-new-content' placeholder='Obsah...'></textarea>
                        <input type='submit' name='submit-post-new'>
                        <input type='hidden' name='submitted-post-new'>
                    </form>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>