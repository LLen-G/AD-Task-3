<?php

declare(strict_types=1);

// 1) Composer autoload
require_once 'vendor/autoload.php';

// 2) Composer bootstrap
require_once 'bootstrap.php';

// 3) envSetter
require_once UTILS_PATH . '/envSetter.util.php';

// Connect to PostgreSQL using .env values
$host     = $typeConfig['pgHost'];
$port     = $typeConfig['pgPort'];
$dbname   = $typeConfig['pgDB'];
$username = $typeConfig['pgUser'];
$password = $typeConfig['pgPassword'];

$dsn = "pgsql:host={$host};port={$port};dbname={$dbname}";
$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

// Load dummy data

$users = require_once DUMMIES_PATH . '/users.staticData.php';

// Start seeding
echo "Seeding users…\n";

// Prepare insert statement
$stmt = $pdo->prepare("
    INSERT INTO users (username, role, first_name, last_name, password)
    VALUES (:username, :role, :fn, :ln, :pw)
");

// Execute insert per dummy
foreach ($users as $u) {
    $stmt->execute([
        ':username' => $u['username'],
        ':role'     => $u['role'],
        ':fn'       => $u['first_name'],
        ':ln'       => $u['last_name'],
        ':pw'       => password_hash($u['password'], PASSWORD_DEFAULT),
    ]);
}

echo "✅ PostgreSQL seeding complete!\n";
