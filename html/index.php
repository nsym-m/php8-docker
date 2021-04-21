<?php
echo "hello php8!!<br>";

$dsn = 'mysql:dbname=test;host=mysql';
$user = 'root';
$password = 'pass';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "DB接続成功<br>";
} catch (PDOException $e) {
    echo "DB接続失敗: " . $e->getMessage() . "\n";
    exit();
}
