<?php
$dsn = 'mysql:host=sql.njit.edu;dbname=ja394';
$username = 'ja394';
$password = 'BGATV1nw';
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
}
?>