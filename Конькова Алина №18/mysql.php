<?php
    $user = 'root';
    $password = 'root';
    $db = 'airline_equipment';
    $host = 'localhost';
    $port = 8889;

    $dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port;
    $pdo = new PDO($dsn, $user, $password);