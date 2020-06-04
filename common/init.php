<?php
header('content-type:text/html;charset=utf-8');
$dsn = "mysql:host=localhost;dbname=books_shop;charset=utf8";

try {
    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    echo 'PDO连接数据库失败！' . $e->getMessage();
}
?>