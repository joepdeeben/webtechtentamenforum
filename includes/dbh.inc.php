<?php
    $mysql_database = 'kithreads_deb';
    $mysql_host = 'localhost';
    $mysql_password = 'BOSVJpbLRngcsJinhoZzsflhQvneHIbF';
    $mysql_username = 'joepd';

    try {
        $db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database;charset=utf8",
        "$mysql_username", "$mysql_password");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        die('Error connecting to mysql server: ' . $e->getMessage());
    }
?>
