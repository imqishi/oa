<?php
$env = require(__DIR__ . '/.env.php');
$host = isset($env['DB_HOST']) ? $env['DB_HOST'] : 'localhost';
$db = isset($env['DB_NAME']) ? $env['DB_NAME'] : 'oa';
$user = isset($env['DB_USER']) ? $env['DB_USER'] : 'root';
$pwd = isset($env['DB_PASSWORD']) ? $env['DB_PASSWORD'] : '';

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host={$host};dbname={$db}",
    'username' => $user,
    'password' => $pwd,
    'charset' => 'utf8',
];
