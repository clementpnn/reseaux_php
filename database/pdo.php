<?php
$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "db_maggle";
$username = "root";
$password = "root";
$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
?>