<?php
    $dsn = 'mysql:host=localhost;dbname=winter_survey';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('error.php');
        exit();
    }
?>