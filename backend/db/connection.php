<?php

    $host="localhost";
    $db_user="root";
    $db_password=null;
    $db_name= "news";

    $mysql = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = `CREATE DATABASE IF NOT EXISTS $db_name`;
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }

    $conn->close();

?>