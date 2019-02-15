<?php
require_once('Config.php');

global $conn;

$conn = null;
try {
    $conn = new PDO("mysql:host=%s;dbname=%s;charset=utf8",
        DATABASE_HOST,
        DATABASE_NAME,
        DATABASE_USER_NAME,
        DATABASE_USER_PASSWORD,
        [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
    );
} catch (PDOException $e) {
    die(' Wystąpił błąd podczas połączenia z serwerem' );
}