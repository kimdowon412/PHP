<?php
$host = "localhost";
$dbname = "myblog";
$charset = "utf8mb4";
$user = "root";
$passwd = "";
$option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $passwd, $option);

$sql = "SELECT * FROM user";
$result = $db->query($sql);
$list = $result->featchAll();

echo "<pre>";

echo "</pre>";