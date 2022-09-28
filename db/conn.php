<?php
    $host = 'localhost';
    $db = 'attendance_db';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $password);
        echo 'Hello DB';
    } catch(PDOException $e){
        // echo "<h1 class='text-danger'>Error in connection</h1>";
        throw new PDOException($e->getMessage());
    }

?>