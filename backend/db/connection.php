<?php

    $host="localhost";
    $db_user="root";
    $db_password=null;
    $db_name= "news";
    $mysql = new mysqli();

    try{
        $mysql->real_connect($host, $db_user, $db_password, $db_name);
    }catch(Exception $e){
        $mysql->real_connect($host, $db_user, $db_password);
    }
    if ($mysql->connect_error) {
        die("Connection failed: " . $mysql->connect_error);
    }

?>