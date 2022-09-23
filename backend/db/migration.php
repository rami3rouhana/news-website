<?php
include "./connection.php";

$sql = "CREATE DATABASE IF NOT EXISTS $db_name";

if ($mysql->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $mysql->error;
}
$sql = "CREATE TABLE news (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(30) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    url VARCHAR(255),
    image VARCHAR(255),
    publishedAt TIMESTAMP
    )";
    
if ($mysql->query($sql) === TRUE) {
echo "Table MyGuests created successfully";
} else {
echo "Error creating table: " . $mysql->error;
}


?>