<?php

require_once "config.php";

if(isset($_POST["submitted-news"])) {
    $content = testInput($_POST["news-message"]);

    $queryInsert = "UPDATE news SET dat=default, content=:content WHERE id=(SELECT news_old.id FROM (SELECT * FROM news) AS news_old ORDER BY dat ASC LIMIT 1);";
    $stmt = $pdo->prepare($queryInsert);
    $stmt->execute([":content" => $content]);
    header("Location: admin.php?updated");
    exit();
}

$querySelect = "SELECT DATE_FORMAT(dat, '%d/%m/%Y') as dat, content FROM news;";
$stmtSelect = $pdo->prepare($querySelect);
$stmtSelect->execute();
$results = $stmtSelect->fetchAll();