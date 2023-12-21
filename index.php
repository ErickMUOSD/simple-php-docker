<?php

echo "hello world! 2444";
$servername = getenv("DB_HOST");
$username = getenv("DB_USER");
$password = getenv("DB_PASSWORD");

$conn = mysqli_connect($servername, $username, $password, "test_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
    echo "Connected successfully";
}
