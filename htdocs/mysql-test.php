<?php

$conn = mysqli_connect('mysql', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
if (!$conn) {
    exit('Connection failed: ' . mysqli_connect_error() . PHP_EOL);
}

echo 'Successful database connection!' . PHP_EOL;
