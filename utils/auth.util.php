<?php
session_start();

function isAuthenticated(): bool
{
    return isset($_SESSION['user']);
}

function getCurrentUser(): array|null
{
    return $_SESSION['user'] ?? null;
}

function requireAuth(): void
{
    if (!isAuthenticated()) {
        header('Location: /pages/login.page.php');
        exit;
    }
}

function logout(): void
{
    session_destroy();
    header('Location: /pages/login.page.php');
    exit;
}
