<?php
/*  Step 1 :  Create Connection */

function getConn()
{
    $db_host = 'localhost';
    $db_user = 'root';
    $db_name = 'book-share';
    $db_password = 'password';

    $dsn = 'mysql:host=' . $db_host . '; dbname=' . $db_name . ';charset=utf8';

    try {
        $db = new PDO($dsn, $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}
