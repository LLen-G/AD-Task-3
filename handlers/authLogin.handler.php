<?php
require_once UTILS_PATH . '/envSetter.util.php';
require_once UTILS_PATH . '/auth.util.php';

$host     = $typeConfig['pgHost'];
$port     = $typeConfig['pgPort'];
$dbname   = $typeConfig['pgDB'];
$username = $typeConfig['pgUser'];
$password = $typeConfig['pgPassword'];

$dsn = "pgsql:host={$host};port={$port};dbname={$dbname}";
$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

$username = $_POST['username'] ?? '';
$passwordInput = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute([':username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($passwordInput, $user['password'])) {
    $_SESSION['user'] = [
        'id' => $user['id'],
        'username' => $user['username'],
        'role' => $user['role'],
    ];
    header("Location: /index.php");
    exit;
} else {
    header("Location: /pages/login.page.php?error=invalid");
    exit;
}
