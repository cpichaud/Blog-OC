<?php 

$host = 'localhost';
$db   = 'blogdb_p5_2';
$user = 'root';
$psw  = '';
$port = '3306';
$dsn  = "mysql://hoost=$host;dbname=$db;port=$port;charset=utf8";
$options = [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES => false,
];


try {
    $pdo = new \PDO($dsn, $user, $psw, $options);
    echo 'yes';
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), $e->getCode());
}