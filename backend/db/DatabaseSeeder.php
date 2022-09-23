<?php

include 'models/News.php';
include './connection.php';
$articles = include './articals.php';

$newsModel = new News($mysql);

foreach($articles['articles'] as $article)
    $newsModel->insertNews($article['author'], $article['title'], $article['description'], $article['url'], $article['urlToImage'], $article['publishedAt']);

?>