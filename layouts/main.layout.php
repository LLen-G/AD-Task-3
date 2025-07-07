<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?? 'App' ?></title>
</head>

<body>
    <header>
        <h1><?= $title ?? 'App' ?></h1>
        <?php if (isAuthenticated()): ?>
            <p>Welcome, <?= getCurrentUser()['username'] ?></p>
            <a href="/pages/logout.page.php">Logout</a>
        <?php endif; ?>
    </header>

    <main>
        <?= $content ?>
    </main>
</body>

</html>