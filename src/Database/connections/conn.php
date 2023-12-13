<?php

require "../../../loadenv.php";

$DB_DRIVER = $_ENV["DRIVER"];
$DB_HOST = $_ENV["DB_HOST"]; 
$DB_NAME = $_ENV["DB_NAME"]; 
$DB_USER = $_ENV["DB_USER"]; 
$DB_PWORD = $_ENV["DB_PWORD"];
$DB_PORT = $_ENV["DB_PORT"];

$DSN = "$DB_DRIVER:host=$DB_HOST:$DB_PORT;dbname=$DB_NAME";

try {
    $conn = new PDO($DSN, $DB_USER, $DB_PWORD);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}