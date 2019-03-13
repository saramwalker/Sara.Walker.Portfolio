<?php
    $dsn = 'mysql:host=localhost;dbname=swalke59_contact_saramwalker';
    $username = 'swalke59_contact';
    $password = 'Pa55word1!';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
