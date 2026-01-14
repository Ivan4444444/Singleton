<?php

use ivan4444444\Singleton\DBConnWrong;
use ivan4444444\uuid\uuid;

use ivan4444444\Singleton\DBConnection;

require 'vendor/autoload.php';

$conn = DBConnection::getInstance();

$conn2 = DBConnection::getInstance();

echo '<br />';

$result = $conn->getConnection();
echo "Result: $result";

echo '<br />';

$result = $conn2->getConnection();
echo "Result: $result";

echo '<br />';
echo '<h1>Wrong</h1>';
$c1 = new DBConnWrong();
echo '<br />';
$c2 = new DBConnWrong();
