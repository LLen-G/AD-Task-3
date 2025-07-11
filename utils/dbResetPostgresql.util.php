<?php

declare(strict_types=1);

// 1) Composer autoload
require_once 'vendor/autoload.php';

// 2) Composer bootstrap
require_once 'bootstrap.php';

// 3) envSetter
require_once UTILS_PATH . '/envSetter.util.php';

// Retrieve credentials from $typeConfig
$host     = $typeConfig['pgHost'];
$port     = $typeConfig['pgPort'];
$dbname   = $typeConfig['pgDB'];
$username = $typeConfig['pgUser'];
$password = $typeConfig['pgPassword'];

// Connect to PostgreSQL
$dsn = "pgsql:host={$host};port={$port};dbname={$dbname}";
$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);


echo "Applying schema from database/users.model.sql…\n";
$sql = file_get_contents('database/users.model.sql');

if ($sql === false) {
    throw new RuntimeException("Could not read database/users.model.sql");
} else {
    echo "Creation Success from the database/users.model.sql\n";
}

$pdo->exec($sql);

echo "Truncating tables…\n";
foreach (['users'] as $table) {
    $pdo->exec("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE;");
}
