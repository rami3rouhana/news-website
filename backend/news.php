<?php
    include 'db/connection.php';
    include 'db/models/News.php';
    header('Access-Control-Allow-Origin: *');
    $newsModel = new News($mysql);

    $result = $newsModel->getAlltNews();
    
    foreach($result as $row) {
        $response[] = $row;
    }
    echo(json_encode($response));
?>