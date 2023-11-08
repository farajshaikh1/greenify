<?php
$host = 'localhost';
$db = 'greenify_database';
$user = 'root';
$pass = '';
$attr = "mysql:host=$host;dbname=$db";
$opts =
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

function getUserAccessRoleByID($id)
{
    global $pdo;
    $query = "select user_role from tbl_user_role where id = " . $id;
    $result = $pdo->query($query);
    $row = $result->fetch();

    return $row['user_role'];
}
