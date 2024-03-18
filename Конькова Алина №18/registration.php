<?php
$surname = trim(filter_var($_POST['surname'], FILTER_SANITIZE_SPECIAL_CHARS));
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
$middlename = trim(filter_var($_POST['middlename'], FILTER_SANITIZE_SPECIAL_CHARS));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

require_once "../mysql.php";

$sql = 'INSERT INTO review(firstName, middleName, lastName, numberPhone, login, password) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$surname, $name $middlename, $login, $password]);

echo "Done";