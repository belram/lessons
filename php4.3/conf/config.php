<?php
$host = 'university.netology.ru';
$dbname = 'global';
$user = '';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Couldn't link: " . $e->getMessage();
}
